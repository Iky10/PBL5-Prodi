<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\OutputLulusan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AdminOutputLulusanController extends Controller
{
    public function index()
    {
        $outputLulusans = OutputLulusan::all();
        return view('admin.output_lulusan.index', compact('outputLulusans'));
    }

    public function create()
    {
        return view('admin.output_lulusan.create');   
    }

    public function store(Request $request) 
    {
        try {
            $request->validate([
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5000',
                'title' => 'required|string|max:255',
                'description' => 'required|string|max:255',
            ]);
    
            $imagePath = null;
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('images', 'public');
            }
    
            OutputLulusan::create([
                'image' => $imagePath,
                'title' => $request->title,
                'description' => $request->description,
            ]);
    
            return redirect()->route('admin.output_lulusan.index')->with('success', 'Berita berhasil ditambahkan.');
        } catch (\Exception $e) {
            return redirect()->route('admin.output_lulusan.index')->with('failed', 'Terjadi kesalahan, perubahan gagal!');
        }
    }

    public function edit($id)
    {
        $outputLulusan = OutputLulusan::findOrFail($id);
        return view('admin.output_lulusan.edit', compact('outputLulusan'));
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5000',
                'title' => 'required|string|max:255',
                'description' => 'required|string|max:255',
            ]);
    
            $outputLulusan = OutputLulusan::findOrFail($id);
    
            
            if ($request->hasFile('image')) {
                if ($outputLulusan->image && Storage::exists($outputLulusan->image)) {
                    Storage::delete($outputLulusan->image);
                }
                
                $path = $request->file('image')->store('images', 'public');
                $outputLulusan->image = $path;
            }
    
            $outputLulusan->title = $request->title;
            $outputLulusan->description = $request->description;
            
            $outputLulusan->save();
    
            return redirect()->route('admin.output_lulusan.index')->with('success', 'Output Lulusan Berhasil Diubah!');
        } catch (\Exception $e) {
            return redirect()->route('admin.output_lulusan.index')->with('failed', 'Terjadi kesalahan, perubahan gagal!');
        }
    }

    public function delete($id)
    {
        try {
            $outputLulusan = OutputLulusan::findOrFail($id);

            if ($outputLulusan->image && Storage::exists($outputLulusan->image)) {
                Storage::delete($outputLulusan->image);
            }

            $outputLulusan->delete();

            return redirect()->route('admin.output_lulusan.index')->with('success', 'Output Lulusan berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('admin.output_lulusan.index')->with('failed', 'Terjadi kesalahan, data gagal dihapus!');
        }
    }

}
