
<div class="modal fade register" id="loginmodal" data-bs-backdrop="modal" data-bs-keyboard="false" tabindex="-1" aria-labelledby="loginmodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">

        <div class="modal-content rounded-0 ">
            <div class="">
                <button type="button" class="btn-close knKOjn" data-bs-dismiss="modal" aria-label="Close" id="closemodal"></button>
            </div>
            <div class="bvMGHA bvMGHA d-flex justify-content-center align-items-center flex-column text-center">
                <h1 class="axZOD">
                    Log In
                </h1>
                <p class="hZSznL">
                    Log in to your goop account for a quick checkout.
                </p>
                <div class="d-flex align-items-center justify-content-center">
                    <span class=" kjxxYl">Don’t have one?</span>
                    <a class="bgacUK" href="{{ route('register') }}">Sign up</a>
                </div>
                {{--                        form--}}
                <form method="POST" action="{{ route('login') }}" class="gnqwzR w-100" >
                    @csrf
                    {{--                        email--}}
                    <div class="dwjLBn p-0">

                        <input id="email" type="email" placeholder="Email Address" class="jVYPtV jYrnUY @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    {{--                        password--}}
                    <div class="dwjLBn">
                        <input id="password" type="password" placeholder="Password" class="jVYPtV @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" >
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    {{--                        remember me--}}
                    <div class="hYBLyb">
                        <label class="dlJBHs fWXjje" type="button" width="100">
                            <input class="jaoyAT" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <div class="edtNQo">
                                <span class="kjxxYl">Remember Me</span>
                            </div>
                        </label>
                        @if (Route::has('password.request'))
                            <a
                                class="bgacUK"
                                href="{{ route('password.request') }}" type="button">Forgot Password?
                            </a>
                        @endif
                    </div>
                    <button class="hgddqe"
                            type="submit">Log In
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
@if ($errors->any())
    var d = document.getElementById("loginmodal");
    d.className += " show";
    d.style.display = "block"
    @endif
    document.getElementById('closemodal').addEventListener('click', function(event) {
        event.preventDefault();
        var d = document.getElementById('loginmodal');
        if (d.classList.contains('show')) {
            d.classList.remove('show');
        }
            d.style.display = "none";
    });
</script>
