<?php
namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SubscriberController extends Controller
{
    public function index()
    {
        $subscribers = Subscriber::latest()->paginate(10);
        return view("admin.subscribers.index", compact('subscribers'));
    }

    public function store(Request $request)
    {
        try {
            // Validate the input
            $validated = $request->validate([
                'email' => 'required|email|unique:subscribers,email',
            ]);

            // Create subscriber
            Subscriber::create([
                'email' => $validated['email'],
            ]);

            // Redirect with success message
            return redirect()->back()->with('success', 'Subscriber added successfully');

        } catch (\Illuminate\Validation\ValidationException $e) {
            // Validation errors, return with specific error bag 'subscriber'
            return redirect()->back()
                ->withErrors($e->validator, 'subscriber')
                ->withInput();
        } catch (\Exception $e) {
            // Other errors
            Log::error('Subscriber store error: ' . $e->getMessage());

            return redirect()->back()
                ->with('error', 'Something went wrong. Please try again.')
                ->withInput();
        }
    }

    public function destroy(Subscriber $subscriber)
    {
        $subscriber->delete();

        return redirect()->back()->with('success', 'Subscriber deleted successfully');
    }
}
