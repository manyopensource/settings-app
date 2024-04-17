<?php

namespace App\Http\Controllers;

use App\Interfaces\ConfirmationCodeMethodInterface;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function __construct(protected ConfirmationCodeMethodInterface $confirmationCode)
    {
        $this->confirmationCode = app(
            PaymentGatewayInterface::class)
                ->get(auth()->user()->confirmation_method
        );
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    public function confirm(string $id)
    {
        $this->confirmationCode->send();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // save the changed data if the confirmation was successful

        return Redirect::route('settings.edit')->with('status', 'settings-updated');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
