@push('plugin-styles')
<link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.standalone.min.css') }}" rel="stylesheet" />
@endpush

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="page-title-section">
            <p class="text-center justify-content-center page-title-text">Business</p>
        </div>
    </div>

    <div class="col-lg-12 page-container p-0">
        <div class="data-filter d-flex grid-margin col-lg-12">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="input-group">
                    <input type="text" class="form-control" name="status" placeholder="District">
                    <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="material-icons">expand_more</i>
                        </span>
                    </div>
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
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="input-group">
                    <input type="text" class="form-control" name="status" placeholder="Industry">
                    <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="material-icons">expand_more</i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="input-group">
                    <input type="text" class="form-control" name="status" placeholder="Revenue">
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
                                <div class="col">Business Name </div>
                                <div class="col ">Industry </div>
                                <div class="col ">District </div>
                                <div class="col ">Contact Persion </div>
                                <div class="col ">Phone No. </div>
                                <div class="col ">Revenue </div>
                                <div class="col text-center">Status </div>
                                <div class="col text-center">Action </div>
                            </li>
                            @php
                                for($i = 0; $i < 10; $i ++) {
                            @endphp
                            <li class="table-row">
                                <div class="col "><span>JP Holding</span></div>
                                <div class="col "><span>Electronics </span></div>
                                <div class="col "><span>Kampala </span></div>
                                <div class="col "><span>John Zimular</span></div>
                                <div class="col "><span>0701750750</span></div>
                                <div class="col "><span>UGX 450,00.00</span></div>
                                <div class="col text-center"><span class="status status-primary">Pending</span></div>
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
@endpush

@push('page-scripts')
<script src="{{ asset('assets/js/pages/business.js') }}"></script>
@endpush

