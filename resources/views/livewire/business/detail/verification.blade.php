<div class="sub-part-verification {{ $active ? 'd-block' : 'd-none' }}">
    <div class="row sub-content d-flex">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-4">
            <div class="card card-custom card-stretch cert-doc-item">
                <div class="hovereffect">
                    <img class="image img-responsive" src="{{ asset('assets/images/carousel/banner_5.jpg') }}" alt="http://placehold.it/350x250" alt="">
                    <div class="overlay">
                        <h4>Office/ Shop Photo</h4>
                        <div class="col-12 justify-content-center click-view">
                            <span class="menu-icon icon-full-screen"
                                wire:click="$emit('imageShow', '{{ asset('assets/images/carousel/banner_5.jpg') }}', 'Office/ Shop Photo')"></span>
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
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-4">
            <div class="card card-custom card-stretch cert-doc-item">
                <div class="hovereffect">
                    <img class="image img-responsive" src="{{ asset('assets/images/carousel/banner_6.jpg') }}" alt="http://placehold.it/350x250" alt="">
                    <div class="overlay">
                        <h4>Office/ Shop Video</h4>
                        <div class="col-12 justify-content-center click-view">
                            <span class="menu-icon icon-full-screen" 
                                wire:click="$emit('imageShow', '{{ asset('assets/images/carousel/banner_6.jpg') }}', 'Office/ Shop Video')"></span>
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
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-4">
            <div class="card card-custom card-stretch cert-doc-item">
                <div class="hovereffect">
                    <img class="image img-responsive" src="{{ asset('assets/images/carousel/banner_7.jpg') }}" alt="http://placehold.it/350x250" alt="">
                    <div class="overlay">
                        <h4>Selfie in office/shop</h4>
                        <div class="col-12 justify-content-center click-view">
                            <span class="menu-icon icon-full-screen"
                                wire:click="$emit('imageShow', '{{ asset('assets/images/carousel/banner_7.jpg') }}', 'Selfie in office/shop')"></span>
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
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-4">
            <div class="card card-custom card-stretch cert-doc-item">
                <div class="hovereffect">
                    <img class="image img-responsive" src="{{ asset('assets/images/carousel/banner_8.jpg') }}" alt="http://placehold.it/350x250" alt="">
                    <div class="overlay">
                        <h4>Neighbourhood</h4>
                        <div class="col-12 justify-content-center click-view">
                            <span class="menu-icon icon-full-screen" 
                                    wire:click="$emit('imageShow', '{{ asset('assets/images/carousel/banner_8.jpg') }}', 'Neighbourhood')"></span>
                            <p class="text-center">click to view</p>
                        </div>
                        <div class="col-12 d-flex action-bar">
                            <a class="btn btn-priamry col-6">Accept</a>
                            <a class="btn btn-priamry col-6">Reject</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-4">
            <div class="card card-custom card-stretch cert-doc-item">
                <div class="hovereffect">
                    <img class="image img-responsive" src="{{ asset('assets/images/carousel/banner_9.jpg') }}" alt="http://placehold.it/350x250" alt="">
                    <div class="overlay">
                        <h4>Utility Bill</h4>
                        <div class="col-12 justify-content-center click-view">
                            <span class="menu-icon icon-full-screen" 
                                    wire:click="$emit('imageShow', '{{ asset('assets/images/carousel/banner_9.jpg') }}', 'Utility Bill')"></span>
                            <p class="text-center">click to view</p>
                        </div>
                        <div class="col-12 d-flex action-bar">
                            <a class="btn btn-priamry col-6">Accept</a>
                            <a class="btn btn-priamry col-6">Reject</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>