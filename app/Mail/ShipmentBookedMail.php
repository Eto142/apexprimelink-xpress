<?php

namespace App\Mail;

use App\Models\Shipment;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ShipmentBookedMail extends Mailable
{
    use Queueable, SerializesModels;

    public Shipment $shipment;
    public string $recipientType; // 'sender' or 'receiver'

    public function __construct(Shipment $shipment, string $recipientType)
    {
        $this->shipment      = $shipment;
        $this->recipientType = $recipientType;
    }

    public function build()
    {
        $subject = 'Shipment Booking Confirmation – ' . $this->shipment->tracking_number;

        return $this->subject($subject)
                    ->view('emails.shipment-booked')
                    ->with([
                        'shipment'      => $this->shipment,
                        'recipientType' => $this->recipientType,
                    ]);
    }
}
