<!doctype html>
<html lang="en">
    @include('include.admin.header')
    <body data-topbar="white">
        <div id="layout-wrapper">
            @include('include.admin.navbar')
            <div class="vertical-menu">
                <div data-simplebar class="h-100">
                    @include('include.admin.sidebar')
                </div>
            </div>
            {{-- TODO::Main Content --}}
            <div class="main-content">
                @yield('admin')
                @include('include.admin.footer')
            </div>
            {{-- TODO::Main Content --}}
        </div>
        @include('include.admin.script')
    </body>
</html>
