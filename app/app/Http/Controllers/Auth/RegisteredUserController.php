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
            'name' => ['required', 'string', 'max:255'],
            'LastName' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'wilaya' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'LastName' => $request->LastName,
            'phone' => $request->phone,
            'wilaya' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        if (request()->hasFile(key: 'cv')) {
            $cv = request()->file(key: 'cv')->getClientOriginalName();
            request()->file(key: 'cv')->storeAs(path: 'cv', name: $user->id . '/' . $cv, options: '');
            $user->update(['cv' => $cv]);
        }
        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
