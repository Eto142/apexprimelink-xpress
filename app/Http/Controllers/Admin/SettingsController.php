<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        return view('admin.settings', [
            'showShipmentMap'     => Setting::get('show_shipment_map', '1'),
            'sendBookingEmails'   => Setting::get('send_booking_emails', '1'),
        ]);
    }

    public function update(Request $request)
    {
        Setting::set('show_shipment_map',   $request->boolean('show_shipment_map') ? '1' : '0');
        Setting::set('send_booking_emails', $request->boolean('send_booking_emails') ? '1' : '0');

        return back()->with('success', 'Settings saved successfully.');
    }
}
