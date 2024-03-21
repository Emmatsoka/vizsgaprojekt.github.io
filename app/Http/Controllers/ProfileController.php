<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Requests\ProfilePictureUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;


class ProfileController extends Controller
{
    public function baratok($username)
    {
        $currentUser = Auth::user(); // Az aktuális felhasználó lekérése
        $user = User::where('username', $username)->firstOrFail();
        $baratok = $user->baratok;
        return view('baratok', compact('user', 'baratok', 'currentUser'));
    }
public function jeloles(Request $request, $barat_id)
{
    $user = $request->user();
    $barat = User::findOrFail($barat_id);
    
    // Ellenőrizzük, hogy a felhasználó még nem jelölte-e már barátnak
    if ($user->baratok->contains($barat)) {
        return redirect()->back()->with('error', 'Ezt a felhasználót már jelölted barátnak!');
    }

    // Jelöljük barátnak a felhasználót
    $user->baratok()->attach($barat);

    return redirect()->back()->with('success', 'Sikeresen jelölted barátnak ' . $barat->name . '-t!');
}
 
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }
    public function vedelem(Request $request): View
    {
        return view('profile.vedelem', [
            'user' => $request->user(),
        ]);
    }

    public function show($username)
    {
        $user = User::where('username', $username)->firstOrFail();
        return view('profil', ['user' => $user]);
    }
 
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();
    
        $user->username = $request->username;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->bemutatkozas = $request->bemutatkozas;
        $user->neme = $request->neme;
        $user->lakhely = $request->lakhely;
        $user->szulev = $request->szulev;
    

    
        $user->save();
    
        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }
    public function profilkep(ProfilePictureUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();
    
        if ($request->hasFile('profilkep')) {
            $avatarName = $request->file('profilkep')->hashName();
            $request->file('profilkep')->move(public_path('user'), $avatarName);
            $user->profilkep = $avatarName;
        }
        if ($request->hasFile('boritokep')) {
            $coverName = $request->file('boritokep')->hashName();
            $request->file('boritokep')->move(public_path('user'), $coverName);
            $user->boritokep = $coverName;
        }
    
        $user->save();
    
        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }
  
 
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
    


        public function showAllUsers()
    {
        $users = User::all(); // Lekéred az összes felhasználót

        return view('profilok')->with('users', $users);
    }

    public function profile()
    {
        $users = User::all(); // Lekéred az összes felhasználót

        return view('profilok');
    }

   }
    
    



