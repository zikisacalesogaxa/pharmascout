<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use UmiMood\Dear\Dear;

class ScoutsController extends Controller
{
	public function index()
	{
		$user = Auth::user();
		$roles = User::where('email', $user->email)->first()->getRoleNames();

		if (User::where('email', $user->email)->first()->hasRole('User')) {
			return Redirect::route('dashboard');
		}
		
		$dear = Dear::create("7379e455-bd46-412b-8583-bbd7f179c503", "d8b7284a-6708-975f-9830-3c4fefba6221");

		return Inertia::render('Scouts/Scouts', [ 'roles' => $roles ]);
	}
}
