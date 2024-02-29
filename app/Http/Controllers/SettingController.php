<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('back.setting.edit');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        // Retrieve the settings record
        $settings = Setting::firstOrCreate([]);
        $data = Setting::first();

        return view('back.setting.edit', compact('settings', 'data'));
    }

    // Update the settings
    public function update(Request $request)
    {


// Validate the request data
$request->validate([
    'address' => 'nullable|string',
    'email' => 'nullable|email',
    'phone' => 'nullable|string',
    'time_schedule' => 'nullable|string',
    'fb_id' => 'nullable|string',
    'twitter_id' => 'nullable|string',
    'linkedin_id' => 'nullable|string',
    'instagram_id' => 'nullable|string',
    'youtube_id' => 'nullable|string',
    'logo_header' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    'logo_bottom' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    'logo_navbar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
]);

// Retrieve the settings record
$settings = Setting::firstOrCreate([]);

// Update other fields
$settings->address = $request->input('address');
$settings->email = $request->input('email');
$settings->phone = $request->input('phone');
$settings->time_schedule = $request->input('time_schedule');
$settings->fb_id = $request->input('fb_id');
$settings->twitter_id = $request->input('twitter_id');
$settings->linkedin_id = $request->input('linkedin_id');
$settings->instagram_id = $request->input('instagram_id');
$settings->youtube_id = $request->input('youtube_id');

// Update logo images if provided
if ($request->hasFile('logo_header')) {
    $logoHeaderPath = $request->file('logo_header')->store('public/logos');
    $settings->logo_header = Storage::url($logoHeaderPath);
}
if ($request->hasFile('logo_bottom')) {
    $logoBottomPath = $request->file('logo_bottom')->store('public/logos');
    $settings->logo_bottom = Storage::url($logoBottomPath);
}
if ($request->hasFile('logo_navbar')) {
    $logoNavbarPath = $request->file('logo_navbar')->store('public/logos');
    $settings->logo_navbar = Storage::url($logoNavbarPath);
}

// Save the updated settings
$settings->save();

return redirect()->route('settings.edit')
    ->with('success', 'Settings updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
