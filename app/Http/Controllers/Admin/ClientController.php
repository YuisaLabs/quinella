<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Passport\Http\Controllers\ClientController as PassportClientController;

class ClientController extends PassportClientController
{
    public function index(Request $request)
    {
        return view('client', [
            'clients' => $request->user()->clients
        ]);
    }

    public function store(Request $request)
    {
        $response = parent::store($request);

        return redirect()->route('dashboard.clients');
    }

    public function update(Request $request, $clientId)
    {
        $response = parent::update($request, $clientId);

        return redirect()->route('dashboard.clients');
    }

    public function destroy(Request $request, $clientId)
    {
        $response = parent::destroy($request, $clientId);

        return redirect()->route('dashboard.clients');
    }
}
