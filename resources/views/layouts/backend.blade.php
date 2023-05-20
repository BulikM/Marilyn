@include('components.backend.head')
@include('components.backend.navbar')
@include('components.backend.sidebar')

{{--                inhoud--}}

                @yield('content')

@include('components.backend_modal.login_modal')
{{--{{dd(session())}}--}}
@if( session()->has('error'))
    <script>
        document.getElementById("loginmodal").style.display = "block"
        document.getElementById("loginmodal").classList.add("show")
    </script>
@endif

@include('components.backend.footer')
