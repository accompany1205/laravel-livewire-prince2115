<div class="sub-part-document {{ $active ? 'd-block' : 'd-none' }}">
    <div class="row sub-content d-flex">
        @php
            for($i = 0; $i < 6; $i ++) {
        @endphp
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-4">
            <div class="card card-custom card-stretch cert-doc-item">
                <div class="hovereffect">
                    <img class="image img-responsive" src="{{ asset('assets/images/carousel/banner_1.jpg') }}" alt="http://placehold.it/350x250" alt="">
                    <div class="overlay">
                        <h4>National ID Front</h4>
                        <div class="col-12 justify-content-center click-view">
                            <span class="menu-icon icon-full-screen"
                                wire:click="$emit('imageShow', '{{ asset('assets/images/carousel/banner_2.jpg') }}', 'National ID Front')"></span>
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
        @php
            }
        @endphp
    </div>
</div>