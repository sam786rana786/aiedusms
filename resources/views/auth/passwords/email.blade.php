<x-guest-layout>
    <x-slot name="title">Reset Password</x-slot>
    <div class="login-wrapper">
        <div class="container">
            <div class="loginbox">
                <div class="login-left">
                    <img class="img-fluid" src="{{ URL::asset('/assets/img/login.png') }}" alt="Logo">
                </div>
                <div class="login-right">
                    <div class="login-right-wrap">
                        <h1>Reset Password</h1>
                        <p class="account-subtitle">Let Us Help You</p>
                        @if (session('status'))
                            <div class="alert bg-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <!-- Form -->
                        <form method="POST" action="{{ route('password.update') }}">@csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="form-group">
                                <label>Enter your registered email address <span class="login-danger">*</span></label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <div class="text-danger pt-2">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <span class="profile-views"><i class="fas fa-envelope"></i></span>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block" type="submit">Reset My Password</button>
                            </div>
                            <div class="form-group mb-0">
                                <a class="btn btn-primary primary-reset btn-block" href="{{ route('login') }}">Login</a>
                            </div>
                        </form>
                        <!-- /Form -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
