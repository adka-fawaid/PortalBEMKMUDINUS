<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
use Laravel\Socialite\Facades\Socialite;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        try {
            $request->authenticate();
        } catch (ValidationException $e) {
            // Jika sudah kena throttle (terlalu banyak percobaan), gunakan pesan bawaan
            if (RateLimiter::tooManyAttempts($request->throttleKey(), 5)) {
                throw $e;
            }

            // Gunakan fungsi terpisah untuk menentukan pesan error spesifik
            throw ValidationException::withMessages($this->loginErrorMessage($request));
        }

        $request->session()->regenerate();

        return redirect()->intended(route('dashboard', absolute: false));
    }

    /**
     * Login error message based on email existence.
     */
    protected function loginErrorMessage(LoginRequest $request): array
    {
        $email = (string) $request->input('email');
        $emailExists = User::where('email', $email)->exists();

        // Jika email tidak terdaftar, tampilkan error pada field email
        if (! $emailExists) {
            return [
                'email' => 'Email tidak terdaftar.',
            ];
        }

        // Jika email ada namun autentikasi gagal, arahkan pesan ke field password
        return [
            'password' => 'Kata sandi salah.',
        ];
    }

    /**
     * Redirect to Google OAuth provider.
     */
    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Handle Google OAuth callback.
     */
    public function googleCallback()
    {
        try {
            // Ambil data user dari Google
            $googleUser = Socialite::driver('google')->user();
        } catch (\Throwable $e) {
            return redirect()->route('login')->withErrors([
                'email' => 'Gagal autentikasi Google. Silakan coba lagi.',
            ]);
        }

        // Hanya izinkan jika email sudah ada di database (tidak membuat user baru)
        $user = User::where('email', $googleUser->getEmail())->first();

        if (! $user) {
            return redirect()->route('login')->withErrors([
                'email' => 'Akun Google ini tidak diizinkan. Hubungi admin.',
            ]);
        }

        Auth::login($user, remember: true);

        request()->session()->regenerate();

        return redirect()->intended(route('dashboard', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
