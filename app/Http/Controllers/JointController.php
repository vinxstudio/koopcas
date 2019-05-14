<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Joint;
use App\Http\Resources\JointResource;

class JointController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($clientIdJoints)
    {
       $joints = Joint::getAllJointById($clientIdJoints);
       return JointResource::collection($joints); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $joint = new Joint;
        $joint->JointsBR_CODE = 18;
        $joint->ClientIDJoints = $request->input('clientIdJoints');
        $joint->JName = $request->input('jName');
        $joint->JDateTimeAdded = $request->input('jDateTimeAdded');

        Joint::insertJointById($joint->JointsBR_CODE, $joint->ClientIDJoints, $joint->JName, $joint->JDateTimeAdded);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        Joint::deleteJointsById($id);
    }
}
