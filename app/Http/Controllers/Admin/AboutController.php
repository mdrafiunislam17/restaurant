<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index()
    {
        $abouts = About::all();
        return view('admin.about.index', compact('abouts'));

    }

    public function create()
    {

        return view('admin.about.create');

    }
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string',
            'title' => 'required|string',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/uploads/about', $imageName);
            $validatedData['image'] = $imageName;
        }

        About::query()->create($validatedData);

        return redirect()->route('admin.about.index')->with('success', 'Data added successfully.');
    }
    public function show(About $about)
    {
        return view('admin.about.show', compact('about'));

    }
    public function edit(About $about)
    {

        return view('admin.about.edit', compact('about'));
    }
    public function update(Request $request, About $about)
    {
        $validatedData = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'title' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|required|string',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/uploads/about', $imageName);
            $validatedData['image'] = $imageName;
        }

        $about->update($validatedData);
        return redirect()->route('admin.about.index')->with('success', 'Data updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy(About $about)
    {
        $about->delete();
        return redirect()->route('admin.about.index')->with('success', 'Data deleted successfully.');
    }
}
