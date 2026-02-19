<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminAboutSectionController extends Controller
{
    public function index()
    {
        $aboutSection = AboutSection::first();

        return view('admin.homepage.about.index', compact('aboutSection'));
    }

    public function store(Request $request)
    {
        Log::info('About Section Form Data:', $request->all());
        $validated = $request->validate([
            'heading_en' => 'required|string|max:255',
            'heading_ar' => 'required|string|max:255',
            'subtitle_en' => 'nullable|string|max:255',
            'subtitle_ar' => 'nullable|string|max:255',
            'highlight_word_en' => 'nullable|string|max:255',
            'highlight_word_ar' => 'nullable|string|max:255',
            'paragraph_en' => 'nullable|string',
            'paragraph_ar' => 'nullable|string',
            'main_image' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'main_image_alt' => 'nullable|string|max:255',
            'small_image' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'small_image_alt' => 'nullable|string|max:255',
            'icon_image' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'label_en' => 'nullable|string|max:255',
            'label_ar' => 'nullable|string|max:255',
            'description_en' => 'nullable|string',
            'description_ar' => 'nullable|string',
            'remove_main_image' => 'nullable|boolean',
            'remove_small_image' => 'nullable|boolean',
            'remove_icon_image' => 'nullable|boolean',
        ]);

        $aboutSection = AboutSection::firstOrNew([]);
        $aboutSection->fill($validated);

        // ===== Handle Main Image =====
        if ($request->hasFile('main_image')) {

            if ($aboutSection->main_image && file_exists(public_path($aboutSection->main_image))) {
                unlink(public_path($aboutSection->main_image));
            }

            $file = $request->file('main_image');

            $extension = $file->getClientOriginalExtension();

            $filename = time().'_'.pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME).'.'.$extension;

            $destination = public_path('uploads/about-sections/main_images');

            if (! file_exists($destination)) {
                mkdir($destination, 0775, true);
            }

            $file->move($destination, $filename);

            $aboutSection->main_image = 'uploads/about-sections/main_images/'.$filename;
        }

        // ===== Handle Small Image =====
        if ($request->hasFile('small_image')) {

            if ($aboutSection->small_image && file_exists(public_path($aboutSection->small_image))) {
                unlink(public_path($aboutSection->small_image));
            }

            $file = $request->file('small_image');

            $extension = $file->getClientOriginalExtension();

            $filename = time().'_'.pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME).'.'.$extension;

            $destination = public_path('uploads/about-sections/small_images');

            if (! file_exists($destination)) {
                mkdir($destination, 0777, true);
            }

            $file->move($destination, $filename);

            $aboutSection->small_image = 'uploads/about-sections/small_images/'.$filename;
        } elseif ($request->input('remove_small_image') == 1) {

            if ($aboutSection->small_image && file_exists(public_path($aboutSection->small_image))) {
                unlink(public_path($aboutSection->small_image));
            }

            $aboutSection->small_image = null;
        }

        // ===== Handle Icon Image =====
        if ($request->hasFile('icon_image')) {

            if ($aboutSection->icon_image && file_exists(public_path($aboutSection->icon_image))) {
                unlink(public_path($aboutSection->icon_image));
            }

            $file = $request->file('icon_image');

            $extension = $file->getClientOriginalExtension();

            $filename = time().'_'.pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME).'.'.$extension;

            $destination = public_path('uploads/about-sections/icon_images');

            if (! file_exists($destination)) {
                mkdir($destination, 0777, true);
            }

            $file->move($destination, $filename);

            $aboutSection->icon_image = 'uploads/about-sections/icon_images/'.$filename;
        } elseif ($request->input('remove_icon_image') == 1) {

            if ($aboutSection->icon_image && file_exists(public_path($aboutSection->icon_image))) {
                unlink(public_path($aboutSection->icon_image));
            }

            $aboutSection->icon_image = null;
        }

        // ===== Save to Database =====
        try {
            $aboutSection->save();
            Log::info('About section saved successfully', $aboutSection->toArray());
        } catch (\Exception $e) {
            Log::error('Failed to save about section: '.$e->getMessage());

            return redirect()->back()->withInput()->with('status-error', 'Failed to save about section: '.$e->getMessage());
        }

        return redirect()->route('admin.about-sections.index')
            ->with('status-success', 'About section has been updated successfully!');
    }
    // public function store(Request $request)
    // {
    //     $validated = $request->validate([
    //         'heading_en' => 'required|string|max:255',
    //         'heading_ar' => 'required|string|max:255',
    //         'subtitle_en' => 'nullable|string|max:255',
    //         'subtitle_ar' => 'nullable|string|max:255',
    //         'highlight_word_en' => 'nullable|string|max:255',
    //         'highlight_word_ar' => 'nullable|string|max:255',
    //         'paragraph_en' => 'nullable|string',
    //         'paragraph_ar' => 'nullable|string',
    //         'main_image' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
    //         'small_image' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
    //         'icon_image' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
    //         'remove_main_image' => 'nullable|boolean',
    //         'remove_small_image' => 'nullable|boolean',
    //         'remove_icon_image' => 'nullable|boolean',
    //     ]);

    //     $aboutSection = AboutSection::firstOrNew([]);
    //     $aboutSection->fill($validated);

    //     // ===== Main Image =====
    //     if ($request->hasFile('main_image')) {
    //         $this->deleteImage($aboutSection->main_image);

    //         $path = $this->uploadImage(
    //             $request,
    //             'main_image',
    //             'about-sections/main_images'
    //         );

    //         $aboutSection->main_image = 'storage/' . $path;
    //     } elseif ($request->boolean('remove_main_image')) {
    //         $this->deleteImage($aboutSection->main_image);
    //         $aboutSection->main_image = null;
    //     }

    //     // ===== Small Image =====
    //     if ($request->hasFile('small_image')) {
    //         $this->deleteImage($aboutSection->small_image);

    //         $path = $this->uploadImage(
    //             $request,
    //             'small_image',
    //             'about-sections/small_images'
    //         );

    //         $aboutSection->small_image = 'storage/' . $path;
    //     } elseif ($request->boolean('remove_small_image')) {
    //         $this->deleteImage($aboutSection->small_image);
    //         $aboutSection->small_image = null;
    //     }

    //     // ===== Icon Image =====
    //     if ($request->hasFile('icon_image')) {
    //         $this->deleteImage($aboutSection->icon_image);

    //         $path = $this->uploadImage(
    //             $request,
    //             'icon_image',
    //             'about-sections/icon_images'
    //         );

    //         $aboutSection->icon_image = 'storage/' . $path;
    //     } elseif ($request->boolean('remove_icon_image')) {
    //         $this->deleteImage($aboutSection->icon_image);
    //         $aboutSection->icon_image = null;
    //     }

    //     $aboutSection->save();

    //     return redirect()
    //         ->route('admin.about-sections.index')
    //         ->with('status-success', 'تم حفظ البيانات بنجاح');
    // }

    private function uploadImage(Request $request, $fieldName, $folder)
    {
        if (! $request->hasFile($fieldName)) {
            return null;
        }

        $file = $request->file($fieldName);

        $filename =
            time().'_'.
            Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)).
            '.'.$file->extension();

        return $file->storeAs($folder, $filename, 'public');
    }

    private function deleteImage($imagePath)
    {
        if (! $imagePath) {
            return;
        }

        $path = str_replace('storage/', '', $imagePath);

        if (Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }
    }
}
