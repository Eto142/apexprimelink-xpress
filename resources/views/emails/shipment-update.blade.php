<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Shipment Update</title>
</head>
<body style="font-family: Arial, sans-serif; background: #f4f4f4; margin: 0; padding: 0;">
<div style="width: 100%; padding: 30px 0;">
<div style="max-width: 620px; margin: auto; background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 10px rgba(0,0,0,0.08);">

    <!-- Header -->
    <div style="background: #1B4332; padding: 20px; text-align: center;">
        <img
            src="{{ asset('wp-content/uploads/2022/04/Screenshot_20231009_092214-150x150.png') }}"
            alt="Apex Prime LX"
            width="140"
            style="display:block; margin:auto;"
        >
    </div>

    <!-- Status Banner -->
    <div style="background: #f59e0b; padding: 14px 28px; display:flex; align-items:center; gap:10px;">
        <span style="font-size:22px;">📦</span>
        <div>
            <div style="font-size:11px; color:#7c5205; text-transform:uppercase; letter-spacing:1px; font-weight:700;">Shipment Status Update</div>
            <div style="font-size:18px; font-weight:800; color:#1a1a1a; margin-top:2px;">{{ $history->status }}</div>
        </div>
    </div>

    <!-- Greeting -->
    <div style="padding: 26px 28px 10px;">
        <p style="color:#333; font-size:15px; line-height:1.7; margin:0 0 10px;">
            Dear <strong>{{ $recipientType === 'sender' ? $shipment->shipper_name : $shipment->receiver_name }}</strong>,
        </p>
        <p style="color:#555; font-size:14px; line-height:1.7; margin:0;">
            @if($recipientType === 'sender')
                Your shipment has a new status update. Here are the latest details.
            @else
                Your incoming shipment has a new status update. Here are the latest details.
            @endif
        </p>
    </div>

    <!-- Tracking Number -->
    <div style="margin: 16px 28px; background: #f0f5ff; border-left: 4px solid #1B4332; padding: 12px 18px; border-radius: 4px;">
        <p style="margin:0; font-size:12px; color:#888; text-transform:uppercase; letter-spacing:1px;">Tracking Number</p>
        <p style="margin:5px 0 0; font-size:20px; font-weight:800; color:#1B4332; letter-spacing:1.5px;">
            {{ $shipment->tracking_number }}
        </p>
    </div>

    <!-- Update Details -->
    <div style="padding: 10px 28px 20px;">
        <table style="width:100%; border-collapse:collapse; font-size:14px;">
            <tr>
                <td colspan="2" style="background:#1B4332; color:#fff; padding:8px 12px; font-weight:700; font-size:13px; border-radius:3px;">
                    Latest Update
                </td>
            </tr>
            <tr style="background:#f9f9f9;">
                <td style="padding:9px 12px; color:#666; width:40%;">Status</td>
                <td style="padding:9px 12px; color:#111; font-weight:700;">{{ $history->status }}</td>
            </tr>
            <tr>
                <td style="padding:9px 12px; color:#666;">Location</td>
                <td style="padding:9px 12px; color:#111;">{{ $history->location }}</td>
            </tr>
            <tr style="background:#f9f9f9;">
                <td style="padding:9px 12px; color:#666;">Date &amp; Time</td>
                <td style="padding:9px 12px; color:#111;">
                    {{ \Carbon\Carbon::parse($history->date)->format('d M Y') }}
                    at {{ \Carbon\Carbon::parse($history->time)->format('h:i A') }}
                </td>
            </tr>
            @if($history->remarks)
            <tr>
                <td style="padding:9px 12px; color:#666;">Remarks</td>
                <td style="padding:9px 12px; color:#111;">{{ $history->remarks }}</td>
            </tr>
            @endif

            <!-- Shipment Route -->
            <tr><td colspan="2" style="padding:14px 0 4px;">&nbsp;</td></tr>
            <tr>
                <td colspan="2" style="background:#1B4332; color:#fff; padding:8px 12px; font-weight:700; font-size:13px; border-radius:3px;">
                    Shipment Info
                </td>
            </tr>
            <tr style="background:#f9f9f9;">
                <td style="padding:9px 12px; color:#666;">Origin</td>
                <td style="padding:9px 12px; color:#111;">{{ $shipment->origin }}</td>
            </tr>
            <tr>
                <td style="padding:9px 12px; color:#666;">Destination</td>
                <td style="padding:9px 12px; color:#111;">{{ $shipment->destination }}</td>
            </tr>
            @if($shipment->expected_delivery_date)
            <tr style="background:#f9f9f9;">
                <td style="padding:9px 12px; color:#666;">Expected Delivery</td>
                <td style="padding:9px 12px; color:#111;">{{ $shipment->expected_delivery_date }}</td>
            </tr>
            @endif
        </table>
    </div>

    <!-- CTA -->
    <div style="padding: 0 28px 28px; text-align:center;">
        <p style="color:#888; font-size:13px; margin-bottom:16px;">Track your shipment anytime using the link below:</p>
        <a href="{{ url('/track-now') }}"
           style="display:inline-block; background:#1B4332; color:#ffffff; padding:13px 32px; border-radius:6px; text-decoration:none; font-weight:700; font-size:15px; letter-spacing:.3px;">
            Track Shipment →
        </a>
    </div>

    <!-- Footer -->
    <div style="background:#f7f7f7; border-top:1px solid #eee; padding:18px 28px; text-align:center;">
        <p style="color:#aaa; font-size:12px; margin:0;">
            This is an automated notification from apexprimelink-xpress Company Limited.<br>
            Please do not reply to this email.
        </p>
    </div>

</div>
</div>
</body>
</html>
