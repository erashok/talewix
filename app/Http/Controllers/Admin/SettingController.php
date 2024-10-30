<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{
  public function index(){
    return view('admin.setting.index');
  }

  public function savedata(Request $request)
{
    // Validate the input
    $validator = Validator::make($request->all(), [
        'website_name' => 'nullable|max:500',
        'website_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Add validation for image
        'website_favicon' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:1024', // Add validation for image
        'description' => 'nullable',
        'meta_title' => 'nullable',
        'meta_keyword' => 'nullable',
        'meta_description' => 'nullable'
    ]);

    // Handle validation failure
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Retrieve the first setting (ID 1)
    $setting = Setting::where('id', '1')->first();

    if ($setting) {
        // Update existing setting
        $setting->website_name = $request->website_name;

        try {
            // Handle website logo upload
            if ($request->hasFile('website_logo')) {
                $file = $request->file('website_logo');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move('upload/settings/', $filename);
                $setting->website_logo = $filename;
            } else {
                $setting->website_logo = 'default-image.jpg'; // Default if no image is uploaded
            }

            // Handle website favicon upload
            if ($request->hasFile('website_favicon')) {
                $file = $request->file('website_favicon');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move('upload/settings/', $filename);
                $setting->website_favicon = $filename;
            } else {
                $setting->website_favicon = 'default-image.jpg'; // Default if no image is uploaded
            }
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['image_upload' => 'Image upload failed.'])->withInput();
        }

        // Update other settings
        $setting->meta_title = $request->meta_title;
        $setting->meta_keyword = $request->meta_keyword;
        $setting->meta_description = $request->meta_description;

        // Save the setting
        $setting->save();

        return redirect('admin/settings')->with('message', 'Settings updated successfully.');
    } else {
        // Create a new setting
        $setting = new Setting;
        $setting->website_name = $request->website_name;

        try {
            // Handle website logo upload
            if ($request->hasFile('website_logo')) {
                $file = $request->file('website_logo');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move('upload/settings/', $filename);
                $setting->website_logo = $filename;
            } else {
                $setting->website_logo = 'default-image.jpg'; // Default if no image is uploaded
            }

            // Handle website favicon upload
            if ($request->hasFile('website_favicon')) {
                $file = $request->file('website_favicon');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move('upload/settings/', $filename);
                $setting->website_favicon = $filename;
            } else {
                $setting->website_favicon = 'default-image.jpg'; // Default if no image is uploaded
            }
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['image_upload' => 'Image upload failed.'])->withInput();
        }

        // Save other settings
        $setting->meta_title = $request->meta_title;
        $setting->meta_keyword = $request->meta_keyword;
        $setting->meta_description = $request->meta_description;

        // Save the new setting
        $setting->save();

        return redirect('admin/settings')->with('message', 'Settings added successfully.');
    }
}

}
