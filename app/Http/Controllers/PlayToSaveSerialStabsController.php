<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PlayToSaveSerialStabs;
use App\Http\Resources\PlayToSaveSerialStabsResource;
use App\Http\Resources\PlayToSaveBranchesResource;
use App\Http\Resources\PlayToSaveTicketsResource;

class PlayToSaveSerialStabsController extends Controller
{

    public function ticketSearch($serialNumber)
    {
        $serialNumber = PlayToSaveSerialStabs::getTicketInforByTicket($serialNumber);
        return PlayToSaveSerialStabsResource::collection($serialNumber);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($branch)
    {
        $serialnumbers = PlayToSaveSerialStabs::getSerialNumbersByBranch($branch);
        return PlayToSaveSerialStabsResource::collection($serialnumbers);
    }

    /**
     * Display a resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get($ptsSsId, $branchAllocation, $serialNumber)
    {
        $serialnumbers = PlayToSaveSerialStabs::getSerialNumberByIds($ptsSsId, $branchAllocation, $serialNumber);
        return PlayToSaveSerialStabsResource::collection($serialnumbers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $serialNumber = new PlayToSaveSerialStabs;

        $serialNumber->BranchAllocation = $request->input('branchAllocation');
        $serialNumber->SerialNumberStart = $request->input('serialNumberStart');
        $serialNumber->serialNumberEnd = $request->input('serialNumberEnd');
        $serialNumber->Quantity = $request->input('quantity');
        $serialNumber->DateAdded = $request->input('dateAdded');
        $serialNumber->TicketSolicitor = $request->input('ticketSolicitor');
        $serialNumber->Status = $request->input('status');
        $serialNumber->DateTimeAdded = $request->input('dateTimeAdded');

        for($i = $serialNumber->SerialNumberStart;$i <= $serialNumber->serialNumberEnd;$i++){
            $serialNum = "00000000".$i;
            $serialNum = substr($serialNum,strlen($serialNum)-8);
            $serialNumber->SerialNumber = $serialNum;

            PlayToSaveSerialStabs::insertSerialNumbers($serialNumber->BranchAllocation, $serialNumber->SerialNumberStart, $serialNumber->serialNumberEnd, $serialNumber->Quantity,
            $serialNumber->DateAdded, $serialNumber->TicketSolicitor, $serialNumber->Status, $serialNumber->DateTimeAdded,$serialNumber->SerialNumber);
        }
   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $serialNumber = new PlayToSaveSerialStabs;

        $serialNumber->PTSSSID = $request->input('ptsSsId');
        $serialNumber->BranchAllocation = $request->input('branchAllocation');
        $serialNumber->SerialNumberStart = $request->input('serialNumberStart');
        $serialNumber->serialNumberEnd = $request->input('serialNumberEnd');
        $serialNumber->Quantity = $request->input('quantity');
        $serialNumber->DateAdded = $request->input('dateAdded');
        $serialNumber->TicketSolicitor = $request->input('ticketSolicitor');
        $serialNumber->Status = $request->input('status');
        $serialNumber->DateTimeAdded = $request->input('dateTimeAdded');
        $serialNumber->SerialNumber = $request->input('serialNumber');

        PlayToSaveSerialStabs::updateSerialNumber($serialNumber->PTSSSID, $serialNumber->BranchAllocation, $serialNumber->SerialNumberStart, $serialNumber->serialNumberEnd, $serialNumber->Quantity,
        $serialNumber->DateAdded, $serialNumber->TicketSolicitor, $serialNumber->Status, $serialNumber->DateTimeAdded,$serialNumber->SerialNumber);
    }

    /** ALL SERIAL STABS FUNCTION */
    public function insertAllStabs(Request $request)
    {
        $serialNumber = new PlayToSaveSerialStabs;

        $serialNumber->BranchAllocation = $request->input('branchAllocation');
        $serialNumber->SerialNumberStart = $request->input('serialNumberStart');
        $serialNumber->serialNumberEnd = $request->input('serialNumberEnd');
        $serialNumber->Quantity = $request->input('quantity');
        $serialNumber->DateAdded = $request->input('dateAdded');
        $serialNumber->DateTimeAdded = $request->input('dateTimeAdded');

        for($i = $serialNumber->SerialNumberStart;$i <= $serialNumber->serialNumberEnd;$i++){
            $serialNum = "00000000".$i;
            $serialNum = substr($serialNum,strlen($serialNum)-8);
            $serialNumber->SerialNumber = $serialNum;

            PlayToSaveSerialStabs::insertSerialNumbersAll($serialNumber->BranchAllocation, $serialNumber->SerialNumberStart, $serialNumber->serialNumberEnd, $serialNumber->Quantity,
            $serialNumber->DateAdded, $serialNumber->DateTimeAdded, $serialNumber->SerialNumber);
        }
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $branches = PlayToSaveSerialStabs::getBranches();
        return PlayToSaveBranchesResource::collection($branches);
    }

    
    // public function insert(Request $request)
    // {
    //     $branch = new PlayToSaveSerialStabs;

    //     $branch->PTSBR_CODE = $request->input('ptsBrCode');
    //     $branch->PTSBranchName = $request->input('ptsBranchName');
    //     $branch->PTSBranchAddress = $request->input('ptsBranchAddress');
    //     $branch->PTSBranchManager = $request->input('ptsBranchManager');
    //     $branch->PTSBranchContact = $request->input('ptsBranchContact');
    //     $branch->PTSBranchEmail = $request->input('ptsBranchEmail');
    //     $branch->PTSBranchDateAdded = $request->input('ptsBranchDateAdded');

    //     PlayToSaveSerialStabs::insertBranches($branch->PTSBR_CODE, $branch->PTSBranchName, $branch->PTSBranchAddress, $branch->PTSBranchManager,
    //     $branch->PTSBranchContact, $branch->PTSBranchEmail, $branch->PTSBranchDateAdded);
    // }
}
