<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSectionRequest;
use App\Http\Requests\UpdateSectionRequest;
use App\Models\Section;
use Illuminate\Support\Facades\Storage;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sections = Section::paginate(10);
        return view("admin.sections.index", get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.sections.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSectionRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile("image")) {
            $image      = $request->file("image");
            $image_name = time() . "-" . $image->getClientOriginalName();
            Storage::disk("public")->putFileAs("sections", $image, $image_name);
            $data["image"] = $image_name;
        }

        Section::create($data);

        return redirect()->route("admin.sections.index")->with("success", "Section is created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Section $section)
    {
        return view("admin.sections.show", get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Section $section)
    {
        return view("admin.sections.edit", get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSectionRequest $request, Section $section)
    {
        $data = $request->validated();
        $data['is_active'] = $data['is_active'] === 'active' || $data['is_active'] === 1 ? 1 : 0;

        if ($request->hasFile("image")) {
            if (!empty($section->image) && Storage::disk("public")->exists("sections/" . $section->image)) {
                Storage::disk("public")->delete("sections/" . $section->image);
            }

            $image      = $request->file("image");
            $image_name = time() . "-" . $image->getClientOriginalName();
            Storage::disk("public")->putFileAs("sections", $image, $image_name);
            $data["image"] = $image_name;
        }

        $section->update($data);

        return redirect()->route("admin.sections.index")->with("success", "Section is updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Section $section)
    {
        if (!empty($section->image) && Storage::disk("public")->exists("sections/" . $section->image)) {
            Storage::disk("public")->delete("sections/" . $section->image);
        }

        $section->delete();

        return back()->with("success", "Section is deleted successfully");
    }
}
