<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::paginate(10);
        return view('admin.services.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '-' . $image->getClientOriginalName();

            Storage::disk('public')->putFileAs(
                'services',
                $image,
                $image_name
            );

            $data['image'] = $image_name;
        }

        Service::create($data);

        return redirect()
            ->route('admin.services.index')
            ->with('success', 'service is created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return view('admin.services.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        $data = $request->validated();

        $data['is_active'] =
            $data['is_active'] === 'active' || $data['is_active'] == 1
                ? 1
                : 0;

        if ($request->hasFile('image')) {

            if (
                !empty($service->image) &&
                Storage::disk('public')->exists('services/' . $service->image)
            ) {
                Storage::disk('public')->delete('services/' . $service->image);
            }

            $image = $request->file('image');
            $image_name = time() . '-' . $image->getClientOriginalName();

            Storage::disk('public')->putFileAs(
                'services',
                $image,
                $image_name
            );

            $data['image'] = $image_name;
        }

        $service->update($data);

        return redirect()
            ->route('admin.services.index')
            ->with('success', 'service is updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        if (
            !empty($service->image) &&
            Storage::disk('public')->exists('services/' . $service->image)
        ) {
            Storage::disk('public')->delete('services/' . $service->image);
        }

        $service->delete();

        return back()->with('success', 'service is deleted successfully');
    }
}
