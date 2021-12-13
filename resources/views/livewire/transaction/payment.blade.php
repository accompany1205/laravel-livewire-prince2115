@push('plugin-styles')
<link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.standalone.min.css') }}" rel="stylesheet" />
@endpush

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="page-title-section">
            <p class="text-center justify-content-center page-title-text">Payments</p>
        </div>
    </div>

    <div class="col-lg-12 page-container p-0">
        <div class="data-filter d-flex grid-margin col-lg-12">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="input-group date">
                    <input type="text" class="form-control" name="date" placeholder="Date">
                    <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="material-icons">date_range</i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="input-group">
                    <input type="text" class="form-control" name="status" placeholder="Customer No.">
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="input-group">
                    <input type="text" class="form-control" name="status" placeholder="Loan ID:">
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="input-group">
                    <input type="text" class="form-control" name="status" placeholder="Status">
                    <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="material-icons">expand_more</i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <ul class="responsive-table p-0">
                            <li class="table-header font-weight-bold">
                                <div class="col">Date </div>
                                <div class="col ">Customer </div>
                                <div class="col ">Customer No. </div>
                                <div class="col ">Loan ID </div>
                                <div class="col ">Installment </div>
                                <div class="col ">Mobile No. </div>
                                <div class="col ">Amount </div>
                                <div class="col ">Reference No. </div>
                                <div class="col ">Balance </div>
                                <div class="col text-center">Status </div>
                            </li>
                                @php
                                    for($i = 0; $i < 10; $i ++) {
                                @endphp
                            <li class="table-row">
                                <div class="col "><span>28/07/21 </span></div>
                                <div class="col "><span>John Kiwalana </span></div>
                                <div class="col "><span>+2567001456123 </span></div>
                                <div class="col "><span>UGX 165,000.00 </span></div>
                                <div class="col "><span>+2567054567 </span></div>
                                <div class="col "><span>UGX160,000.00 </span></div>
                                <div class="col "><span>1007456 </span></div>
                                <div class="col "><span>UGX 660,000.00 </span></div>
                                <div class="col text-center"><span class="status status-primary">In Progress </span></div>
                            </li>
                            @php
                                    }
                                @endphp
                        </ul>
                    </div>
                    <div class="row justify-content-center">
                        <a class="btn btn-more">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('plugin-scripts')
<script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
@endpush

@push('page-scripts')
<script src="{{ asset('assets/js/pages/customer.js') }}"></script>
@endpush

