@include('admin.header')

<div class="main-content">

    <div class="page-header d-flex align-items-center justify-content-between flex-wrap gap-2">
        <div>
            <h1 class="mb-0">Create Tracking Order</h1>
            <p class="text-muted mb-0">Fill in the details step by step</p>
        </div>
        <a href="{{ route('admin.shipments') }}" class="btn btn-outline-secondary btn-sm">
            <i class="bi bi-arrow-left me-1"></i> All Shipments
        </a>
    </div>

    @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="bi bi-exclamation-triangle-fill me-2"></i>
            <strong>Please fix the following errors:</strong>
            <ul class="mb-0 mt-1">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <form method="POST" action="{{ route('shipment.store') }}" enctype="multipart/form-data" id="bookingForm" novalidate>
        @csrf

        {{-- ===================== STEPPER ===================== --}}
        <div class="wz-stepper mb-4">
            <div class="wz-step-item active" data-step="1">
                <div class="wz-circle"><i class="bi bi-box-seam"></i></div>
                <div class="wz-label">Shipment</div>
            </div>
            <div class="wz-line"></div>
            <div class="wz-step-item" data-step="2">
                <div class="wz-circle"><i class="bi bi-calendar3"></i></div>
                <div class="wz-label">Timing</div>
            </div>
            <div class="wz-line"></div>
            <div class="wz-step-item" data-step="3">
                <div class="wz-circle"><i class="bi bi-people"></i></div>
                <div class="wz-label">Contacts</div>
            </div>
            <div class="wz-line"></div>
            <div class="wz-step-item" data-step="4">
                <div class="wz-circle"><i class="bi bi-clipboard-check"></i></div>
                <div class="wz-label">Details</div>
            </div>
        </div>

        {{-- ===================== STEP 1: Shipment ===================== --}}
        <div class="wz-panel stat-card" id="step-1">
            <div class="wz-panel-head">
                <span class="wz-panel-icon bg-primary-subtle text-primary"><i class="bi bi-box-seam"></i></span>
                <div>
                    <h5 class="mb-0">Shipment Details</h5>
                    <small class="text-muted">Tracking number, route and shipment mode</small>
                </div>
            </div>

            <div class="row g-3 mt-1">
                <div class="col-md-5">
                    <label class="form-label fw-semibold">Tracking Number <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="text" name="tracking_number" id="trackingInput"
                               class="form-control font-monospace text-uppercase @error('tracking_number') is-invalid @enderror"
                               value="{{ old('tracking_number', strtoupper(Str::random(8))) }}" required>
                        <button type="button" class="btn btn-outline-secondary" onclick="regenerateTracking()" title="Generate new ID">
                            <i class="bi bi-arrow-clockwise"></i>
                        </button>
                        @error('tracking_number')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="form-text">Auto-generated — click <i class="bi bi-arrow-clockwise"></i> to regenerate.</div>
                </div>

                <div class="col-md-4">
                    <label class="form-label fw-semibold">Reference No</label>
                    <input type="text" name="reference_no" class="form-control" placeholder="REF-2026-001"
                           value="{{ old('reference_no') }}">
                </div>

                <div class="col-md-3">
                    <label class="form-label fw-semibold">Carrier</label>
                    <input type="text" name="carrier" class="form-control" list="carrierList"
                           placeholder="FedEx, DHL, UPS…" value="{{ old('carrier') }}">
                    <datalist id="carrierList">
                        <option value="FedEx">
                        <option value="DHL">
                        <option value="UPS">
                        <option value="USPS">
                        <option value="Royal Mail">
                        <option value="TNT">
                        <option value="Aramex">
                    </datalist>
                </div>

                <div class="col-md-5">
                    <label class="form-label fw-semibold">Origin <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text bg-success-subtle border-success-subtle">
                            <i class="bi bi-geo-alt-fill text-success"></i>
                        </span>
                        <input type="text" name="origin"
                               class="form-control @error('origin') is-invalid @enderror"
                               placeholder="City, Country" value="{{ old('origin') }}" required>
                        @error('origin')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                </div>

                <div class="col-auto d-flex align-items-end pb-1">
                    <i class="bi bi-arrow-right fs-5 text-muted"></i>
                </div>

                <div class="col-md-5">
                    <label class="form-label fw-semibold">Destination <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text bg-danger-subtle border-danger-subtle">
                            <i class="bi bi-geo-alt-fill text-danger"></i>
                        </span>
                        <input type="text" name="destination"
                               class="form-control @error('destination') is-invalid @enderror"
                               placeholder="City, Country" value="{{ old('destination') }}" required>
                        @error('destination')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="form-label fw-semibold">Shipment Mode</label>
                    <select name="shipment_mode" class="form-select">
                        <option value="">— Select —</option>
                        @foreach(['Air Freight','Sea Freight','Land Freight','Express Courier','Rail Freight'] as $mode)
                            <option value="{{ $mode }}" {{ old('shipment_mode') == $mode ? 'selected' : '' }}>{{ $mode }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-4">
                    <label class="form-label fw-semibold">Package / Product Name</label>
                    <input type="text" name="product" class="form-control" list="productList"
                           placeholder="e.g. Electronics, Documents" value="{{ old('product') }}">
                    <datalist id="productList">
                        <option value="Electronics">
                        <option value="Documents">
                        <option value="Clothing">
                        <option value="Furniture">
                        <option value="Medical Supplies">
                        <option value="Fragile Goods">
                        <option value="Perishables">
                    </datalist>
                </div>
            </div>
        </div>

        {{-- ===================== STEP 2: Timing ===================== --}}
        <div class="wz-panel stat-card" id="step-2" style="display:none">
            <div class="wz-panel-head">
                <span class="wz-panel-icon bg-warning-subtle text-warning"><i class="bi bi-calendar3"></i></span>
                <div>
                    <h5 class="mb-0">Timing Information</h5>
                    <small class="text-muted">Departure, pickup and expected delivery dates</small>
                </div>
            </div>
            <div class="row g-4 mt-1">
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Departure Date &amp; Time</label>
                    <input type="datetime-local" name="departure_time" class="form-control"
                           value="{{ old('departure_time') }}">
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Expected Delivery Date</label>
                    <input type="date" name="expected_delivery_date" class="form-control"
                           value="{{ old('expected_delivery_date') }}">
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Pickup Date</label>
                    <input type="date" name="pickup_date" class="form-control"
                           value="{{ old('pickup_date') }}">
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Pickup Time</label>
                    <input type="time" name="pickup_time" class="form-control"
                           value="{{ old('pickup_time') }}">
                </div>
            </div>
        </div>

        {{-- ===================== STEP 3: Contacts ===================== --}}
        <div class="wz-panel stat-card" id="step-3" style="display:none">
            <div class="wz-panel-head">
                <span class="wz-panel-icon bg-info-subtle text-info"><i class="bi bi-people"></i></span>
                <div>
                    <h5 class="mb-0">Contact Information</h5>
                    <small class="text-muted">Sender and receiver details</small>
                </div>
            </div>

            <div class="row g-4 mt-1">
                {{-- Sender --}}
                <div class="col-lg-6">
                    <div class="contact-panel sender-panel">
                        <div class="contact-panel-header"><i class="bi bi-person-up me-2"></i>Sender</div>
                        <div class="contact-panel-body">
                            <div class="row g-2">
                                <div class="col-12">
                                    <label class="form-label">Full Name <span class="text-danger">*</span></label>
                                    <input name="shipper_name"
                                           class="form-control @error('shipper_name') is-invalid @enderror"
                                           placeholder="John Doe" value="{{ old('shipper_name') }}" required>
                                    @error('shipper_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Address <span class="text-danger">*</span></label>
                                    <input name="shipper_address"
                                           class="form-control @error('shipper_address') is-invalid @enderror"
                                           placeholder="123 Main Street" value="{{ old('shipper_address') }}" required>
                                    @error('shipper_address')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-7">
                                    <label class="form-label">City</label>
                                    <input name="shipper_city" class="form-control" placeholder="New York"
                                           value="{{ old('shipper_city') }}">
                                </div>
                                <div class="col-5">
                                    <label class="form-label">Postal Code</label>
                                    <input name="shipper_postal_code" class="form-control" placeholder="10001"
                                           value="{{ old('shipper_postal_code') }}">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Country</label>
                                    <input name="shipper_country" class="form-control" placeholder="United States"
                                           value="{{ old('shipper_country') }}">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Phone</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                                        <input name="shipper_phone" class="form-control" placeholder="+1 234 567 8900"
                                               value="{{ old('shipper_phone') }}">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Email</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                        <input type="email" name="shipper_email"
                                               class="form-control @error('shipper_email') is-invalid @enderror"
                                               placeholder="sender@example.com" value="{{ old('shipper_email') }}">
                                        @error('shipper_email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Receiver --}}
                <div class="col-lg-6">
                    <div class="contact-panel receiver-panel">
                        <div class="contact-panel-header"><i class="bi bi-person-down me-2"></i>Receiver</div>
                        <div class="contact-panel-body">
                            <div class="row g-2">
                                <div class="col-12">
                                    <label class="form-label">Full Name <span class="text-danger">*</span></label>
                                    <input name="receiver_name"
                                           class="form-control @error('receiver_name') is-invalid @enderror"
                                           placeholder="Jane Smith" value="{{ old('receiver_name') }}" required>
                                    @error('receiver_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Address <span class="text-danger">*</span></label>
                                    <input name="receiver_address"
                                           class="form-control @error('receiver_address') is-invalid @enderror"
                                           placeholder="456 Elm Street" value="{{ old('receiver_address') }}" required>
                                    @error('receiver_address')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-12">
                                    <label class="form-label">City</label>
                                    <input name="receiver_city" class="form-control" placeholder="London"
                                           value="{{ old('receiver_city') }}">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Country</label>
                                    <input name="receiver_country" class="form-control" placeholder="United Kingdom"
                                           value="{{ old('receiver_country') }}">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Email</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                        <input type="email" name="receiver_email"
                                               class="form-control @error('receiver_email') is-invalid @enderror"
                                               placeholder="receiver@example.com" value="{{ old('receiver_email') }}">
                                        @error('receiver_email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- ===================== STEP 4: Details & Submit ===================== --}}
        <div class="wz-panel stat-card" id="step-4" style="display:none">
            <div class="wz-panel-head">
                <span class="wz-panel-icon bg-success-subtle text-success"><i class="bi bi-clipboard-check"></i></span>
                <div>
                    <h5 class="mb-0">Package Details &amp; Settings</h5>
                    <small class="text-muted">Cargo, payment, image and notifications</small>
                </div>
            </div>

            <div class="sub-section-label mt-3">Cargo</div>
            <div class="row g-3">
                <div class="col-md-2">
                    <label class="form-label fw-semibold">Quantity</label>
                    <input name="quantity" type="number" min="1" class="form-control" placeholder="1"
                           value="{{ old('quantity') }}">
                </div>
                <div class="col-md-2">
                    <label class="form-label fw-semibold">Weight</label>
                    <input name="weight" class="form-control" placeholder="2.5 kg"
                           value="{{ old('weight') }}">
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-semibold">Description</label>
                    <input name="description" class="form-control" placeholder="e.g. Fragile electronics"
                           value="{{ old('description') }}">
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-semibold">Comments</label>
                    <input name="comments" class="form-control" placeholder="e.g. Handle with care, keep dry"
                           value="{{ old('comments') }}">
                </div>
            </div>

            <div class="sub-section-label mt-4">Payment &amp; Status</div>
            <div class="row g-3">
                <div class="col-md-3">
                    <label class="form-label fw-semibold">Initial Status <span class="text-danger">*</span></label>
                    <select name="status" class="form-select" required>
                        @php $statuses = ['Order Received','Processing','In Transit','Out for Delivery','Delivered','On Hold','Cancelled']; @endphp
                        @foreach($statuses as $s)
                            <option value="{{ $s }}" {{ old('status','Order Received') == $s ? 'selected' : '' }}>{{ $s }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-semibold">Payment Mode</label>
                    <input type="text" name="payment_mode" class="form-control"
                           placeholder="e.g. Prepaid, Cash, Credit"
                           value="{{ old('payment_mode') }}">
                </div>
                <div class="col-md-2">
                    <label class="form-label fw-semibold">Currency</label>
                    @php
                    $allCurrencies = [
                        'USD'=>'$ USD – US Dollar','EUR'=>'€ EUR – Euro','GBP'=>'£ GBP – British Pound',
                        'JPY'=>'¥ JPY – Japanese Yen','CNY'=>'¥ CNY – Chinese Yuan','INR'=>'₹ INR – Indian Rupee',
                        'CAD'=>'$ CAD – Canadian Dollar','AUD'=>'$ AUD – Australian Dollar','CHF'=>'Fr CHF – Swiss Franc',
                        'HKD'=>'$ HKD – Hong Kong Dollar','SGD'=>'$ SGD – Singapore Dollar','NZD'=>'$ NZD – New Zealand Dollar',
                        'MXN'=>'$ MXN – Mexican Peso','BRL'=>'R$ BRL – Brazilian Real','ARS'=>'$ ARS – Argentine Peso',
                        'CLP'=>'$ CLP – Chilean Peso','COP'=>'$ COP – Colombian Peso','PEN'=>'S/ PEN – Peruvian Sol',
                        'UYU'=>'$ UYU – Uruguayan Peso','BOB'=>'Bs BOB – Bolivian Boliviano','PYG'=>'₲ PYG – Paraguayan Guaraní',
                        'VES'=>'Bs VES – Venezuelan Bolívar','GTQ'=>'Q GTQ – Guatemalan Quetzal','CRC'=>'₡ CRC – Costa Rican Colón',
                        'DOP'=>'$ DOP – Dominican Peso','JMD'=>'$ JMD – Jamaican Dollar','TTD'=>'$ TTD – Trinidad Dollar',
                        'BBD'=>'$ BBD – Barbadian Dollar','BSD'=>'$ BSD – Bahamian Dollar','AED'=>'د.إ AED – UAE Dirham',
                        'SAR'=>'﷼ SAR – Saudi Riyal','QAR'=>'﷼ QAR – Qatari Riyal','KWD'=>'د.ك KWD – Kuwaiti Dinar',
                        'BHD'=>'.د.ب BHD – Bahraini Dinar','OMR'=>'﷼ OMR – Omani Rial','JOD'=>'د.ا JOD – Jordanian Dinar',
                        'ILS'=>'₪ ILS – Israeli Shekel','TRY'=>'₺ TRY – Turkish Lira','EGP'=>'£ EGP – Egyptian Pound',
                        'LBP'=>'£ LBP – Lebanese Pound','IQD'=>'ع.د IQD – Iraqi Dinar','IRR'=>'﷼ IRR – Iranian Rial',
                        'PKR'=>'₨ PKR – Pakistani Rupee','BDT'=>'৳ BDT – Bangladeshi Taka','LKR'=>'₨ LKR – Sri Lankan Rupee',
                        'NPR'=>'₨ NPR – Nepalese Rupee','MMK'=>'K MMK – Myanmar Kyat','THB'=>'฿ THB – Thai Baht',
                        'VND'=>'₫ VND – Vietnamese Dong','IDR'=>'Rp IDR – Indonesian Rupiah','MYR'=>'RM MYR – Malaysian Ringgit',
                        'PHP'=>'₱ PHP – Philippine Peso','KRW'=>'₩ KRW – South Korean Won','TWD'=>'$ TWD – Taiwan Dollar',
                        'HUF'=>'Ft HUF – Hungarian Forint','CZK'=>'Kč CZK – Czech Koruna','PLN'=>'zł PLN – Polish Zloty',
                        'RON'=>'lei RON – Romanian Leu','BGN'=>'лв BGN – Bulgarian Lev','HRK'=>'kn HRK – Croatian Kuna',
                        'RSD'=>'дин RSD – Serbian Dinar','BAM'=>'KM BAM – Bosnia Mark','MKD'=>'ден MKD – Macedonian Denar',
                        'ALL'=>'L ALL – Albanian Lek','DKK'=>'kr DKK – Danish Krone','SEK'=>'kr SEK – Swedish Krona',
                        'NOK'=>'kr NOK – Norwegian Krone','ISK'=>'kr ISK – Icelandic Króna','RUB'=>'₽ RUB – Russian Ruble',
                        'UAH'=>'₴ UAH – Ukrainian Hryvnia','KZT'=>'₸ KZT – Kazakhstani Tenge','GEL'=>'₾ GEL – Georgian Lari',
                        'AMD'=>'֏ AMD – Armenian Dram','AZN'=>'₼ AZN – Azerbaijani Manat','BYN'=>'Br BYN – Belarusian Ruble',
                        'MDL'=>'L MDL – Moldovan Leu','UZS'=>'лв UZS – Uzbekistani Som','TJS'=>'SM TJS – Tajikistani Somoni',
                        'TMT'=>'T TMT – Turkmenistani Manat','KGS'=>'лв KGS – Kyrgyzstani Som','MNT'=>'₮ MNT – Mongolian Tögrög',
                        'NGN'=>'₦ NGN – Nigerian Naira','ZAR'=>'R ZAR – South African Rand','KES'=>'Ksh KES – Kenyan Shilling',
                        'GHS'=>'₵ GHS – Ghanaian Cedi','ETB'=>'Br ETB – Ethiopian Birr','TZS'=>'Sh TZS – Tanzanian Shilling',
                        'UGX'=>'Sh UGX – Ugandan Shilling','RWF'=>'Fr RWF – Rwandan Franc','MAD'=>'د.م. MAD – Moroccan Dirham',
                        'DZD'=>'دج DZD – Algerian Dinar','TND'=>'د.ت TND – Tunisian Dinar','LYD'=>'ل.د LYD – Libyan Dinar',
                        'XOF'=>'Fr XOF – West African CFA','XAF'=>'Fr XAF – Central African CFA','ZMW'=>'ZK ZMW – Zambian Kwacha',
                        'MZN'=>'MT MZN – Mozambican Metical','AOA'=>'Kz AOA – Angolan Kwanza','BWP'=>'P BWP – Botswana Pula',
                        'NAD'=>'$ NAD – Namibian Dollar','MUR'=>'₨ MUR – Mauritian Rupee','SCR'=>'₨ SCR – Seychellois Rupee',
                        'MGA'=>'Ar MGA – Malagasy Ariary','ZWL'=>'$ ZWL – Zimbabwean Dollar','CDF'=>'Fr CDF – Congolese Franc',
                        'SDG'=>'£ SDG – Sudanese Pound','SOS'=>'Sh SOS – Somali Shilling','DJF'=>'Fr DJF – Djiboutian Franc',
                        'ERN'=>'Nkf ERN – Eritrean Nakfa','GMD'=>'D GMD – Gambian Dalasi','GNF'=>'Fr GNF – Guinean Franc',
                        'SLL'=>'Le SLL – Sierra Leonean Leone','LRD'=>'$ LRD – Liberian Dollar','CVE'=>'$ CVE – Cape Verdean Escudo',
                        'STN'=>'Db STN – São Tomé Dobra','KMF'=>'Fr KMF – Comorian Franc','MWK'=>'MK MWK – Malawian Kwacha',
                        'LSL'=>'L LSL – Lesotho Loti','SZL'=>'L SZL – Swazi Lilangeni','BIF'=>'Fr BIF – Burundian Franc',
                        'AFN'=>'؋ AFN – Afghan Afghani','MVR'=>'Rf MVR – Maldivian Rufiyaa','BTN'=>'Nu BTN – Bhutanese Ngultrum',
                        'KHR'=>'៛ KHR – Cambodian Riel','LAK'=>'₭ LAK – Lao Kip','BND'=>'$ BND – Brunei Dollar',
                        'PGK'=>'K PGK – Papua New Guinea Kina','FJD'=>'$ FJD – Fijian Dollar','SBD'=>'$ SBD – Solomon Islands Dollar',
                        'VUV'=>'Vt VUV – Vanuatu Vatu','WST'=>'T WST – Samoan Tālā','TOP'=>'T$ TOP – Tongan Paʻanga',
                        'XPF'=>'Fr XPF – CFP Franc','AWG'=>'ƒ AWG – Aruban Florin','ANG'=>'ƒ ANG – Netherlands Antillean Guilder',
                        'SRD'=>'$ SRD – Surinamese Dollar','GYD'=>'$ GYD – Guyanese Dollar','HTG'=>'G HTG – Haitian Gourde',
                        'NIO'=>'C$ NIO – Nicaraguan Córdoba','HNL'=>'L HNL – Honduran Lempira','PAB'=>'B/. PAB – Panamanian Balboa',
                        'CUP'=>'$ CUP – Cuban Peso','BZD'=>'$ BZD – Belize Dollar','XCD'=>'$ XCD – East Caribbean Dollar',
                        'KYD'=>'$ KYD – Cayman Islands Dollar','BMD'=>'$ BMD – Bermudian Dollar',
                    ];
                    @endphp
                    <select name="currency" class="form-select" id="currencySelect">
                        @foreach($allCurrencies as $code => $label)
                            <option value="{{ $code }}" {{ old('currency', 'USD') === $code ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                        <option value="__other__" {{ old('currency') === '__other__' ? 'selected' : '' }}>✏️ Other (type below)…</option>
                    </select>
                    <input type="text" id="currencyCustomInput" name="currency_custom"
                           class="form-control mt-1 font-monospace text-uppercase"
                           placeholder="e.g. XYZ – My Currency"
                           style="display:none;" maxlength="20">
                    <div class="form-text" id="currencyCustomHelp" style="display:none;">Enter a 3-letter code or short label. This will be used as-is.</div>
                </div>
                <div class="col-md-2">
                    <label class="form-label fw-semibold">Declared Value</label>
                    <div class="input-group">
                        <span class="input-group-text fw-semibold" id="valueCurrencyPrefix">{{ old('currency', 'USD') }}</span>
                        <input name="value" type="text" class="form-control" placeholder="500.00"
                               value="{{ old('value') }}">
                    </div>
                </div>
                <div class="col-md-2">
                    <label class="form-label fw-semibold">Total Freight</label>
                    <div class="input-group">
                        <span class="input-group-text fw-semibold" id="freightCurrencyPrefix">{{ old('currency', 'USD') }}</span>
                        <input name="total_freight" type="text" class="form-control" placeholder="150.00"
                               value="{{ old('total_freight') }}">
                    </div>
                </div>
            </div>

            <div class="sub-section-label mt-4">Package Image <span class="text-muted fw-normal">(optional)</span></div>
            <div class="row g-3 align-items-center">
                <div class="col-md-5">
                    <label class="drop-zone" id="dropZone" for="packageImageInput">
                        <input type="file" name="image" id="packageImageInput"
                               accept="image/jpeg,image/png,image/jpg,image/gif"
                               style="display:none" onchange="previewPackageImage(event)">
                        <i class="bi bi-cloud-upload fs-2 text-muted"></i>
                        <p class="mb-0 mt-1 text-muted small">Click to upload or drag &amp; drop</p>
                        <small class="text-muted">JPG, PNG or GIF — max 5 MB</small>
                    </label>
                </div>
                <div class="col-md-4">
                    <div id="imagePreviewWrap" style="display:none; text-align:center;">
                        <img id="imagePreview" src="" alt="Preview"
                             style="max-height:160px; max-width:100%; border-radius:10px; border:2px solid #dee2e6; box-shadow:0 4px 12px rgba(0,0,0,.08);">
                        <div class="mt-2">
                            <button type="button" class="btn btn-sm btn-outline-danger" onclick="clearPackageImage()">
                                <i class="bi bi-x-circle me-1"></i> Remove
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sub-section-label mt-4">Notifications</div>
            <div class="notif-toggle-card">
                <div class="form-check form-switch mb-0">
                    <input class="form-check-input" type="checkbox" name="send_email_notifications"
                           id="sendEmailNotifications" value="1"
                           {{ $sendBookingEmailsDefault ? 'checked' : '' }}
                           style="width:2.4em;height:1.35em;cursor:pointer;">
                </div>
                <div>
                    <label class="fw-semibold mb-0 d-block" for="sendEmailNotifications" style="cursor:pointer;">
                        <i class="bi bi-envelope-check me-1 text-primary"></i>
                        Send booking confirmation emails
                    </label>
                    <small class="text-muted">Both sender and receiver will receive an email with shipment details.</small>
                </div>
            </div>
        </div>

        {{-- ===================== WIZARD NAV BUTTONS ===================== --}}
        <div class="d-flex justify-content-between align-items-center mt-3 mb-5">
            <button type="button" id="wz-prev" class="btn btn-outline-secondary px-4" style="display:none">
                <i class="bi bi-arrow-left me-1"></i> Back
            </button>
            <div></div>
            <div class="d-flex gap-2">
                <button type="button" id="wz-next" class="btn btn-primary px-5">
                    Next <i class="bi bi-arrow-right ms-1"></i>
                </button>
                <button type="submit" id="wz-submit" class="btn btn-success px-5" style="display:none">
                    <i class="bi bi-check-lg me-1"></i> Create Shipment
                </button>
            </div>
        </div>

    </form>
</div>


@include('admin.footer')

{{-- SUCCESS MODAL --}}
@if(session('tracking_number'))
<div class="modal fade show" id="successModal" tabindex="-1" aria-modal="true" role="dialog" style="display:block;">
    <div class="modal-dialog modal-dialog-centered" style="max-width:420px;">
        <div class="modal-content border-0 shadow rounded-4">
            <div class="modal-body text-center p-4 position-relative">
                <button type="button" onclick="closeModal('successModal')" class="btn-close position-absolute" style="top:14px;right:14px;" aria-label="Close"></button>
                <div class="mb-3">
                    <div style="width:64px;height:64px;background:#dcfce7;border-radius:50%;display:inline-flex;align-items:center;justify-content:center;font-size:28px;color:#16a34a;">
                        <i class="bi bi-check-lg"></i>
                    </div>
                </div>
                <h5 class="fw-semibold mb-1">Shipment Created!</h5>
                <p class="text-muted small mb-3">The tracking order has been registered successfully.</p>
                <div style="background:#f8f9fa;border-radius:10px;padding:12px;" class="mb-4">
                    <div style="font-size:12px;color:#6c757d;margin-bottom:2px;">Tracking Number</div>
                    <strong class="font-monospace fs-5 text-primary">{{ session('tracking_number') }}</strong>
                </div>
                @if(session('pdf_path'))
                    <a href="{{ session('pdf_path') }}" class="btn btn-primary w-100 mb-2" download>
                        <i class="bi bi-download me-1"></i> Download Receipt (PDF)
                    </a>
                @endif
                <a href="{{ route('admin.shipments') }}" class="btn btn-outline-secondary w-100 mb-2">View All Shipments</a>
                <button type="button" onclick="closeModal('successModal')" class="btn btn-link text-muted w-100" style="font-size:.85rem;">Cancel</button>
            </div>
        </div>
    </div>
</div>
<div class="modal-backdrop fade show" id="successBackdrop" onclick="closeModal('successModal')" style="cursor:pointer;"></div>
@endif

@if(session('awb_number'))
<div class="modal fade show" id="awbModal" tabindex="-1" aria-modal="true" role="dialog" style="display:block;">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content shadow-lg border-0 rounded-4">
            <div class="modal-body text-center p-4">
                <div class="mb-3">
                    <div style="width:60px;height:60px;background:#e0f2fe;border-radius:50%;display:inline-flex;align-items:center;justify-content:center;font-size:28px;color:#0369a1;">&#x2713;</div>
                </div>
                <h5 class="fw-semibold mb-2">Shipment Booked</h5>
                <p class="text-muted small mb-3">Your shipment has been registered successfully.</p>
                <div style="background:#f8f9fa;border-radius:12px;padding:12px;" class="mb-4">
                    <span style="display:block;font-size:12px;color:#6c757d;margin-bottom:2px;">AWB Number</span>
                    <strong>{{ session('awb_number') }}</strong>
                </div>
                @if(session('pdf_path'))
                    <a href="{{ session('pdf_path') }}" class="btn btn-primary w-100" download>Download Receipt (PDF)</a>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="modal-backdrop fade show"></div>
@endif

<script>
function regenerateTracking() {
    const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    let result = '';
    for (let i = 0; i < 8; i++) result += chars.charAt(Math.floor(Math.random() * chars.length));
    document.getElementById('trackingInput').value = result;
}
function previewPackageImage(event) {
    const file = event.target.files[0];
    if (!file) return;
    const reader = new FileReader();
    reader.onload = e => { document.getElementById('imagePreview').src = e.target.result; document.getElementById('imagePreviewWrap').style.display = 'block'; };
    reader.readAsDataURL(file);
}
function clearPackageImage() {
    document.getElementById('packageImageInput').value = '';
    document.getElementById('imagePreview').src = '';
    document.getElementById('imagePreviewWrap').style.display = 'none';
}
function closeModal(id) {
    const modal = document.getElementById(id);
    if (modal) modal.style.display = 'none';
    const backdrop = document.getElementById(id + 'Backdrop');
    if (backdrop) backdrop.remove();
    else document.querySelector('.modal-backdrop')?.remove();
}
const dropZone = document.getElementById('dropZone');
if (dropZone) {
    ['dragenter','dragover'].forEach(e => dropZone.addEventListener(e, ev => { ev.preventDefault(); dropZone.classList.add('drag-over'); }));
    ['dragleave','drop'].forEach(e => dropZone.addEventListener(e, ev => { ev.preventDefault(); dropZone.classList.remove('drag-over'); }));
    dropZone.addEventListener('drop', ev => { const f = ev.dataTransfer.files[0]; if (f) previewPackageImage({ target: { files: [f] } }); });
}
const totalSteps = 4;
let currentStep = 1;
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.wz-circle').forEach(c => { c.dataset.icon = c.innerHTML; });
    const firstInvalid = document.querySelector('.is-invalid');
    if (firstInvalid) {
        const panel = firstInvalid.closest('.wz-panel');
        if (panel) { const s = parseInt(panel.id.replace('step-','')); if (!isNaN(s)) goToStep(s); }
    }
    @if(session('pdf_path'))
    (function(){ const a = document.createElement('a'); a.href="{{ session('pdf_path') }}"; a.download="receipt.pdf"; document.body.appendChild(a); a.click(); document.body.removeChild(a); })();
    @endif
});
function goToStep(step) {
    document.getElementById('step-'+currentStep).style.display = 'none';
    currentStep = step;
    document.getElementById('step-'+currentStep).style.display = 'block';
    updateWizardUI();
    window.scrollTo({top:0,behavior:'smooth'});
}
function updateWizardUI() {
    document.querySelectorAll('.wz-step-item').forEach(el => {
        const s = parseInt(el.dataset.step);
        el.classList.toggle('active', s===currentStep);
        el.classList.toggle('done', s<currentStep);
        el.querySelector('.wz-circle').innerHTML = s<currentStep ? '<i class="bi bi-check-lg"></i>' : (el.querySelector('.wz-circle').dataset.icon||'');
    });
    document.querySelectorAll('.wz-line').forEach((line,i) => line.classList.toggle('done', i<currentStep-1));
    document.getElementById('wz-prev').style.display   = currentStep>1           ? 'inline-block' : 'none';
    document.getElementById('wz-next').style.display   = currentStep<totalSteps  ? 'inline-block' : 'none';
    document.getElementById('wz-submit').style.display = currentStep===totalSteps ? 'inline-block' : 'none';
}
function validateCurrentStep() {
    let valid = true;
    document.getElementById('step-'+currentStep).querySelectorAll('[required]').forEach(f => {
        if (!f.value.trim()) { f.classList.add('is-invalid'); valid = false; } else f.classList.remove('is-invalid');
    });
    return valid;
}
document.getElementById('wz-next').addEventListener('click', () => { if (validateCurrentStep()) goToStep(currentStep+1); });
document.getElementById('wz-prev').addEventListener('click', () => { if (currentStep>1) goToStep(currentStep-1); });
document.getElementById('bookingForm').addEventListener('input', e => { if (e.target.value.trim()) e.target.classList.remove('is-invalid'); });
document.getElementById('currencySelect').addEventListener('change', function () {
    const code = this.value;
    const customWrap = document.getElementById('currencyCustomInput');
    const customHelp = document.getElementById('currencyCustomHelp');
    if (code === '__other__') {
        customWrap.style.display = 'block';
        customHelp.style.display = 'block';
        customWrap.focus();
    } else {
        customWrap.style.display = 'none';
        customHelp.style.display = 'none';
        customWrap.value = '';
        document.getElementById('valueCurrencyPrefix').textContent   = code;
        document.getElementById('freightCurrencyPrefix').textContent = code;
    }
});
document.getElementById('currencyCustomInput').addEventListener('input', function () {
    const val = this.value.trim().toUpperCase() || '?';
    document.getElementById('valueCurrencyPrefix').textContent   = val;
    document.getElementById('freightCurrencyPrefix').textContent = val;
});
document.getElementById('bookingForm').addEventListener('submit', function () {
    const sel = document.getElementById('currencySelect');
    if (sel.value === '__other__') {
        const custom = document.getElementById('currencyCustomInput').value.trim().toUpperCase();
        // inject a hidden input so the real `currency` field carries the custom value
        const h = document.createElement('input');
        h.type = 'hidden'; h.name = 'currency'; h.value = custom || 'USD';
        this.appendChild(h);
        sel.disabled = true; // prevent duplicate field
    }
});
</script>

<style>
.wz-stepper { display:flex; align-items:center; background:#fff; border-radius:14px; padding:18px 28px; box-shadow:0 1px 6px rgba(0,0,0,.06); }
.wz-step-item { display:flex; flex-direction:column; align-items:center; gap:6px; flex:0 0 auto; }
.wz-circle { width:44px; height:44px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:18px; background:#e9ecef; color:#adb5bd; transition:all .25s; }
.wz-step-item.active .wz-circle { background:var(--primary,#0B3D91); color:#fff; box-shadow:0 4px 14px rgba(11,61,145,.3); }
.wz-step-item.done   .wz-circle { background:#16a34a; color:#fff; }
.wz-label { font-size:.73rem; font-weight:600; color:#adb5bd; white-space:nowrap; }
.wz-step-item.active .wz-label { color:var(--primary,#0B3D91); }
.wz-step-item.done   .wz-label { color:#16a34a; }
.wz-line { flex:1; height:3px; background:#e9ecef; border-radius:2px; margin:0 10px; margin-bottom:22px; transition:background .3s; }
.wz-line.done { background:#16a34a; }
.wz-panel-head { display:flex; align-items:flex-start; gap:14px; padding-bottom:12px; border-bottom:1px solid #f0f0f0; margin-bottom:4px; }
.wz-panel-icon { width:44px; height:44px; border-radius:10px; display:flex; align-items:center; justify-content:center; font-size:20px; flex-shrink:0; }
.contact-panel { border-radius:12px; overflow:hidden; border:1px solid #e9ecef; height:100%; }
.contact-panel-header { padding:12px 18px; font-weight:700; font-size:.95rem; }
.sender-panel   .contact-panel-header { background:#f0fdf4; color:#15803d; border-bottom:1px solid #bbf7d0; }
.receiver-panel .contact-panel-header { background:#eff6ff; color:#1d4ed8; border-bottom:1px solid #bfdbfe; }
.contact-panel-body { padding:16px 18px; }
.sub-section-label { font-size:.72rem; font-weight:700; text-transform:uppercase; letter-spacing:.06em; color:#6c757d; padding-bottom:6px; border-bottom:1px solid #e9ecef; margin-bottom:12px; }
.drop-zone { display:flex; flex-direction:column; align-items:center; justify-content:center; border:2px dashed #ced4da; border-radius:12px; padding:28px 16px; cursor:pointer; transition:border-color .2s,background .2s; text-align:center; background:#fafafa; width:100%; }
.drop-zone:hover,.drop-zone.drag-over { border-color:var(--primary,#0B3D91); background:#f0f5ff; }
.notif-toggle-card { display:flex; align-items:flex-start; gap:14px; background:#f0f5ff; border:1px solid #c7d9f8; border-radius:12px; padding:16px 18px; }
.modal-content { animation:scaleIn .2s ease-out; }
@keyframes scaleIn { from{transform:scale(.95);opacity:0} to{transform:scale(1);opacity:1} }
</style>

