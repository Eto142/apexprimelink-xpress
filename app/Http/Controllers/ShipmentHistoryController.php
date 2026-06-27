<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use App\Models\Setting;
use App\Models\ShipmentHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ShipmentUpdateMail;

class ShipmentHistoryController extends Controller
{
    public function edit(Shipment $shipment)
    {
        $histories = $shipment->histories()->orderBy('date', 'desc')->orderBy('time', 'desc')->get();
        return view('admin.shipments.history', compact('shipment', 'histories'));
    }

    public function store(Request $request, Shipment $shipment)
    {
        $request->validate([
            'date' => 'required|date',
            'time' => 'required',
            'location' => 'required|string',
            'status' => 'required|string',
            'remarks' => 'nullable|string',
        ]);

        $historyEntry = $shipment->histories()->create($request->all());

        // Keep shipment's main status in sync with the latest history entry
        $shipment->update(['status' => $request->status]);

        // Send update email to sender and receiver if emails are present
        if (Setting::get('send_booking_emails', '1')) {
            if ($shipment->shipper_email) {
                Mail::to($shipment->shipper_email)->send(new ShipmentUpdateMail($shipment, $historyEntry, 'sender'));
            }
            if ($shipment->receiver_email) {
                Mail::to($shipment->receiver_email)->send(new ShipmentUpdateMail($shipment, $historyEntry, 'receiver'));
            }
        }

        return redirect()->route('shipment.history.edit', $shipment->id)
                         ->with('success', 'History entry added and notifications sent.');
    }


    //  public function edithistory(Shipment $shipment)
    // {
    //     $histories = $shipment->histories()->orderBy('date', 'desc')->orderBy('time', 'desc')->get();
    //     return view('admin.shipments.edit-history', compact('shipment', 'histories'));
    // }

    // Show page to edit a single history entry
public function edithistory(ShipmentHistory $history)
{
    return view('admin.shipments.edit-history', compact('history'));
}



    public function update(Request $request, ShipmentHistory $history)
    {
        $request->validate([
            'date' => 'required|date',
            'time' => 'required',
            'location' => 'required|string',
            'status' => 'required|string',
            'remarks' => 'nullable|string',
        ]);

        $history->update($request->all());

        // Re-sync shipment status to the latest history entry
        $shipment = $history->shipment;
        $latest = $shipment->histories()->orderBy('date', 'desc')->orderBy('time', 'desc')->first();
        $shipment->update(['status' => $latest->status]);

        return redirect()->back()->with('success', 'History entry updated successfully.');
    }

    public function destroy(ShipmentHistory $history)
    {
        $history->delete();
        return redirect()->back()->with('success', 'History entry deleted successfully.');
    }
}
