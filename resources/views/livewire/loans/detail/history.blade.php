<div class="sub-part-history {{ $active ? 'd-block' : 'd-none' }}">
    <div class="sub-content d-flex">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body pt-0">
                    <div class="table-responsive">
                        <ul class="responsive-table p-0">
                            <li class="table-header font-weight-bold mb-0">
                                <div class="col ">Loan ID </div>
                                <div class="col ">Loan Amount </div>
                                <div class="col ">Pament Schedule </div>
                                <div class="col ">Total Due </div>
                                <div class="col ">Installment </div>
                                <div class="col text-center">Status </div>
                            </li>
                            @php
                                for($i = 0; $i < 10; $i ++) {
                            @endphp
                            <li class="table-row">
                                <div class="col "><span>L0046671 </span></div>
                                <div class="col "><span>UGX 400,000.00</span></div>
                                <div class="col "><span>Weekly</span></div>
                                <div class="col "><span>UGX 560,000.00</span></div>
                                <div class="col "><span>UGX 80,000.00</span></div>
                                <div class="col text-center"><span class="status status-danger">Reject</span></div>
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
        