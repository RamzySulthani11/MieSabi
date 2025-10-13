@include('components.nav-login')
<x-guest-layout>
    <!-- Login Card -->
    <div class="login-card">
        <h2>MIE SABI</h2>
        <h5 class="text-center mb-4">Login</h5>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-3">
                <label class="form-label text-white">{{ __('Email') }}</label>
                <x-text-input id="email" class="form-control"
                    type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-white" />
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label class="form-label text-white">{{ __('Password') }}</label>
                <x-text-input id="password" class="form-control"
                    type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-white" />
            </div>

            <!-- Remember Me -->
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="remember" id="remember_me">
                <label class="form-check-label text-white" for="remember_me">
                    {{ __('Remember me') }}
                </label>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-signin">
                {{ __('Sign In') }}
            </button>
        </form>

        <div class="text-center text-white mt-3 small">or continue with</div>

        <button class="btn-google mt-2">
            <img src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/auth/google.svg" width="20">
            <a href="{{ route('google.login') }}">
                Sign in with Google
            </a>
        </button>

        @if (Route::has('password.request'))
            <div class="text-center mt-3">
                <a class="text-white small" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            </div>
        @endif

        <div class="register-link">
            Don’t have an account yet? <a href="{{ route('register') }}">Register for free</a>
        </div>
    </div>
</x-guest-layout>
