```blade
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Shipment Update</title>
</head>
<body style="font-family: Arial, sans-serif; background:#f4f4f4; margin:0; padding:0;">

<div style="width:100%; padding:30px 0;">
    <div style="max-width:600px; margin:auto; background:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 2px 10px rgba(0,0,0,.05);">

        <!-- Header -->
        <div style="background:#1B4332; padding:20px; text-align:center;">
            <img
                src="https://apexprimelink-xpress.com/wp-content/uploads/2022/04/Screenshot_20231009_092214-150x150.png"
                alt="Apex Prime LX"
                width="150"
                style="display:block;margin:auto;">
        </div>

        <!-- Body -->
        <div style="padding:30px; color:#555; font-size:15px; line-height:1.8;">

            <p>
                Dear
                <strong>
                    {{ $recipientType === 'sender' ? $shipment->shipper_name : $shipment->receiver_name }}
                </strong>,
            </p>

            @if($recipientType === 'sender')
                <p>Your shipment has been updated.</p>
            @else
                <p>Your incoming shipment has a new status update.</p>
            @endif

            <hr style="border:none;border-top:1px solid #e5e5e5;margin:25px 0;">

            <p>
                <strong>Tracking Number</strong><br>
                {{ $shipment->tracking_number }}
            </p>

            <hr style="border:none;border-top:1px solid #e5e5e5;margin:25px 0;">

            <p><strong>Latest Update</strong></p>

            <p>
                <strong>Status:</strong> {{ $history->status }}<br>

                <strong>Location:</strong> {{ $history->location }}<br>

                <strong>Date:</strong>
                {{ \Carbon\Carbon::parse($history->date)->format('d M Y') }}<br>

                <strong>Time:</strong>
                {{ \Carbon\Carbon::parse($history->time)->format('h:i A') }}

                @if($history->remarks)
                <br><strong>Remarks:</strong>
                {{ $history->remarks }}
                @endif
            </p>

            <hr style="border:none;border-top:1px solid #e5e5e5;margin:25px 0;">

            <p><strong>Shipment Information</strong></p>

            <p>
                <strong>Origin:</strong>
                {{ $shipment->origin }}<br>

                <strong>Destination:</strong>
                {{ $shipment->destination }}

                @if($shipment->expected_delivery_date)
                <br><strong>Expected Delivery:</strong>
                {{ $shipment->expected_delivery_date }}
                @endif
            </p>

            <hr style="border:none;border-top:1px solid #e5e5e5;margin:25px 0;">

            <p>
                Track your shipment here:
            </p>

            <p>
                <a href="{{ url('/track-now') }}">
                    {{ url('/track-now') }}
                </a>
            </p>

            <p>
                Tracking Number:
                <strong>{{ $shipment->tracking_number }}</strong>
            </p>

            <p>
                Thank you for choosing <strong>Apex Prime LX</strong>.
            </p>

        </div>

        <!-- Footer -->
        <div style="background:#f8f8f8; padding:18px; text-align:center; font-size:12px; color:#777;">

            Apex Prime LX Logistics<br>

            support@apexprimelink-xpress.com<br>

            https://apexprimelink-xpress.com

            <br><br>

            This is an automated notification. Please do not reply to this email.

            <br><br>

            © {{ date('Y') }} Apex Prime LX. All rights reserved.

        </div>

    </div>
</div>

</body>
</html>
```
