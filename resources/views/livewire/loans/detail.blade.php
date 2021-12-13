@push('plugin-styles')
<link rel="stylesheet" href="{{ asset('assets/plugins/owl-carousel/owl.carousel.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/owl-carousel/owl.theme.css') }}">
@endpush

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card mb-2">
        <div class="page-title-section">
            <p class="text-center justify-content-center page-title-text">Application Details</p>   
        </div>
    </div>

    <div class="col-lg-12 page-container p-0">
        <div class="col-lg-12 grid-margin stretch-card mb-2">
            <div class="card">
                <div class="card-body d-flex business-information">
                    <div class="col-lg-6 pl-5">
                        <div class="row information-item">
                            <p class="col-6 text-left font-weight-medium mb-0 information-option">Date:</p>
                            <p class="col-6 text-left font-weight-medium mb-0 information-text">28/07/2021</p>
                        </div>
                        <div class="row information-item">
                            <p class="col-6 text-left font-weight-medium mb-0 information-option">Loan ID:</p>
                            <p class="col-6 text-left font-weight-medium mb-0 information-text">L00032196</p>
                        </div>
                        <div class="row information-item">
                            <p class="col-6 text-left font-weight-medium mb-0 information-option">Loan Amount:</p>
                            <p class="col-6 text-left font-weight-medium mb-0 information-text">UGX 540,000.00</p>
                        </div>
                        <div class="row information-item">
                            <p class="col-6 text-left font-weight-medium mb-0 information-option">Payment Schedule:</p>
                            <p class="col-6 text-left font-weight-medium mb-0 information-text">Weekly </p>
                        </div>
                        <div class="row information-item">
                            <p class="col-6 text-left font-weight-medium mb-0 information-option">Payment Duration:</p>
                            <p class="col-6 text-left font-weight-medium mb-0 information-text">10 Weeks</p>
                        </div>
                    </div>

                    <div class="col-lg-6 pl-5">
                        <div class="row information-item">
                            <p class="col-6 text-left font-weight-medium mb-0 information-option">Credit Score: </p>
                            <p class="col-6 text-left font-weight-medium mb-0 information-text">154</p>
                        </div>
                        <div class="row information-item">
                            <p class="col-6 text-left font-weight-medium mb-0 information-option">Total Due: </p>
                            <p class="col-6 text-left font-weight-medium mb-0 information-text">UGX 603,200.00</p>
                        </div>
                        <div class="row information-item">
                            <p class="col-6 text-left font-weight-medium mb-0 information-option">Instalment:</p>
                            <p class="col-6 text-left font-weight-medium mb-0 information-text">UGX 60,320.00</p>
                        </div>
                        <div class="row information-item">
                            <p class="col-6 text-left font-weight-medium mb-0 information-option">Intrest Rate:</p>
                            <p class="col-6 text-left font-weight-medium mb-0 information-text">8%</p>
                        </div>
                        <div class="row information-item">
                            <p class="col-6 text-left font-weight-medium mb-0 information-option">Processing Fee:</p>
                            <p class="col-6 text-left font-weight-medium mb-0 information-text">UGX 20,000.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 d-flex mb-3">
            <div class="col-lg-3 sub-page-item {{ $customerActive }}" wire:click.prevent="setAcitve('customer')">
                <div class="card card-custom card-stretch">
                    <div class="card-header">
                        <div class="card-title">
                            <p class="text-center justify-content-center page-sub-title-text">Customer Information</p>   
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 sub-page-item {{ $profileActive }}" wire:click.prevent="setAcitve('profile')">
                <div class="card card-custom card-stretch">
                    <div class="card-header">
                        <div class="card-title">
                            <p class="text-center justify-content-center page-sub-title-text">Business Profile</p>   
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 sub-page-item {{ $docActive }}" wire:click.prevent="setAcitve('document')">
                <div class="card card-custom card-stretch">
                    <div class="card-header">
                        <div class="card-title">
                            <p class="text-center justify-content-center page-sub-title-text">Business Doucments</p>   
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 sub-page-item {{ $hisActive }}" wire:click.prevent="setAcitve('history')">
                <div class="card card-custom card-stretch">
                    <div class="card-header">
                        <div class="card-title">
                            <p class="text-center justify-content-center page-sub-title-text">Loan History</p>   
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="parts mb-2">
            <livewire:loans.detail.customer />
            <livewire:loans.detail.profile />
            <livewire:loans.detail.document />
            <livewire:loans.detail.history />
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

@push('plugin-scripts')
<script src="{{ asset('assets/plugins/owl-carousel/owl.carousel.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
@endpush

@push('page-scripts')
<script src="{{ asset('assets/js/pages/loans-detail.js') }}"></script>
@endpush

