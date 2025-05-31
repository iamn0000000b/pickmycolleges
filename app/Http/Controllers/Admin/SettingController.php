<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Traits\MediaUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class SettingController extends Controller
{
    use MediaUploadTrait;
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = (object) Setting::pluck('value', 'key')->toArray();

        return view('admin.settings.index', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if($request->has('submit') && $request->input('submit') == 'general_setting') {
            if($request->hasFile('header_logo')) {
                $key = 'header_logo';
                $setting = Setting::where('key', $key)->first();

                $file = $request->file('header_logo');
                $value = $this->uploadMedia($file, 'settings', optional($setting)->value);

                Setting::updateOrCreate(
                    ['key' => $key],
                    ['value' => $value]
                );
            }

            if($request->hasFile('footer_logo')) {
                $key = 'footer_logo';
                $setting = Setting::where('key', $key)->first();

                $file = $request->file('footer_logo');
                $value = $this->uploadMedia($file, 'settings', optional($setting)->value);

                Setting::updateOrCreate(
                    ['key' => $key],
                    ['value' => $value]
                );
            }

            foreach ($request->settings as $key => $value) {
                Setting::updateOrCreate(
                    ['key' => $key],
                    ['value' => $value]
                );
            }
        }

        if($request->has('submit') && $request->input('submit') == 'social_media_setting') {
            foreach ($request->settings as $key => $value) {
                Setting::updateOrCreate(
                    ['key' => $key],
                    ['value' => $value]
                );
            }
        }

        if($request->has('submit') && $request->input('submit') == 'contact_setting') {
            foreach ($request->settings as $key => $value) {
                Setting::updateOrCreate(
                    ['key' => $key],
                    ['value' => $value]
                );
            }
        }

        if($request->has('submit') && $request->input('submit') == 'seo_setting') {
            foreach ($request->settings as $key => $value) {
                Setting::updateOrCreate(
                    ['key' => $key],
                    ['value' => $value]
                );
            }
        }

        Cache::forget('settings');

        return redirect()->route('admin.settings.index')->with('success','Setting updated successfully.');
    }
}
