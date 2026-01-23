<?php
namespace App\Http\Controllers;

use App\Models\Trainee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class TraineeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trainees = Trainee::orderBy('created_at', 'desc')->paginate(10);
        return view("admin.trainess.index", compact('trainees'));
    }

    /**
     * Show the specified resource.
     */
    public function show(Trainee $trainee)
    {
        if (! $trainee->is_read) {
            $trainee->update(['is_read' => true]);
        }
        return view("admin.trainess.show", compact('trainee'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trainee $trainee)
    {
        $trainee->delete();
        return redirect()->route("admin.trainees.index")
            ->with('success', 'Trainee deleted successfully.');
    }

    /**
     * Store a newly created trainee from the form.
     */
    public function store(Request $request)
    {
        $formType = $request->input('form', 'individual');

        try {
            if ($formType === 'individual') {
                // Validation for individual form
                $data = $request->validate([
                    'first_name' => 'required|string|max:255',
                    'last_name'  => 'required|string|max:255',
                    'email'      => 'required|email|max:255|unique:trainees,email',
                    'message'    => 'nullable|string',
                ]);

                $trainee = Trainee::create([
                    'type'       => 'individual',
                    'first_name' => $data['first_name'],
                    'last_name'  => $data['last_name'],
                    'email'      => $data['email'],
                    'password'   => Hash::make(uniqid()), // auto-generate
                    'message'    => $data['message'] ?? null,
                ]);

            } else { // Company form
                $data = $request->validate([
                    'company_name' => 'required|string|max:255',
                    'department'   => 'nullable|string|max:255',
                    'job_title'    => 'nullable|string|max:255',
                    'first_name'   => 'required|string|max:255',
                    'last_name'    => 'required|string|max:255',
                    'email'        => 'required|email|max:255|unique:trainees,email',
                    'message'      => 'nullable|string',
                ]);

                $trainee = Trainee::create([
                    'type'         => 'company',
                    'company_name' => $data['company_name'],
                    'department'   => $data['department'] ?? null,
                    'job_title'    => $data['job_title'] ?? null,
                    'first_name'   => $data['first_name'],
                    'last_name'    => $data['last_name'],
                    'email'        => $data['email'],
                    'password'     => Hash::make(uniqid()), // auto-generate
                    'message'      => $data['message'] ?? null,
                ]);
            }

            return redirect()->back()->with('success', 'Your training request is created successfully');

        } catch (ValidationException $e) {
            // Return validation errors with specific form error bag
            return redirect()->back()
                ->withErrors($e->errors(), $formType)
                ->withInput();
        } catch (\Exception $e) {
            // Log unexpected errors
            Log::error('Trainee form error: ' . $e->getMessage());

            return redirect()->back()
                ->with('error', 'حدث خطأ أثناء إرسال البيانات، يرجى المحاولة لاحقاً.')
                ->withInput();
        }
    }
}
