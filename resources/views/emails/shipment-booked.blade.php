<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shipment Booking Confirmation</title>
</head>
<body style="margin:0;padding:0;background:#f5f5f5;font-family:Arial,Helvetica,sans-serif;color:#333333;">

<table width="100%" cellpadding="0" cellspacing="0" style="background:#f5f5f5;padding:30px 15px;">
<tr>
<td align="center">

<table width="600" cellpadding="0" cellspacing="0" style="background:#ffffff;border:1px solid #dddddd;">

    <!-- Header -->
    <tr>
        <td style="padding:25px;text-align:center;border-bottom:1px solid #eeeeee;">

            <img
                src="https://apexprimelink-xpress.com/wp-content/uploads/2022/04/Screenshot_20231009_092214-150x150.png"
                width="90"
                alt="Apex Prime LX">

            <h2 style="margin:15px 0 5px;color:#222;font-weight:600;">
                Shipment Booking Confirmation
            </h2>

            <p style="margin:0;color:#666;font-size:14px;">
                Apex Prime LX Logistics
            </p>

        </td>
    </tr>

    <!-- Greeting -->
    <tr>
        <td style="padding:30px;">

            <p style="margin-top:0;">
                Hello
                <strong>
                    {{ $recipientType == 'sender' ? $shipment->shipper_name : $shipment->receiver_name }}
                </strong>,
            </p>

            @if($recipientType == 'sender')
                <p>
                    Thank you for shipping with Apex Prime LX.
                    Your shipment has been successfully booked.
                </p>
            @else
                <p>
                    A shipment addressed to you has been booked and is currently being processed.
                </p>
            @endif

        </td>
    </tr>

    <!-- Tracking -->
    <tr>
        <td style="padding:0 30px 20px;">

            <table width="100%" cellpadding="12" cellspacing="0" style="border:1px solid #dddddd;background:#fafafa;">
                <tr>
                    <td>

                        <div style="font-size:13px;color:#777;">
                            Tracking Number
                        </div>

                        <div style="font-size:26px;font-weight:bold;color:#222;margin-top:5px;">
                            {{ $shipment->tracking_number }}
                        </div>

                    </td>
                </tr>
            </table>

        </td>
    </tr>

    <!-- Shipment -->
    <tr>
        <td style="padding:0 30px;">

            <h3 style="margin-bottom:10px;font-size:16px;">
                Shipment Details
            </h3>

            <table width="100%" cellpadding="8" cellspacing="0" style="border-collapse:collapse;">

                <tr>
                    <td width="35%" style="border:1px solid #eee;"><strong>Origin</strong></td>
                    <td style="border:1px solid #eee;">{{ $shipment->origin }}</td>
                </tr>

                <tr>
                    <td style="border:1px solid #eee;"><strong>Destination</strong></td>
                    <td style="border:1px solid #eee;">{{ $shipment->destination }}</td>
                </tr>

                @if($shipment->expected_delivery_date)
                <tr>
                    <td style="border:1px solid #eee;"><strong>Expected Delivery</strong></td>
                    <td style="border:1px solid #eee;">{{ $shipment->expected_delivery_date }}</td>
                </tr>
                @endif

                @if($shipment->carrier)
                <tr>
                    <td style="border:1px solid #eee;"><strong>Carrier</strong></td>
                    <td style="border:1px solid #eee;">{{ $shipment->carrier }}</td>
                </tr>
                @endif

                @if($shipment->shipment_mode)
                <tr>
                    <td style="border:1px solid #eee;"><strong>Shipment Mode</strong></td>
                    <td style="border:1px solid #eee;">{{ $shipment->shipment_mode }}</td>
                </tr>
                @endif

                @if($shipment->product)
                <tr>
                    <td style="border:1px solid #eee;"><strong>Package</strong></td>
                    <td style="border:1px solid #eee;">{{ $shipment->product }}</td>
                </tr>
                @endif

                <tr>
                    <td style="border:1px solid #eee;"><strong>Status</strong></td>
                    <td style="border:1px solid #eee;">{{ $shipment->status }}</td>
                </tr>

            </table>

        </td>
    </tr>

    <!-- Sender -->
    <tr>
        <td style="padding:30px 30px 10px;">

            <h3 style="margin-bottom:10px;font-size:16px;">
                Sender
            </h3>

            @php
                $shipperAddr = trim(
                    $shipment->shipper_address .
                    ($shipment->shipper_city ? ', '.$shipment->shipper_city : '') .
                    ($shipment->shipper_country ? ', '.$shipment->shipper_country : '')
                );
            @endphp

            <table width="100%" cellpadding="8" cellspacing="0">

                <tr>
                    <td width="35%"><strong>Name</strong></td>
                    <td>{{ $shipment->shipper_name }}</td>
                </tr>

                <tr>
                    <td><strong>Address</strong></td>
                    <td>{{ $shipperAddr }}</td>
                </tr>

                @if($shipment->shipper_phone)
                <tr>
                    <td><strong>Phone</strong></td>
                    <td>{{ $shipment->shipper_phone }}</td>
                </tr>
                @endif

            </table>

        </td>
    </tr>

    <!-- Receiver -->
    <tr>
        <td style="padding:10px 30px 30px;">

            <h3 style="margin-bottom:10px;font-size:16px;">
                Receiver
            </h3>

            @php
                $receiverAddr = trim(
                    $shipment->receiver_address .
                    ($shipment->receiver_city ? ', '.$shipment->receiver_city : '') .
                    ($shipment->receiver_country ? ', '.$shipment->receiver_country : '')
                );
            @endphp

            <table width="100%" cellpadding="8" cellspacing="0">

                <tr>
                    <td width="35%"><strong>Name</strong></td>
                    <td>{{ $shipment->receiver_name }}</td>
                </tr>

                <tr>
                    <td><strong>Address</strong></td>
                    <td>{{ $receiverAddr }}</td>
                </tr>

            </table>

        </td>
    </tr>

    <!-- Tracking Link -->
    <tr>
        <td style="padding:0 30px 30px;">

            <p>
                You can track this shipment anytime using the following link:
            </p>

            <p style="word-break:break-all;">
                <a href="{{ url('/track-now') }}">
                    {{ url('/track-now') }}
                </a>
            </p>

            <p>
                Tracking Number:
                <strong>{{ $shipment->tracking_number }}</strong>
            </p>

        </td>
    </tr>

    <!-- Footer -->
    <tr>
        <td style="padding:25px;text-align:center;background:#fafafa;border-top:1px solid #eeeeee;font-size:13px;color:#777;">

            <strong>Apex Prime LX Logistics</strong><br>

            Email:
            support@apexprimelink-xpress.com

            <br><br>

            Website:<br>

            https://apexprimelink-xpress.com

            <br><br>

            © {{ date('Y') }} Apex Prime LX. All rights reserved.

        </td>
    </tr>

</table>

</td>
</tr>
</table>

</body>
</html>