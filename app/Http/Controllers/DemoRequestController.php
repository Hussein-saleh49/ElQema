<?php
namespace App\Http\Controllers;

use App\Models\DemoRequest;
use Illuminate\Http\Request;

class DemoRequestController extends Controller
{
    public function index()
    {
        $requests = DemoRequest::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.requests.index', compact('requests'));
    }

    public function show(DemoRequest $request)
    {
        if (! $request->is_read) {
            $request->update(['is_read' => true]);
        }
        return view('admin.requests.show', compact('request'));
    }

    public function destroy(DemoRequest $request)
    {
        $request->delete();
        return redirect()->route('admin.requests.index')->with('success', 'Request deleted successfully.');
    }

    public function store(Request $request)
    {
        $request->validate([
            'organization'   => 'required|string|max:255',
            'full_name' => 'required|string|max:255',
            'email'     => 'required|email|max:255',
            'phone'     => 'required|string|max:30',
        ]);

        DemoRequest::create([
            'organization'   => $request->organization,
            'full_name' => $request->full_name,
            'email'     => $request->email,
            'phone'     => $request->phone,
        ]);

        return back()->with('success', __('theme.demo_sent_success'));
    }

}
