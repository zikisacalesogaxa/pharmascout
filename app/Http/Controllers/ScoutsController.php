<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class ScoutsController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $roles = User::where('email', $user->email)->first()->getRoleNames();

        return Inertia::render('Scouts/Scouts', [
            'roles' => $roles
        ]);
    }
}
