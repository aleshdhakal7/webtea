<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    // Show all files
    public function index()
    {
        $files = File::latest()->paginate(10);
        return view('Backend.file.index', compact('files'));
    }

    // Show create form
    public function create()
    {
        return view('Backend.file.create');
    }

    // Store new file
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'image' => ['required', 'image', 'max:2048'],
        ]);

        $path = $request->file('image')->store('uploads/files', 'public');

        File::create([
            'title' => $validated['title'],
            'image_path' => $path,
        ]);

        return redirect()->route('files.index')->with('success', 'File added successfully.');
    }

    // Show single file
    public function show(File $file)
    {
        return view('Backend.file.show', compact('file'));
    }

    // Show edit form
    public function edit(File $file)
    {
        return view('Backend.file.edit', compact('file'));
    }

    // Update file
    public function update(Request $request, File $file)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'image' => ['nullable', 'image', 'max:2048'],
        ]);

        $file->title = $validated['title'];

        if ($request->hasFile('image')) {
            if ($file->image_path && Storage::disk('public')->exists($file->image_path)) {
                Storage::disk('public')->delete($file->image_path);
            }
            $file->image_path = $request->file('image')->store('uploads/files', 'public');
        }

        $file->save();

        return redirect()->route('files.index')->with('success', 'File updated.');
    }

    // Delete file
    public function destroy(File $file)
    {
        if ($file->image_path && Storage::disk('public')->exists($file->image_path)) {
            Storage::disk('public')->delete($file->image_path);
        }
        $file->delete();

        return back()->with('success', 'File deleted.');
    }
}
