<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{

    public function redirect(string $provider)
    {
        return Socialite::driver($provider)
            ->stateless()
            ->redirect();
    }

    public function callback(string $provider)
    {
        try {
            $socialUser = Socialite::driver($provider)
                ->stateless()
                ->setHttpClient(new \GuzzleHttp\Client(['verify' => false]))
                ->user();

            // البحث عن المستخدم عبر البريد الإلكتروني أو إنشاء حساب جديد
            $user = User::firstOrCreate(
                ['email' => $socialUser->getEmail()],
                [
                    'name'              => $socialUser->getName() ?? $socialUser->getNickname(),
                    'email_verified_at' => now(),
                    'password'          => Hash::make(Str::random(16)), // كلمة مرور عشوائية
                    'provider'          => $provider,
                    'provider_id'       => $socialUser->getId(),
                    'avatar'            => $socialUser->getAvatar(),
                ]
            );

            Auth::login($user); // تسجيل الدخول تلقائيًا

            return redirect()->route('front.index');

        } catch (\Exception $e) {
            return redirect()->route('front.login')->withErrors([
                'social_login' => $e->getMessage(),
            ]);
        }
    }
}
