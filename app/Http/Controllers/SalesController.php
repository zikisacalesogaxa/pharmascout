<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Scout\Dear\Dear;

class SalesController extends Controller
{
    public function index()
    {
        $user = Auth::user();

		if (User::where('email', $user->email)->first()->hasRole('User')) {
			return Redirect::route('dashboard');
		}
		
		$dear = Dear::create("7379e455-bd46-412b-8583-bbd7f179c503", "d8b7284a-6708-975f-9830-3c4fefba6221");

		$products = $dear->product()->get([]);
		$accounts = $dear->account()->get([]);
		$me = $dear->me()->get([]);

		return Inertia::render('Sales/Sales');
    }
}
