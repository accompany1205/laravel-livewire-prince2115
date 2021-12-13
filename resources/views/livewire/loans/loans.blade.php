@push('plugin-styles')
<link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.standalone.min.css') }}" rel="stylesheet" />
@endpush

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="page-title-section">
            <p class="text-center justify-content-center page-title-text">Loans</p>
        </div>
    </div>

    <div class="col-lg-12 page-container p-0">
        <div class="data-filter d-flex grid-margin col-lg-12">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pl-0">
                <div class="input-group date float-left">
                    <input type="text" class="form-control" name="date" placeholder="Date">
                    <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="material-icons">date_range</i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="input-group m-auto">
                    <input type="text" class="form-control" name="status" placeholder="Payment Schedule">
                    <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="material-icons">expand_more</i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pr-0">
                <div class="input-group float-right">
                    <input type="text" class="form-control" name="status" placeholder="LoanID: L0046671">
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
                                <div class="col ">Loan ID </div>
                                <div class="col ">Customer </div>
                                <div class="col ">Business Name </div>
                                <div class="col ">Credit Score </div>
                                <div class="col ">Loan Amount </div>
                                <div class="col ">Pament Schedule </div>
                                <div class="col ">Installment </div>
                                <div class="col text-center">Action </div>
                            </li>
                            @php
                                for($i = 0; $i < 10; $i ++) {
                            @endphp
                            <li class="table-row">
                                <div class="col "><span>28/07/2021</span></div>
                                <div class="col "><span>L0046671 </span></div>
                                <div class="col "><span>Jane Mukwaya </span></div>
                                <div class="col "><span>JM Boutique</span></div>
                                <div class="col "><span>576</span></div>
                                <div class="col "><span>UGX 1,500,000.00</span></div>
                                <div class="col "><span>Monthly</span></div>
                                <div class="col "><span>UGX 125,000.00</span></div>
                                <div class="col text-center">
                                    <span class="view-details mdi mdi-eye" 
                                        wire:click="$emit('goDetail', 1)"></span>
                                </div>
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
<script src="{{ asset('assets/js/pages/loans.js') }}"></script>
@endpush

