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
		$morningCount = Period::availableOn('morning');
		$eveningCount = Period::availableOn('evening');

		return view('reservation', compact('periods', 'morningCount', 'eveningCount'));
	}

    public function store(ReservationRequest $request)
    {
    	$request->validate([
    		'period' => 'required|in:morning,evening',
    	]);

    	if (! Period::availableOn($request->period) ) {
    		return new Exception('Reservations has closed');
    	}

    	$reservation = Reservation::create($request->validated());

    	$reservation->periods()->create([
    		'name' => $request->period,
    	]);

    	return back()->with('success', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.');
    }
}
