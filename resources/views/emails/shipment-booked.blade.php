<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Shipment Booking Confirmation</title>
</head>
<body style="font-family: Arial, sans-serif; background: #f4f4f4; margin: 0; padding: 0;">
    <div style="width: 100%; padding: 30px 0;">
        <div style="max-width: 620px; margin: auto; background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 10px rgba(0,0,0,0.08);">

            <!-- Header -->
            <div style="background: #003366; padding: 20px; text-align: center;">
                <img
                    src="{{ asset('wp-content/uploads/2022/04/Screenshot_20231009_092214-150x150.png') }}"
                    alt="Swift Delivery Courier Logo"
                    width="140"
                    style="display:block; margin:auto;"
                >
            </div>

            <!-- Intro -->
            <div style="padding: 28px 28px 10px;">
                <h2 style="color: #003366; font-size: 20px; margin-bottom: 6px;">
                    Shipment Booking Confirmation
                </h2>
                <p style="color: #555; font-size: 15px; line-height: 1.6; margin-bottom: 6px;">
                    Dear <strong>{{ $recipientType === 'sender' ? $shipment->shipper_name : $shipment->receiver_name }}</strong>,
                </p>
                <p style="color: #555; font-size: 15px; line-height: 1.6;">
                    @if($recipientType === 'sender')
                        Your shipment has been successfully booked. Below are the full details.
                    @else
                        A shipment is on its way to you. Below are the full details.
                    @endif
                </p>
            </div>

            <!-- Tracking -->
            <div style="margin: 0 28px; background: #f0f5ff; border-left: 4px solid #003366; padding: 14px 18px; border-radius: 4px;">
                <p style="margin: 0; font-size: 14px; color: #777;">Tracking Number</p>
                <p style="margin: 4px 0 0; font-size: 22px; font-weight: bold; color: #003366; letter-spacing: 1px;">
                    {{ $shipment->tracking_number }}
                </p>
            </div>

            <!-- Details Table -->
            <div style="padding: 20px 28px;">
                <table style="width:100%; border-collapse: collapse; font-size: 14px;">

                    <!-- Shipment Info -->
                    <tr>
                        <td colspan="2" style="background:#003366; color:#fff; padding: 8px 12px; font-weight: bold; font-size:13px; border-radius:3px;">
                            Shipment Details
                        </td>
                    </tr>
                    <tr style="background:#f9f9f9;">
                        <td style="padding:8px 12px; color:#555; width:45%;">Origin</td>
                        <td style="padding:8px 12px; color:#222;">{{ $shipment->origin }}</td>
                    </tr>
                    <tr>
                        <td style="padding:8px 12px; color:#555;">Destination</td>
                        <td style="padding:8px 12px; color:#222;">{{ $shipment->destination }}</td>
                    </tr>
                    @if($shipment->expected_delivery_date)
                    <tr style="background:#f9f9f9;">
                        <td style="padding:8px 12px; color:#555;">Expected Delivery</td>
                        <td style="padding:8px 12px; color:#222;">{{ $shipment->expected_delivery_date }}</td>
                    </tr>
                    @endif
                    @if($shipment->carrier)
                    <tr>
                        <td style="padding:8px 12px; color:#555;">Carrier</td>
                        <td style="padding:8px 12px; color:#222;">{{ $shipment->carrier }}</td>
                    </tr>
                    @endif
                    @if($shipment->shipment_mode)
                    <tr style="background:#f9f9f9;">
                        <td style="padding:8px 12px; color:#555;">Shipment Mode</td>
                        <td style="padding:8px 12px; color:#222;">{{ $shipment->shipment_mode }}</td>
                    </tr>
                    @endif
                    @if($shipment->product)
                    <tr>
                        <td style="padding:8px 12px; color:#555;">Package</td>
                        <td style="padding:8px 12px; color:#222;">{{ $shipment->product }}</td>
                    </tr>
                    @endif
                    <tr style="background:#f9f9f9;">
                        <td style="padding:8px 12px; color:#555;">Status</td>
                        <td style="padding:8px 12px; color:#222;">{{ $shipment->status }}</td>
                    </tr>

                    <!-- Sender -->
                    <tr><td colspan="2" style="padding:12px 0 4px;">&nbsp;</td></tr>
                    <tr>
                        <td colspan="2" style="background:#003366; color:#fff; padding: 8px 12px; font-weight: bold; font-size:13px; border-radius:3px;">
                            Sender
                        </td>
                    </tr>
                    <tr style="background:#f9f9f9;">
                        <td style="padding:8px 12px; color:#555;">Name</td>
                        <td style="padding:8px 12px; color:#222;">{{ $shipment->shipper_name }}</td>
                    </tr>
                    @php
                        $shipperAddr = $shipment->shipper_address
                            . ($shipment->shipper_city    ? ', ' . $shipment->shipper_city    : '')
                            . ($shipment->shipper_country ? ', ' . $shipment->shipper_country : '');
                    @endphp
                    <tr>
                        <td style="padding:8px 12px; color:#555;">Address</td>
                        <td style="padding:8px 12px; color:#222;">{{ $shipperAddr }}</td>
                    </tr>
                    @if($shipment->shipper_phone)
                    <tr style="background:#f9f9f9;">
                        <td style="padding:8px 12px; color:#555;">Phone</td>
                        <td style="padding:8px 12px; color:#222;">{{ $shipment->shipper_phone }}</td>
                    </tr>
                    @endif

                    <!-- Receiver -->
                    <tr><td colspan="2" style="padding:12px 0 4px;">&nbsp;</td></tr>
                    <tr>
                        <td colspan="2" style="background:#003366; color:#fff; padding: 8px 12px; font-weight: bold; font-size:13px; border-radius:3px;">
                            Receiver
                        </td>
                    </tr>
                    <tr style="background:#f9f9f9;">
                        <td style="padding:8px 12px; color:#555;">Name</td>
                        <td style="padding:8px 12px; color:#222;">{{ $shipment->receiver_name }}</td>
                    </tr>
                    @php
                        $receiverAddr = $shipment->receiver_address
                            . ($shipment->receiver_city    ? ', ' . $shipment->receiver_city    : '')
                            . ($shipment->receiver_country ? ', ' . $shipment->receiver_country : '');
                    @endphp
                    <tr>
                        <td style="padding:8px 12px; color:#555;">Address</td>
                        <td style="padding:8px 12px; color:#222;">{{ $receiverAddr }}</td>
                    </tr>

                </table>
            </div>

            <!-- CTA -->
            <div style="text-align:center; padding: 10px 28px 28px;">
                <p style="color:#555; font-size:14px; margin-bottom:14px;">Track your shipment at any time using the tracking number above.</p>
                <a href="{{ url('/track-now') }}"
                   style="display:inline-block; background:#003366; color:#fff; padding:12px 28px; border-radius:5px; text-decoration:none; font-size:15px; font-weight:bold;">
                    Track Shipment
                </a>
            </div>

            <!-- Footer -->
            <div style="background:#f8f8f8; padding:15px; text-align:center; font-size:12px; color:#999;">
                &copy; {{ date('Y') }} Swift Delivery Courier. All rights reserved.
            </div>

        </div>
    </div>
</body>
</html>
