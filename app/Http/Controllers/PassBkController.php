<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PassBk;
use App\Http\Resources\PassBkResource;

class PassBkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($passBkClientId)
    {
        //return $passBkClientId;
        $passBks = Passbk::getAllPassBkById($passBkClientId);
        return PassBkResource::collection($passBks);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($passBkBrCode, $passBkClientId, $passBkSlcCode, $passBkSltCode, $passBkRefNo)
    {
        $passbook = PassBk::getPassBkById($passBkBrCode, $passBkClientId, $passBkSlcCode, $passBkSltCode, $passBkRefNo);
        return PassBkResource::collection($passbook);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
