<div class="modal fade register" id="registermodal" data-bs-backdrop="modal" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0 ">
            <div class="">
                <button type="button" class="btn-close knKOjn" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="bvMGHA d-flex justify-content-center align-items-center flex-column text-center">
                <h1 class="axZOD">
                    Sign Up
                </h1>
                <p class="hZSznL">
                    Create a
                    <strong>(free)</strong>
                    goop account for a quick checkout.
                </p>
                <div class="d-flex align-items-center justify-content-center">
                    <span class="kjxxYl">Already have an account?</span>
                    <a class="bgacUK" href="{{ route('login') }}">Log In</a>
                </div>
                {{--                        form--}}
                <form class="jAvnYM" method="POST" action="{{ route('register') }}">
                    @csrf
                    {{--                        name--}}
                    <div class="dwjLBn p-0">
                        <input id="name" placeholder="Name" type="text" class="jVYPtV @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    {{--email--}}
                    <div class="dwjLBn">
                        <input id="email" type="email" placeholder="Email Address" class="jVYPtV @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    {{--password--}}
                    <div class="dwjLBn">
                        <input id="password" type="password" placeholder="Password" class="jVYPtV @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                    {{--reenter password--}}
                    <div class="dwjLBn">
                        <input id="password-confirm" type="password" placeholder="Reenter Password" class="jVYPtV" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    {{--                    reclame--}}
                    <div class="hYBLyb d-flex justify-content-center">
                        <label
                            class="dlJBHs fWXjje" type="button" width="100">
                            <input class="jaoyAT" type="checkbox" name="subscribe" checked="">
                            <div class="edtNQo">
                                <span class="TkjxxYl">Yep! I’d love to goop my inbox with stories, tips, and more.</span>
                            </div>
                        </label>
                    </div>
                    {{--subtmit--}}
                    <button class="hgddqe mb-3" type="submit">Sign Up</button>
                    <p class="faGxGD">By clicking “sign up,” you agree to receive
                        emails from goop and accept our
                        <a href="/web-terms-of-use/" class="dKwsSP">
                            web terms of use
                        </a>
                        and
                        <a href="/privacy-cookies-policy/" class="dKwsSP">
                            privacy and cookie policy
                        </a>
                        .
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>


@section('scripts')

    <script type="text/javascript">
        @if ($errors->has('email'))
            @if ($errors->has('password'))
                var d = document.getElementById("registermodal");
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
             @endif
    </script>
@endsection
