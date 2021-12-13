@push('plugin-styles')
<link rel="stylesheet" href="{{ asset('assets/plugins/owl-carousel/owl.carousel.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/owl-carousel/owl.theme.css') }}">
@endpush

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
                            <p class="col-6 text-left font-weight-medium mb-0 information-option">Business Name:</p>
                            <p class="col-6 text-left font-weight-medium mb-0 information-text">JK Hardware</p>
                        </div>
                        <div class="row information-item">
                            <p class="col-6 text-left font-weight-medium mb-0 information-option">Business Type:</p>
                            <p class="col-6 text-left font-weight-medium mb-0 information-text">Solo Proprietorship</p>
                        </div>
                        <div class="row information-item">
                            <p class="col-6 text-left font-weight-medium mb-0 information-option">Industry:</p>
                            <p class="col-6 text-left font-weight-medium mb-0 information-text">Hardware & Construction</p>
                        </div>
                        <div class="row information-item">
                            <p class="col-6 text-left font-weight-medium mb-0 information-option">Location:</p>
                            <p class="col-6 text-left font-weight-medium mb-0 information-text">Business Name:</p>
                        </div>
                        <div class="row information-item">
                            <p class="col-6 text-left font-weight-medium mb-0 information-option">Contact Person:</p>
                            <p class="col-6 text-left font-weight-medium mb-0 information-text">Wakiso</p>
                        </div>
                    </div>

                    <div class="col-lg-6 pl-5">
                        <div class="row information-item">
                            <p class="col-6 text-left font-weight-medium mb-0 information-option">Date Registered:</p>
                            <p class="col-6 text-left font-weight-medium mb-0 information-text">24/08/2018</p>
                        </div>
                        <div class="row information-item">
                            <p class="col-6 text-left font-weight-medium mb-0 information-option">Registration No.</p>
                            <p class="col-6 text-left font-weight-medium mb-0 information-text">800110000985</p>
                        </div>
                        <div class="row information-item">
                            <p class="col-6 text-left font-weight-medium mb-0 information-option">Phone No.</p>
                            <p class="col-6 text-left font-weight-medium mb-0 information-text">+256780756614</p>
                        </div>
                        <div class="row information-item">
                            <p class="col-6 text-left font-weight-medium mb-0 information-option">No. Of Employees</p>
                            <p class="col-6 text-left font-weight-medium mb-0 information-text">05</p>
                        </div>
                        <div class="row information-item">
                            <p class="col-6 text-left font-weight-medium mb-0 information-option">Monthly Revenue:</p>
                            <p class="col-6 text-left font-weight-medium mb-0 information-text">UGX. 25,800,000.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 d-flex mb-3">
            <div class="col-lg-4 sub-page-item {{ $ownerActive }}" wire:click.prevent="setAcitve('owner')">
                <div class="card card-custom card-stretch">
                    <div class="card-header">
                        <div class="card-title">
                            <p class="text-center justify-content-center page-sub-title-text">Owner's Information</p>   
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 sub-page-item {{ $verifyActive }}" wire:click.prevent="setAcitve('verify')">
                <div class="card card-custom card-stretch">
                    <div class="card-header">
                        <div class="card-title">
                            <p class="text-center justify-content-center page-sub-title-text">Verification Documents</p>   
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
            <livewire:business.detail.owner />
            <livewire:business.detail.verification />
            <livewire:business.detail.business />
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
@endpush

@push('page-scripts')
<script src="{{ asset('assets/js/pages/business-detail.js') }}"></script>
@endpush

