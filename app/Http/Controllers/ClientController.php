<?php

namespace App\Http\Controllers;

use App\Client;
use App\Http\Requests\ClientRequest;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function store(ClientRequest $request)
    {
    	Client::create($request->validated());

    	return back()->with('success', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.');
    }
}
