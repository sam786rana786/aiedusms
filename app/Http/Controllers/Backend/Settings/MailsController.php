<?php

namespace App\Http\Controllers\Backend\Settings;

use App\Models\General;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\Seo;
use App\Models\SocialLink;
use Illuminate\Http\RedirectResponse;

class MailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $settings = Setting::pluck('description', 'label');
        return view('backend.settings.localization', compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function localization(Request $request)
    {
        $request->validate([
            'timezone' => 'required',
            'date_format' => 'required',
            'time_format' => 'required',
            'currency' => 'required'
        ]);
        Setting::where('label', 'timezone')->update(['description' => $request->timezone]);
        Setting::where('label', 'date_format')->update(['description' => $request->date_format]);
        Setting::where('label', 'time_format')->update(['description' => $request->time_format]);
        Setting::where('label', 'currency')->update(['description' => $request->currency]);
        setLocalConfig();
        return redirect(route('localization'))->with('success', 'Localization settings have been updated.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function mailSettings()
    {
        $settings = Setting::pluck('description', 'label');
        return view('backend.settings.mailSettings', compact('settings'));
    }

    /**
     * Display the specified resource.
     */
    public function SettingsMail(Request $request)
    {
        $request->validate([
            'email_from' => 'required',
            'smtp_host' => 'required',
            'smtp_port' => 'required',
            'smtp_security' => 'required',
            'smtp_email' => 'required',
            'smtp_username' => 'required',
            'smtp_password' => 'required',
        ]);
        Setting::where('label', 'email_from')->update(['description' => $request->email_from]);
        Setting::where('label', 'smtp_host')->update(['description' => $request->smtp_host]);
        Setting::where('label', 'smtp_port')->update(['description' => $request->smtp_port]);
        Setting::where('label', 'smtp_security')->update(['description' => $request->smtp_security]);
        Setting::where('label', 'smtp_email')->update(['description' => $request->smtp_email]);
        Setting::where('label', 'smtp_username')->update(['description' => $request->smtp_username]);
        Setting::where('label', 'smtp_password')->update(['description' => $request->smtp_password]);
        return redirect(route('emailsettings'))->with('success', 'Mail Settings has been updated');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function general()
    {
        $general = General::find(1);
        return view('backend.settings.general', compact('general'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function storeGeneral(Request $request)
    {
        if ($request->details == 'basic') {

            $request->validate([
                'site_name' => 'required'
            ]);

            $general = General::findOrFail(1);
            $general->site_name = $request->site_name;

            if ($request->file('logo')) {
                $file = $request->file('logo');
                $filename = date('YmdHi') . str_replace(' ', '_', $file->getClientOriginalName());
                $file->move(public_path('backend/uploads/school'), $filename);
                $imageName = 'backend/uploads/school/' . $filename;
                if ($general->logo) {
                    unlink($general->logo);
                }
                $general->logo = $imageName;
            }

            if ($request->file('favicon')) {
                $file = $request->file('favicon');
                $filename = date('YmdHi') . str_replace(' ', '_', $file->getClientOriginalName());
                $file->move(public_path('backend/uploads/school'), $filename);
                $imageName = 'backend/uploads/school/' . $filename;
                if ($general->favicon) {
                    unlink($general->favicon);
                }
                $general->favicon = $imageName;
            }
            $general->save();
            return redirect(route('settings'))->with('success', 'Website Basic Details has been saved successfully.');
        }

        if ($request->details == 'school') {
            $request->validate([
                'school_name' => 'required',
                'short_name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'school_code' => 'nullable',
                'affiliation_number' => 'nullable',
                'address' => 'required'
            ]);

            $general = General::findOrFail(1);
            $general->school_name = $request->school_name;
            $general->short_name = $request->short_name;
            $general->email = $request->email;
            $general->phone = $request->phone;
            $general->school_code = $request->school_code;
            $general->affiliation_number = $request->affiliation_number;
            $general->address = $request->address;
            $general->save();
            return redirect(route('settings'))->with('success', 'School Details has been saved successfully.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function socialLinks()
    {
        $social = SocialLink::findOrFail(1);
        return view('backend.settings.socialLinks', compact('social'));
    }

    public function storeSocialLinks(Request $request)
    {
        $request->validate([
            'facebook' => 'nullable',
            'twitter' => 'nullable',
            'linkedin' => 'nullable',
            'youtube' => 'nullable',
            'other' => 'nullable',
        ]);

        $social = SocialLink::findOrFail(1);
        $social->facebook = $request->facebook;
        $social->twitter = $request->twitter;
        $social->youtube = $request->youtube;
        $social->linkedin = $request->linkedin;
        $social->others = $request->others;
        $social->save();
        return redirect(route('social_links'))->with('success', 'Social Links has been updated successfully');
    }

    public function seoSettings()
    {
        $seo = Seo::findOrFail(1);
        return view('backend.settings.seoSettings', compact('seo'));
    }

    public function storeSeoSettings(Request $request)
    {
        $request->validate([
            'meta_title' => 'required',
            'meta_keywords' => 'required',
            'meta_description' => 'required'
        ]);

        $seo = Seo::findOrFail(1);
        $seo->meta_title = $request->meta_title;
        $seo->meta_keywords = $request->meta_keywords;
        $seo->meta_description = $request->meta_description;
        $seo->save();
        return redirect(route('seo_settings'))->with('success', 'Seo Settings has been saved successfully');
    }
}
