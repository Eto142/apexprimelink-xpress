@include('admin.header')

<style>
/* ── Shipments Index ─────────────────────────────────────────── */
.page-hero {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 14px;
    margin-bottom: 24px;
}
.page-hero-text h1 {
    font-size: 1.5rem;
    font-weight: 700;
    color: #1a202c;
    margin: 0 0 3px;
}
.page-hero-text p { color: #718096; margin: 0; font-size: .875rem; }

/* Filter card */
.filter-card {
    background: #fff;
    border-radius: 14px;
    padding: 20px 22px;
    box-shadow: 0 2px 12px rgba(0,0,0,.06);
    border: 1px solid #eef0f4;
    margin-bottom: 22px;
}
.filter-card .filter-label {
    font-size: .7rem;
    font-weight: 700;
    letter-spacing: 1.2px;
    text-transform: uppercase;
    color: #a0aec0;
    margin-bottom: 14px;
    display: flex;
    align-items: center;
    gap: 7px;
}
.filter-card .form-control,
.filter-card .form-select {
    border-radius: 9px;
    border-color: #e2e8f0;
    font-size: .875rem;
    padding: 9px 13px;
    transition: border-color .2s, box-shadow .2s;
}
.filter-card .form-control:focus,
.filter-card .form-select:focus {
    border-color: #0B3D91;
    box-shadow: 0 0 0 3px rgba(11,61,145,.1);
}

/* Table card */
.table-card {
    background: #fff;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 2px 12px rgba(0,0,0,.06);
    border: 1px solid #eef0f4;
}
.table-header {
    padding: 16px 22px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid #eef0f4;
    flex-wrap: wrap;
    gap: 10px;
}
.table-header h5 { font-weight: 700; margin: 0; font-size: 1rem; color: #1a202c; }
.table-count {
    font-size: .78rem;
    background: #eff6ff;
    color: #0B3D91;
    font-weight: 600;
    padding: 4px 12px;
    border-radius: 20px;
}
.table-container { overflow-x: auto; }
.table thead th {
    background: #f7f9fc;
    color: #6b7280;
    font-size: .72rem;
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
    color: #2d3748;
}
.table tbody tr:hover { background: #f7f9fc; }

.trk-num {
    font-family: 'Courier New', monospace;
    font-weight: 700;
    font-size: .78rem;
    color: #0B3D91;
    background: #eff6ff;
    padding: 3px 9px;
    border-radius: 6px;
    white-space: nowrap;
}
.route-cell { font-size: .8rem; color: #6b7280; white-space: nowrap; }
.route-cell i { font-size: .65rem; }

/* Status badges */
.status-badge {
    padding: 4px 11px;
    border-radius: 20px;
    font-size: .73rem;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 5px;
    white-space: nowrap;
}
.status-badge .dot { width:6px;height:6px;border-radius:50%;flex-shrink:0; }
.status-pending    { background:#f1f5f9; color:#475569; }
.status-pending .dot    { background:#94a3b8; }
.status-processing { background:#dbeafe; color:#1e40af; }
.status-processing .dot { background:#3b82f6; }
.status-transit    { background:#fffbeb; color:#b45309; }
.status-transit .dot    { background:#f59e0b; }
.status-delivered  { background:#dcfce7; color:#166534; }
.status-delivered .dot  { background:#16a34a; }

/* Row actions */
.row-actions { display:flex; gap:5px; }
.row-actions .btn { font-size:.75rem; padding:5px 10px; border-radius:8px; white-space:nowrap; }

/* Empty state */
.empty-state { text-align:center; padding: 56px 20px; color:#a0aec0; }
.empty-state i { font-size:3rem; display:block; margin-bottom:12px; }
.empty-state p { margin:0; font-size:.9rem; }

/* Pagination area */
.pagination-area {
    padding: 14px 22px;
    border-top: 1px solid #eef0f4;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 10px;
}
.pagination-info { font-size:.8rem; color:#718096; }
</style>

<div class="main-content">

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
        <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif

    {{-- Page Header --}}
    <div class="page-hero">
        <div class="page-hero-text">
            <h1><i class="bi bi-box-seam me-2 text-primary" style="font-size:1.3rem;"></i>All Shipments</h1>
            <p>Manage, track and update all registered shipments</p>
        </div>
        <a href="{{ route('admin.book') }}" class="btn btn-primary px-4" style="border-radius:10px;">
            <i class="bi bi-plus-lg me-1"></i> New Shipment
        </a>
    </div>

    {{-- Filters --}}
    <div class="filter-card">
        <div class="filter-label"><i class="bi bi-funnel"></i> Filter Shipments</div>
        <form method="GET" class="row g-3 align-items-end">
            <div class="col-md-4 col-sm-6">
                <label class="form-label fw-semibold" style="font-size:.82rem;">Tracking Number</label>
                <div class="input-group">
                    <span class="input-group-text" style="background:#f7f9fc;border-color:#e2e8f0;border-radius:9px 0 0 9px;">
                        <i class="bi bi-search" style="color:#a0aec0;font-size:.85rem;"></i>
                    </span>
                    <input type="text" name="tracking_number" value="{{ request('tracking_number') }}"
                           class="form-control" placeholder="e.g. BGL-XXXXXXXX"
                           style="border-left:0;border-radius:0 9px 9px 0;">
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <label class="form-label fw-semibold" style="font-size:.82rem;">Status</label>
                <select name="status" class="form-select">
                    <option value="">All Statuses</option>
                    @foreach(['Order Received','Picked Up','In Transit','Customs Clearance','Out for Delivery','Delivered'] as $s)
                        <option value="{{ $s }}" {{ request('status') === $s ? 'selected' : '' }}>{{ $s }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3 col-sm-6">
                <label class="form-label fw-semibold" style="font-size:.82rem;">Date</label>
                <input type="date" name="date" value="{{ request('date') }}" class="form-control">
            </div>
            <div class="col-md-2 col-sm-6 d-flex gap-2">
                <button class="btn btn-primary w-100" style="border-radius:9px;">
                    <i class="bi bi-search me-1"></i> Search
                </button>
                <a href="{{ route('admin.shipments') }}" class="btn btn-outline-secondary" style="border-radius:9px;" title="Reset">
                    <i class="bi bi-x-lg"></i>
                </a>
            </div>
        </form>
    </div>

    {{-- Table --}}
    <div class="table-card">
        <div class="table-header">
            <h5><i class="bi bi-table me-2" style="color:#0B3D91;"></i>Shipment Records</h5>
            <span class="table-count">
                Showing {{ $shipments->firstItem() ?? 0 }}–{{ $shipments->lastItem() ?? 0 }} of {{ $shipments->total() }}
            </span>
        </div>

        <div class="table-container">
            <table class="table mb-0">
                <thead>
                    <tr>
                        <th>#</th>
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
                    @forelse($shipments as $i => $shipment)
                    @php
                        $sl = strtolower($shipment->status ?? '');
                        $sc = 'status-pending';
                        if($sl === 'delivered')                                          $sc = 'status-delivered';
                        elseif(str_contains($sl,'transit') || str_contains($sl,'ship')) $sc = 'status-transit';
                        elseif(str_contains($sl,'order') || str_contains($sl,'received') || str_contains($sl,'picked')) $sc = 'status-processing';
                    @endphp
                    <tr>
                        <td style="color:#a0aec0;font-size:.78rem;font-weight:600;">
                            {{ $shipments->firstItem() + $i }}
                        </td>
                        <td><span class="trk-num">{{ $shipment->tracking_number }}</span></td>
                        <td>
                            <div style="font-weight:600;font-size:.875rem;">{{ $shipment->shipper_name }}</div>
                            @if($shipment->shipper_company)
                            <div style="font-size:.75rem;color:#a0aec0;">{{ $shipment->shipper_company }}</div>
                            @endif
                        </td>
                        <td>
                            <div style="font-weight:600;font-size:.875rem;">{{ $shipment->receiver_name }}</div>
                            @if($shipment->receiver_company)
                            <div style="font-size:.75rem;color:#a0aec0;">{{ $shipment->receiver_company }}</div>
                            @endif
                        </td>
                        <td class="route-cell">
                            {{ $shipment->origin ?? '—' }}
                            <i class="bi bi-arrow-right mx-1"></i>
                            {{ $shipment->destination ?? '—' }}
                        </td>
                        <td>
                            <span class="status-badge {{ $sc }}">
                                <span class="dot"></span>{{ $shipment->status }}
                            </span>
                        </td>
                        <td style="color:#718096;font-size:.82rem;white-space:nowrap;">
                            {{ optional($shipment->shipment_date)->format('d M Y') ?? '—' }}
                        </td>
                        <td>
                            <div class="row-actions">
                                <a href="{{ route('admin.shipments.show', $shipment->id) }}"
                                   class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-eye me-1"></i> View
                                </a>
                                <a href="{{ route('shipment.edit', $shipment->id) }}"
                                   class="btn btn-sm btn-outline-secondary">
                                    <i class="bi bi-pencil me-1"></i> Edit
                                </a>
                                <a href="{{ route('shipment.history.edit', $shipment->id) }}"
                                   class="btn btn-sm btn-outline-info">
                                    <i class="bi bi-clock-history me-1"></i> History
                                </a>
                                <form action="{{ route('shipment.destroy', $shipment->id) }}" method="POST"
                                      onsubmit="return confirm('Delete this shipment?')">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger">
                                        <i class="bi bi-trash me-1"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8">
                            <div class="empty-state">
                                <i class="bi bi-inbox"></i>
                                <p>No shipments found. Try adjusting your filters.</p>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="pagination-area">
            <span class="pagination-info">
                Page {{ $shipments->currentPage() }} of {{ $shipments->lastPage() }}
            </span>
            {{ $shipments->appends(request()->query())->links('pagination::bootstrap-5') }}
        </div>
    </div>

</div>

@include('admin.footer')