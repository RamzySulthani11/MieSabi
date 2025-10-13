@include('components.nav-login')
<x-guest-layout>
<div class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-lg border-0" style="width: 400px; background-color: #a04c00; border-radius: 20px;">
        <div class="card-body text-center text-white">
            <h4 class="fw-bold mb-1" style="color: #ffd54f;">MIE SABI</h4>
            <h5 class="fw-semibold mb-4 text-white">Register</h5>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mb-3 text-start">
                    <label for="name" class="form-label text-white small">Name</label>
                    <input id="name" type="text" class="form-control rounded-3 border-0" name="name" value="{{ old('name') }}" required autofocus>
                </div>

                <!-- Email -->
                <div class="mb-3 text-start">
                    <label for="email" class="form-label text-white small">Email</label>
                    <input id="email" type="email" class="form-control rounded-3 border-0" name="email" value="{{ old('email') }}" required>
                </div>

                <!-- Password -->
                <div class="mb-3 text-start">
                    <label for="password" class="form-label text-white small">Password</label>
                    <input id="password" type="password" class="form-control rounded-3 border-0" name="password" required>
                </div>

                <!-- Confirm Password -->
                <div class="mb-4 text-start">
                    <label for="password_confirmation" class="form-label text-white small">Confirm Password</label>
                    <input id="password_confirmation" type="password" class="form-control rounded-3 border-0" name="password_confirmation" required>
                </div>

                <!-- Sign Up Button -->
                <button type="submit" class="btn w-100 fw-semibold" style="background-color: #7a0000; color: white; border-radius: 10px;">
                    Sign up
                </button>
            </form>

            <!-- Or Continue -->
            <div class="text-white-50 small my-3">or continue with</div>

            <!-- Google Button Placeholder -->
            <button class="btn btn-light w-100 mb-3 d-flex align-items-center justify-content-center" style="border-radius: 10px;">
                <img src="https://developers.google.com/identity/images/g-logo.png" alt="Google" width="18" class="me-2">
                <span class="text-dark">Sign in with Google</span>
            </button>

            <!-- Already have an account -->
            <p class="text-white small mb-0">
                Already have an account?
                <a href="{{ route('login') }}" class="text-warning fw-semibold">Sign in</a>
            </p>
        </div>
    </div>
</div>
</x-guest-layout>
