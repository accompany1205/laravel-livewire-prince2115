<div class="sub-part-profile {{ $active ? 'd-block' : 'd-none' }}">
    <div class="sub-content d-flex">
        <div class="col-lg-6 grid-margin stretch-card pr-0 mb-3">
            <div class="card card-custom card-stretch border-r-radius-0">
                <div class="card-header border-tl-radius-20">
                    <div class="card-title pl-2">
                        <p class="text-left font-weight-bold">Business Information</p>   
                    </div>
                </div>

                <div class="card-body p-3">
                    <div class="col-lg-12 pt-1">
                        <div class="row information-item">
                            <p class="col-6 text-left  mb-0 information-option">Business Name:</p>
                            <p class="col-6 text-left  mb-0 information-text">JK Hard Ware</p>
                        </div>
                        <div class="row information-item">
                            <p class="col-6 text-left  mb-0 information-option">Business Type:</p>
                            <p class="col-6 text-left  mb-0 information-text">Sole Proprietorship</p>
                        </div>
                        <div class="row information-item">
                            <p class="col-6 text-left  mb-0 information-option">Industry:</p>
                            <p class="col-6 text-left  mb-0 information-text">Hardware & Construction</p>
                        </div>
                        <div class="row information-item">
                            <p class="col-6 text-left  mb-0 information-option">Location:</p>
                            <p class="col-6 text-left  mb-0 information-text">Wakiso</p>
                        </div>
                        <div class="row information-item">
                            <p class="col-6 text-left  mb-0 information-option">Contact Person:</p>
                            <p class="col-6 text-left  mb-0 information-text">John Kilwana</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 grid-margin stretch-card pr-0 pl-0 mb-3">
            <div class="card card-custom card-stretch border-solid-1 border-l-radius-0">
                <div class="card-header border-tr-radius-20">
                    <div class="card-title pl-2">
                        <p class="text-left font-weight-bold">Registration Information</p>   
                    </div>
                </div>

                <div class="card-body p-3">
                    <div class="col-lg-12 pt-1">
                        <div class="row information-item">
                            <p class="col-6 text-left  mb-0 information-option">Date Registered:</p>
                            <p class="col-6 text-left  mb-0 information-text">24/06/2018</p>
                        </div>
                        <div class="row information-item">
                            <p class="col-6 text-left  mb-0 information-option">Registration No.</p>
                            <p class="col-6 text-left  mb-0 information-text">8001100985</p>
                        </div>
                        <div class="row information-item">
                            <p class="col-6 text-left  mb-0 information-option">Phone Number:</p>
                            <p class="col-6 text-left  mb-0 information-text">+25678076542</p>
                        </div>
                        <div class="row information-item">
                            <p class="col-6 text-left  mb-0 information-option">No of Employees:</p>
                            <p class="col-6 text-left  mb-0 information-text">05</p>
                        </div>
                        <div class="row information-item">
                            <p class="col-6 text-left  mb-0 information-option">Monthly Revenue:</p>
                            <p class="col-6 text-left  mb-0 information-text">UGX 25,800,000.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sub-content d-flex">
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
            <div class="card card-custom card-stretch cert-doc-item">
                <div class="hovereffect">
                    <img class="image img-responsive" src="{{ asset('assets/images/carousel/banner_1.jpg') }}" alt="http://placehold.it/350x250" alt="">
                    <div class="overlay">
                        <h4>National ID Front</h4>
                        <div class="col-12 justify-content-center click-view">
                            <span class="menu-icon icon-full-screen"
                                wire:click="$emit('imageShow', '{{ asset('assets/images/carousel/banner_1.jpg') }}', 'National ID Front')"></span>
                            <p class="text-center">click to view</p>
                        </div>
                        <div class="col-12 d-flex action-bar">
                            <a class="btn btn-priamry col-6">
                                Accept
                            </a>
                            <a class="btn btn-priamry col-6">
                                Reject
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
            <div class="card card-custom card-stretch cert-doc-item">
                <div class="hovereffect">
                    <img class="image img-responsive" src="{{ asset('assets/images/carousel/banner_2.jpg') }}" alt="http://placehold.it/350x250" alt="">
                    <div class="overlay">
                        <h4>National ID Back</h4>
                        <div class="col-12 justify-content-center click-view">
                            <span class="menu-icon icon-full-screen" 
                                wire:click="$emit('imageShow', '{{ asset('assets/images/carousel/banner_2.jpg') }}', 'National ID Back')"></span>
                            <p class="text-center">click to view</p>
                        </div>
                        <div class="col-12 d-flex action-bar">
                            <a class="btn btn-priamry col-6">
                                Accept
                            </a>
                            <a class="btn btn-priamry col-6">
                                Reject
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
            <div class="card card-custom card-stretch cert-doc-item">
                <div class="hovereffect">
                    <img class="image img-responsive" src="{{ asset('assets/images/carousel/banner_3.jpg') }}" alt="http://placehold.it/350x250" alt="">
                    <div class="overlay">
                        <h4>Profile Photo</h4>
                        <div class="col-12 justify-content-center click-view">
                            <span class="menu-icon icon-full-screen"
                                wire:click="$emit('imageShow', '{{ asset('assets/images/carousel/banner_3.jpg') }}', 'Profile Photo')"></span>
                            <p class="text-center">click to view</p>
                        </div>
                        <div class="col-12 d-flex action-bar">
                            <a class="btn btn-priamry col-6">
                                Accept
                            </a>
                            <a class="btn btn-priamry col-6">
                                Reject
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
            <div class="card card-custom card-stretch cert-doc-item">
                <div class="hovereffect">
                    <img class="image img-responsive" src="{{ asset('assets/images/carousel/banner_4.jpg') }}" alt="http://placehold.it/350x250" alt="">
                    <div class="overlay">
                        <h4>Selfie in Business</h4>
                        <div class="col-12 justify-content-center click-view">
                            <span class="menu-icon icon-full-screen" 
                                wire:click="$emit('imageShow', '{{ asset('assets/images/carousel/banner_4.jpg') }}', 'Selfie in Business')"></span>
                            <p class="text-center">click to view</p>
                        </div>
                        <div class="col-12 d-flex action-bar">
                            <a class="btn btn-priamry col-6">
                                Accept
                            </a>
                            <a class="btn btn-priamry col-6">
                                Reject
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>