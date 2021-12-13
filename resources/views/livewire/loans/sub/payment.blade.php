<div class="sub-part-payment {{ $active ? 'd-block' : 'd-none' }}">
    <div class="sub-content d-flex">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body pt-0">
                    <div class="table-responsive">
                        <ul class="responsive-table p-0">
                            <li class="table-header font-weight-bold mb-0">
                                <div class="col ">Payment Date </div>
                                <div class="col ">Mobile Number </div>
                                <div class="col ">Amount </div>
                                <div class="col ">Transaction ID </div>
                                <div class="col text-center">Status </div>
                            </li>
                            @php
                                for($i = 0; $i < 3; $i ++) {
                            @endphp
                            <li class="table-row">
                                <div class="col "><span>28/07/2021 </span></div>
                                <div class="col "><span>0700312456 </span></div>
                                <div class="col "><span>UGX 165,000.000 </span></div>
                                <div class="col "><span>1340006781129 </span></div>
                                <div class="col text-center"><span class="status status-success">Success</span></div>
                            </li>
                            @php
                                }
                            @endphp
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        