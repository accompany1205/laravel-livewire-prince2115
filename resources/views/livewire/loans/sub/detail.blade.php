<div class="row">
    <div class="col-lg-12 grid-margin stretch-card mb-2">
        <div class="d-flex page-title-section">
            <div class="col-lg-6">
                <p class="text-center justify-content-center page-title-text">JK Hardware</p>   
            </div>
            <div class="col-lg-6">
                <p class="text-left justify-content-start pl-5 page-title-text">Status Pending</p>   
            </div>
        </div>
    </div>

    <div class="col-lg-12 page-container p-0">
        <div class="col-lg-12 grid-margin stretch-card mb-2">
            <div class="card">
                <div class="card-body d-flex business-information">
                    <div class="col-lg-6 pl-5">
                        <div class="row information-item">
                            <p class="col-6 text-left font-weight-medium mb-0 information-option">Loan ID: </p>
                            <p class="col-6 text-left font-weight-medium mb-0 information-text">L00100341</p>
                        </div>
                        <div class="row information-item">
                            <p class="col-6 text-left font-weight-medium mb-0 information-option">Date Approved:</p>
                            <p class="col-6 text-left font-weight-medium mb-0 information-text">14/04/2021</p>
                        </div>
                        <div class="row information-item">
                            <p class="col-6 text-left font-weight-medium mb-0 information-option">Loan Amount:</p>
                            <p class="col-6 text-left font-weight-medium mb-0 information-text">UGX 900,000.00</p>
                        </div>
                        <div class="row information-item">
                            <p class="col-6 text-left font-weight-medium mb-0 information-option">Payment Schedule:</p>
                            <p class="col-6 text-left font-weight-medium mb-0 information-text">Weekly</p>
                        </div>
                        <div class="row information-item">
                            <p class="col-6 text-left font-weight-medium mb-0 information-option">Loan Duration:</p>
                            <p class="col-6 text-left font-weight-medium mb-0 information-text">6 Weeks</p>
                        </div>
                        <div class="row information-item">
                            <p class="col-6 text-left font-weight-medium mb-0 information-option">Installments:</p>
                            <p class="col-6 text-left font-weight-medium mb-0 information-text">UGX 165,000.00</p>
                        </div>
                        <div class="row information-item">
                            <p class="col-6 text-left font-weight-medium mb-0 information-option">Completion Date:</p>
                            <p class="col-6 text-left font-weight-medium mb-0 information-text">25/08/2021</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 pl-5">
                        <div class="row information-item">
                            <p class="col-6 text-left font-weight-medium mb-0 information-option">Repayment Amount:</p>
                            <p class="col-6 text-left font-weight-medium mb-0 information-text">UGX 990,000.00</p>
                        </div>
                        <div class="row information-item">
                            <p class="col-6 text-left font-weight-medium mb-0 information-option">Interest Rate:</p>
                            <p class="col-6 text-left font-weight-medium mb-0 information-text">10%</p>
                        </div>
                        <div class="row information-item">
                            <p class="col-6 text-left font-weight-medium mb-0 information-option">Processing Fee:</p>
                            <p class="col-6 text-left font-weight-medium mb-0 information-text">UGX 20,000.00</p>
                        </div>
                        <div class="row information-item">
                            <p class="col-6 text-left font-weight-medium mb-0 information-option">Total Paid:</p>
                            <p class="col-6 text-left font-weight-medium mb-0 information-text">UGX 330,000.00</p>
                        </div>
                        <div class="row information-item">
                            <p class="col-6 text-left font-weight-medium mb-0 information-option">Loan Balance:</p>
                            <p class="col-6 text-left font-weight-medium mb-0 information-text">UGX 660,000.00</p>
                        </div>
                        <div class="row information-item">
                            <p class="col-6 text-left font-weight-medium mb-0 information-option">Next Payment Due: </p>
                            <p class="col-6 text-left font-weight-medium mb-0 information-text">04/08/2020</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 d-flex mb-3">
            <div class="col-lg-4 sub-page-item {{ $paymentActive }}" wire:click.prevent="setAcitve('payment')">
                <div class="card card-custom card-stretch">
                    <div class="card-header">
                        <div class="card-title">
                            <p class="text-center justify-content-center page-sub-title-text">Payment</p>   
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 sub-page-item {{ $scheduleActive }}" wire:click.prevent="setAcitve('schedule')">
                <div class="card card-custom card-stretch">
                    <div class="card-header">
                        <div class="card-title">
                            <p class="text-center justify-content-center page-sub-title-text">Payment Schedule</p>   
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 sub-page-item {{ $businessActive }}" wire:click.prevent="setAcitve('business')">
                <div class="card card-custom card-stretch">
                    <div class="card-header">
                        <div class="card-title">
                            <p class="text-center justify-content-center page-sub-title-text">Business Doucments</p>   
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="parts mb-2">
            <livewire:loans.sub.payment />
            <livewire:loans.sub.payment-schedule />
            <livewire:loans.sub.business />
        </div>

        <div class="action-content d-flex">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-left">
                <a href="#" class="btn btn-approve" wire:click="approve">Approve</a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center">
                <a href="#" class="btn btn-blacklist" wire:click="blacklist">Blacklist</a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center">
                <a href="#" class="btn btn-sms" wire:click="send_sms">Send SMS</a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-right">
                <a href="#" class="btn btn-noti" wire:click="send_notification">Send Notification</a>
            </div>
        </div>
    </div>
</div>

@push('page-scripts')
<script src="{{ asset('assets/js/pages/loans-detail.js') }}"></script>
@endpush

