<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use App\Period;
use DB;
use Exception;
use App\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{

	public function create()
	{
		$periods = Period::get();
		$morningCount = Period::where('name', 'morning')->count();
		$eveningCount = Period::where('name', 'evening')->count();
		$maxPlaces = Period::MAX;

		return view('reservation', compact('periods', 'morningCount', 'eveningCount', 'maxPlaces'));
	}

    public function store(ReservationRequest $request)
    {
    	$request->validate([
    		'period' => 'required|in:morning,evening',
    	]);

    	if (Reservation::where('name', $request->period)->count() >= Period::MAX) {
    		return new Exception('Reservations has closed');
    	}

    	$reservation = Reservation::create($request->validated());

    	$reservation->periods()->create([
    		'name' => $request->period,
    	]);

    	return back()->with('success', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.');
    }
}
