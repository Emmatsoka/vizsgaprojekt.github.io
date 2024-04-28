<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use romanzipp\Turnstile\Rules\TurnstileCaptcha;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'username' => ['required', 'string', 'max:18', 'unique:'.User::class],
            'name' => ['required', 'string', 'max:255'],
            'szulev' => ['required'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'gdpr' =>'accepted',
            'cf-turnstile-response' => ['required', 'string', new TurnstileCaptcha()],
        ],[
            'username.unique' => 'A felhasználónév már foglalt.',
            'username.string' => 'A felhasználónévnek szövegnek kell lennie.',
            'username.max:18' => 'A felhasználónév legfeljebb 255 karakter hosszú lehet.',
            'name.max:255' => 'A név legfeljebb 255 karakter hosszú lehet.',
            'gdpr.accepted' => 'Nem fogadtad el az Adatvédelmi Szabályzatot.',
            'name.required' => 'A név megadása kötelező.',
            'name.string' => 'A névnek szövegnek kell lennie.',
            'email.required' => 'Az email cím megadása kötelező.',
            'email.string' => 'Az email címnek szövegnek kell lennie.',
            'email.lowercase' => 'Az email címnek kisbetűket kell tartalmaznia.',
            'email.email' => 'Az email cím formátuma érvénytelen.',
            'email.max:255' => 'Az email cím legfeljebb 255 karakter hosszú lehet.',
            'email.unique' => 'Az email cím már foglalt.',
            'password.required' => 'A jelszó megadása kötelező.',
            'password.min:8' => 'A jelszónak minimum 8 karakterből kell állnia.',
            'password.confirmed' => 'A jelszó megerősítése nem egyezik.',
            'password.password' => 'A jelszónak legalább 8 karakter hosszúnak kell lennie, és tartalmaznia kell legalább egy nagybetűt, egy kisbetűt, egy számot és egy speciális karaktert.',

        ]);

        $user = User::create([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'szulev' => $request->szulev,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
