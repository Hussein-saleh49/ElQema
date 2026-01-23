<?php
namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // جلب الرسائل مع ترتيبها من الأحدث للأقدم، مع Pagination
        $messages = Message::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.messages.index', compact('messages'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        // علامة على أن الرسالة تم قراءتها
        if (! $message->is_read) {
            $message->update(['is_read' => true]);
        }

        return view('admin.messages.show', compact('message'));
    }

    public function destroy(Message $message)
    {
        $message->delete();
        return redirect()->route('admin.messages.index')
            ->with('success', __('keywords.message_deleted_success'));
    }

    public function store(Request $request)
    {
        $formType = $request->input('form', 'individual');

        try {
            if ($formType === 'individual') {
                // تحقق من البيانات للفرد
                $data = $request->validate([
                    'first_name' => 'required|string|max:255',
                    'last_name'  => 'required|string|max:255',
                    'email'      => 'required|email|max:255|unique:users,email',
                    'message'    => 'nullable|string',
                ]);

                $message = Message::create([
                    'type'       => 'individual',
                    'first_name' => $data['first_name'],
                    'last_name'  => $data['last_name'],
                    'email'      => $data['email'],
                    // هنا لا يوجد password، يمكنك توليد واحد عشوائي أو تركه null
                    'password'   => Hash::make(uniqid()),
                    'message'    => $data['message'] ?? null,
                ]);

            } else { // company form
                $data = $request->validate([
                    'company_name' => 'required|string|max:255',
                    'department'   => 'nullable|string|max:255',
                    'job_title'    => 'nullable|string|max:255',
                    'first_name'   => 'required|string|max:255',
                    'last_name'    => 'required|string|max:255',
                    'email'        => 'required|email|max:255|unique:users,email',
                    'message'      => 'nullable|string',
                ]);

                $message = Message::create([
                    'type'         => 'company',
                    'company_name' => $data['company_name'],
                    'department'   => $data['department'] ?? null,
                    'job_title'    => $data['job_title'] ?? null,
                    'first_name'   => $data['first_name'],
                    'last_name'    => $data['last_name'],
                    'email'        => $data['email'],
                    'password'     => Hash::make(uniqid()),
                    'message'      => $data['message'] ?? null,
                ]);
            }

            // هنا يمكنك إرسال إيميل أو أي معالجة إضافية

            return redirect()->back()->with('success', 'تم إرسال رسالتك بنجاح!');

        } catch (ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->errors(), $formType)
                ->withInput();
        } catch (\Exception $e) {
            Log::error('Contact form error: ' . $e->getMessage());

            return redirect()->back()
                ->with('error', 'حدث خطأ أثناء إرسال البيانات، يرجى المحاولة لاحقاً.')
                ->withInput();
        }
    }

}
