<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class ScoutsController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $roles = User::where('email', $user->email)->first()->getRoleNames();

        if (User::where('email', $user->email)->first()->hasRole('User')) {
            return Redirect::route('dashboard');
        }

        return Inertia::render('Scouts/Scouts', [
            'roles' => $roles
        ]);
    }
}
