@include('admin.header')

<style>
/* ── Dashboard-specific overrides ───────────────────────────── */

/* Welcome Banner */
.dash-welcome {
    background: linear-gradient(135deg, #0B3D91 0%, #062060 60%, #0d47a1 100%);
    border-radius: 16px;
    padding: 28px 32px;
    margin-bottom: 28px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 16px;
    position: relative;
    overflow: hidden;
}
.dash-welcome::before {
    content: '';
    position: absolute;
    top: -40px; right: -40px;
    width: 200px; height: 200px;
    background: rgba(255,255,255,.05);
    border-radius: 50%;
}
.dash-welcome::after {
    content: '';
    position: absolute;
    bottom: -60px; right: 80px;
    width: 160px; height: 160px;
    background: rgba(255,255,255,.04);
    border-radius: 50%;
}
.dash-welcome-text h2 {
    font-size: 1.55rem;
    font-weight: 700;
    color: #fff;
    margin: 0 0 4px;
}
.dash-welcome-text p {
    color: rgba(255,255,255,.7);
    margin: 0;
    font-size: .92rem;
}
.dash-welcome-meta {
    display: flex;
    align-items: center;
    gap: 10px;
    background: rgba(255,255,255,.1);
    border: 1px solid rgba(255,255,255,.15);
    border-radius: 10px;
    padding: 10px 18px;
    color: rgba(255,255,255,.9);
    font-size: .85rem;
    backdrop-filter: blur(6px);
    position: relative;
    z-index: 1;
}
.dash-welcome-meta i { color: #90caf9; font-size: 1rem; }

/* Stat Cards */
.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 18px;
    margin-bottom: 28px;
}
.stat-card {
    background: #fff;
    border-radius: 14px;
    padding: 22px 20px;
    box-shadow: 0 2px 12px rgba(0,0,0,.06);
    border: 1px solid #eef0f4;
    display: flex;
    align-items: center;
    gap: 18px;
    transition: transform .2s, box-shadow .2s;
    position: relative;
    overflow: hidden;
}
.stat-card::after {
    content: '';
    position: absolute;
    top: 0; left: 0;
    width: 4px; height: 100%;
    border-radius: 14px 0 0 14px;
}
.stat-card.c-total::after  { background: #0B3D91; }
.stat-card.c-transit::after { background: #f59e0b; }
.stat-card.c-delivered::after { background: #16a34a; }
.stat-card.c-booked::after { background: #e53e3e; }
.stat-card:hover { transform: translateY(-3px); box-shadow: 0 8px 24px rgba(0,0,0,.1); }

.stat-icon {
    width: 52px; height: 52px;
    border-radius: 12px;
    display: flex; align-items: center; justify-content: center;
    font-size: 1.4rem;
    flex-shrink: 0;
}
.stat-icon.s-total    { background: #eff6ff; color: #0B3D91; }
.stat-icon.s-transit  { background: #fffbeb; color: #d97706; }
.stat-icon.s-delivered{ background: #f0fdf4; color: #16a34a; }
.stat-icon.s-booked   { background: #fff5f5; color: #e53e3e; }

.stat-content { flex: 1; min-width: 0; }
.stat-content h3 {
    font-size: 2rem; font-weight: 800;
    margin: 0; line-height: 1; color: #1a202c;
}
.stat-content p { color: #718096; margin: 4px 0 0; font-size: .82rem; font-weight: 500; }

/* Quick Actions */
.quick-actions {
    background: #fff;
    border-radius: 14px;
    padding: 22px 22px 18px;
    box-shadow: 0 2px 12px rgba(0,0,0,.06);
    border: 1px solid #eef0f4;
    margin-bottom: 28px;
}
.quick-actions .qa-heading {
    font-size: .7rem;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color: #a0aec0;
    margin-bottom: 16px;
}
.action-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
    gap: 12px;
}
.action-btn {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 10px;
    padding: 20px 12px;
    background: #f7f9fc;
    border: 1.5px solid #eef0f4;
    border-radius: 12px;
    color: #2d3748;
    text-decoration: none;
    font-size: .82rem;
    font-weight: 600;
    transition: all .2s;
}
.action-btn i { font-size: 1.4rem; }
.action-btn:hover {
    background: linear-gradient(135deg, #0B3D91, #1565c0);
    color: #fff;
    border-color: transparent;
    transform: translateY(-2px);
    box-shadow: 0 6px 18px rgba(11,61,145,.25);
}

/* Table Card */
.table-card {
    background: #fff;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 2px 12px rgba(0,0,0,.06);
    border: 1px solid #eef0f4;
    margin-bottom: 10px;
}
.table-header {
    padding: 18px 22px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid #eef0f4;
}
.table-header h5 {
    font-weight: 700; margin: 0; font-size: 1rem; color: #1a202c;
}
.table thead th {
    background: #f7f9fc;
    color: #6b7280;
    font-size: .75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: .8px;
    padding: 12px 16px;
    border-bottom: 1px solid #eef0f4;
    white-space: nowrap;
}
.table tbody td {
    padding: 13px 16px;
    vertical-align: middle;
    border-color: #f1f5f9;
    font-size: .875rem;
}
.table tbody tr:hover { background: #f7f9fc; }

.trk-num {
    font-family: 'Courier New', monospace;
    font-weight: 700;
    font-size: .8rem;
    color: #0B3D91;
    background: #eff6ff;
    padding: 3px 8px;
    border-radius: 5px;
    white-space: nowrap;
}

/* Status badges */
.status-badge {
    padding: 4px 10px;
    border-radius: 20px;
    font-size: .75rem;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 5px;
    white-space: nowrap;
}
.status-badge .dot { width:6px;height:6px;border-radius:50%;display:inline-block;flex-shrink:0; }
.status-pending   { background:#f1f5f9; color:#475569; }
.status-pending .dot   { background:#94a3b8; }
.status-processing{ background:#dbeafe; color:#1e40af; }
.status-processing .dot{ background:#3b82f6; }
.status-transit   { background:#fffbeb; color:#b45309; }
.status-transit .dot   { background:#f59e0b; }
.status-delivered { background:#dcfce7; color:#166534; }
.status-delivered .dot { background:#16a34a; }

/* Row action btns */
.row-actions { display:flex; gap:6px; flex-wrap:wrap; }
.row-actions .btn { font-size:.75rem; padding:4px 10px; border-radius:7px; }
</style>

<div class="main-content">

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
        <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif

    {{-- Welcome Banner --}}
    <div class="dash-welcome">
        <div class="dash-welcome-text">
            <h2>Welcome back, {{ auth()->guard('admin')->user()->name }} 👋</h2>
            <p>Here's what's happening with your shipments right now.</p>
        </div>
        <div class="dash-welcome-meta">
            <i class="bi bi-calendar3"></i>
            <span id="live-date"></span>
        </div>
    </div>

    {{-- Stat Cards --}}
    <div class="stats-grid">
        <div class="stat-card c-total">
            <div class="stat-icon s-total"><i class="bi bi-truck"></i></div>
            <div class="stat-content">
                <h3>{{ $totalShipments }}</h3>
                <p>Total Tracking IDs</p>
            </div>
        </div>
        <div class="stat-card c-transit">
            <div class="stat-icon s-transit"><i class="bi bi-arrow-repeat"></i></div>
            <div class="stat-content">
                <h3>{{ $inTransit }}</h3>
                <p>In Transit</p>
            </div>
        </div>
        <div class="stat-card c-delivered">
            <div class="stat-icon s-delivered"><i class="bi bi-check2-circle"></i></div>
            <div class="stat-content">
                <h3>{{ $delivered }}</h3>
                <p>Delivered</p>
            </div>
        </div>
        <div class="stat-card c-booked">
            <div class="stat-icon s-booked"><i class="bi bi-box-seam"></i></div>
            <div class="stat-content">
                <h3>{{ $booked }}</h3>
                <p>New Bookings</p>
            </div>
        </div>
    </div>

    {{-- Quick Actions --}}
    <div class="quick-actions">
        <div class="qa-heading">Quick Actions</div>
        <div class="action-grid">
            <a href="{{ route('admin.book') }}" class="action-btn">
                <i class="bi bi-plus-circle"></i>
                <span>Create Tracking</span>
            </a>
            <a href="{{ route('admin.shipments') }}" class="action-btn">
                <i class="bi bi-list-ul"></i>
                <span>All Shipments</span>
            </a>
            {{-- <a href="{{ route('admin.send.email') }}" class="action-btn">
                <i class="bi bi-envelope-paper"></i>
                <span>Send Email</span>
            </a> --}}
            {{-- <a href="{{ route('admin.settings') }}" class="action-btn">
                <i class="bi bi-sliders"></i>
                <span>Settings</span>
            </a> --}}
            <a href="{{ route('admin.change.password') }}" class="action-btn">
                <i class="bi bi-shield-lock"></i>
                <span>Change Password</span>
            </a>
        </div>
    </div>

    {{-- Recent Shipments --}}
    <div class="table-card">
        <div class="table-header">
            <h5><i class="bi bi-clock-history me-2 text-primary"></i>Recent Shipments</h5>
            <a href="{{ route('admin.shipments') }}" class="btn btn-sm btn-outline-primary">
                View All <i class="bi bi-arrow-right ms-1"></i>
            </a>
        </div>
        <div class="table-container">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th>Tracking No.</th>
                        <th>Shipper</th>
                        <th>Receiver</th>
                        <th>Route</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($recentShipments as $shipment)
                    <tr>
                        <td><span class="trk-num">{{ $shipment->tracking_number }}</span></td>
                        <td>{{ $shipment->shipper_name }}</td>
                        <td>{{ $shipment->receiver_name }}</td>
                        <td>
                            <span style="font-size:.8rem;color:#6b7280;">
                                {{ $shipment->origin ?? '—' }}
                                <i class="bi bi-arrow-right" style="font-size:.7rem;"></i>
                                {{ $shipment->destination ?? '—' }}
                            </span>
                        </td>
                        <td>
                            @php
                                $sl = strtolower($shipment->status ?? '');
                                $sc = 'status-pending';
                                if($sl === 'delivered')      $sc = 'status-delivered';
                                elseif(str_contains($sl,'transit') || str_contains($sl,'ship')) $sc = 'status-transit';
                                elseif(str_contains($sl,'order') || str_contains($sl,'received')) $sc = 'status-processing';
                            @endphp
                            <span class="status-badge {{ $sc }}">
                                <span class="dot"></span>{{ $shipment->status }}
                            </span>
                        </td>
                        <td style="color:#718096;font-size:.82rem;">{{ $shipment->created_at->format('d M Y') }}</td>
                        <td>
                            <div class="row-actions">
                                <a href="{{ route('admin.shipments.show', $shipment->id) }}" class="btn btn-sm btn-outline-primary" title="View">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a href="{{ route('shipment.edit', $shipment->id) }}" class="btn btn-sm btn-outline-secondary" title="Edit">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <a href="{{ route('shipment.history.edit', $shipment->id) }}" class="btn btn-sm btn-outline-info" title="History">
                                    <i class="bi bi-clock-history"></i>
                                </a>
                                <form action="{{ route('shipment.destroy', $shipment->id) }}" method="POST"
                                      onsubmit="return confirm('Delete this shipment?')">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger" title="Delete">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center py-5">
                            <i class="bi bi-inbox" style="font-size:2.5rem;color:#cbd5e0;"></i>
                            <p class="mt-2 mb-0 text-muted">No shipments yet</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>

<script>
(function() {
    const el = document.getElementById('live-date');
    if (!el) return;
    const opts = { weekday:'long', year:'numeric', month:'long', day:'numeric' };
    el.textContent = new Date().toLocaleDateString('en-US', opts);
})();
</script>

@include('admin.footer')