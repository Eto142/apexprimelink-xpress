```blade
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Shipment Booking Confirmation</title>
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
                <p>Your shipment has been successfully booked.</p>
            @else
                <p>A shipment has been booked and is on its way to you.</p>
            @endif

            <hr style="border:none;border-top:1px solid #e5e5e5;margin:25px 0;">

            <p><strong>Tracking Number</strong><br>
            {{ $shipment->tracking_number }}</p>

            <hr style="border:none;border-top:1px solid #e5e5e5;margin:25px 0;">

            <p><strong>Shipment Details</strong></p>

            <p>
                <strong>Origin:</strong> {{ $shipment->origin }}<br>

                <strong>Destination:</strong> {{ $shipment->destination }}<br>

                @if($shipment->expected_delivery_date)
                <strong>Expected Delivery:</strong> {{ $shipment->expected_delivery_date }}<br>
                @endif

                @if($shipment->carrier)
                <strong>Carrier:</strong> {{ $shipment->carrier }}<br>
                @endif

                @if($shipment->shipment_mode)
                <strong>Shipment Mode:</strong> {{ $shipment->shipment_mode }}<br>
                @endif

                @if($shipment->product)
                <strong>Package:</strong> {{ $shipment->product }}<br>
                @endif

                <strong>Status:</strong> {{ $shipment->status }}
            </p>

            <hr style="border:none;border-top:1px solid #e5e5e5;margin:25px 0;">

            <p><strong>Sender</strong></p>

            <p>
                {{ $shipment->shipper_name }}<br>

                {{ $shipment->shipper_address }}

                @if($shipment->shipper_city)
                    , {{ $shipment->shipper_city }}
                @endif

                @if($shipment->shipper_country)
                    , {{ $shipment->shipper_country }}
                @endif

                @if($shipment->shipper_phone)
                    <br>{{ $shipment->shipper_phone }}
                @endif
            </p>

            <hr style="border:none;border-top:1px solid #e5e5e5;margin:25px 0;">

            <p><strong>Receiver</strong></p>

            <p>
                {{ $shipment->receiver_name }}<br>

                {{ $shipment->receiver_address }}

                @if($shipment->receiver_city)
                    , {{ $shipment->receiver_city }}
                @endif

                @if($shipment->receiver_country)
                    , {{ $shipment->receiver_country }}
                @endif
            </p>

            <hr style="border:none;border-top:1px solid #e5e5e5;margin:25px 0;">

            <p>
                You can track your shipment anytime by visiting:
            </p>

            <p>
                <a href="{{ url('/track-now') }}">
                    {{ url('/track-now') }}
                </a>
            </p>

            <p>
                Or search using your tracking number:
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

            https://apexprimelink-xpress.com<br><br>

            &copy; {{ date('Y') }} Apex Prime LX. All rights reserved.

        </div>

    </div>
</div>

</body>
</html>
```
