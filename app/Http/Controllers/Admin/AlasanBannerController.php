<?php

namespace App\Http\Controllers\Admin;

use App\Models\AlasanBanner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;


class AlasanBannerController extends Controller
{
    public function index()
    {
        $alasanBanner = AlasanBanner::all();
        return view('admin.alasan_banner.index', compact('alasanBanner'));   
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);

        $alasanBanner = AlasanBanner::findOrFail($id);

        $alasanBanner->name = $request->input('name');

        if ($request->hasFile('image')) {
            if ($alasanBanner->image && Storage::exists($alasanBanner->image)) {
                Storage::delete($alasanBanner->image);
            }

            $path = $request->file('image')->store('images', 'public');
            $alasanBanner->image = $path;
        }

        $alasanBanner->save();

        return redirect()->route('admin.alasan_banner.index')->with('success', 'Banner Berhasil Diubah!');
    }
}
