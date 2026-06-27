@include('admin.header')

<div class="main-content">

    <div class="page-header">
        <div>
            <h1>Site Settings</h1>
            <p class="text-muted mb-0">Control global display options for the tracking portal.</p>
        </div>
    </div>

    @if(session('success'))
        <div style="background:#d4edda;color:#155724;padding:10px 16px;border-radius:6px;margin-bottom:20px;">
            <i class="bi bi-check-circle me-1"></i> {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('admin.settings.update') }}" method="POST">
        @csrf

        <div class="stat-card" style="padding: 28px;">

            <h5 style="margin-bottom:20px;font-weight:700;color:#0B3D91;">
                <i class="bi bi-map me-2"></i>Tracking Page
            </h5>

            <div style="display:flex;align-items:center;justify-content:space-between;padding:18px 0;border-bottom:1px solid #eee;">
                <div>
                    <div style="font-weight:600;margin-bottom:3px;">Show Shipment Map</div>
                    <div style="font-size:.85rem;color:#6c757d;">
                        Display the live Google Maps embed on the public shipment tracking page.
                        When off, only the tracking timeline and details are shown.
                    </div>
                </div>
                <div class="form-check form-switch ms-4" style="flex-shrink:0;">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        role="switch"
                        name="show_shipment_map"
                        id="show_shipment_map"
                        value="1"
                        style="width:3em;height:1.5em;cursor:pointer;"
                        {{ $showShipmentMap ? 'checked' : '' }}>
                </div>
            </div>

            <div style="display:flex;align-items:center;justify-content:space-between;padding:18px 0;border-bottom:1px solid #eee;">
                <div>
                    <div style="font-weight:600;margin-bottom:3px;">Send Booking Confirmation Emails</div>
                    <div style="font-size:.85rem;color:#6c757d;">
                        Default state of the email notification checkbox when creating a new shipment.
                        The admin can still override it per booking.
                    </div>
                </div>
                <div class="form-check form-switch ms-4" style="flex-shrink:0;">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        role="switch"
                        name="send_booking_emails"
                        id="send_booking_emails"
                        value="1"
                        style="width:3em;height:1.5em;cursor:pointer;"
                        {{ $sendBookingEmails ? 'checked' : '' }}>
                </div>
            </div>

            <div style="margin-top:24px;text-align:right;">
                <button type="submit" class="btn btn-primary px-4">
                    <i class="bi bi-save me-1"></i> Save Settings
                </button>
            </div>

        </div>
    </form>

</div>

@include('admin.footer')
