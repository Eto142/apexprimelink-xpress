<?php

namespace App\Mail;

use App\Models\Shipment;
use App\Models\ShipmentHistory;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ShipmentUpdateMail extends Mailable
{
    use Queueable, SerializesModels;

    public Shipment $shipment;
    public ShipmentHistory $history;
    public string $recipientType; // 'sender' or 'receiver'

    public function __construct(Shipment $shipment, ShipmentHistory $history, string $recipientType)
    {
        $this->shipment      = $shipment;
        $this->history       = $history;
        $this->recipientType = $recipientType;
    }

    public function build()
    {
        return $this->subject('Shipment Update – ' . $this->shipment->tracking_number . ' | ' . $this->history->status)
                    ->view('emails.shipment-update')
                    ->with([
                        'shipment'      => $this->shipment,
                        'history'       => $this->history,
                        'recipientType' => $this->recipientType,
                    ]);
    }
}
