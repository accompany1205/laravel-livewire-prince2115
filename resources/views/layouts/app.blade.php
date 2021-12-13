<x-layouts.base>    
    <div class="container-scroller" id="app">
        <div class="container-fluid page-body-wrapper">
            @include('layouts.sidebar')
            @include('layouts.header')
            <div class="main-panel">
                <div class="content-wrapper">
                    {{ $slot }}
                </div>
                @include('layouts.footer')
            </div>
        </div>
    </div>
    @include('layouts.modal')
</x-layouts.base>
