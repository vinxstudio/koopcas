<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class PlayToSaveSerialStabs extends Model
{
    /** SERIAL STABS FUNCTIONS */
    public static function getTicketInforByTicket($serialNumber)
    {
        return DB::table('p2sserialstabs as pts')
                    ->join('branches as b', function($join){
                        $join->on('pts.BranchAllocation', '=', 'b.BranchesID');
                    })
                    ->where('pts.SerialNumber', '=', $serialNumber)
                    ->get();
    }

    public static function getSerialNumbersByBranch($branch)
    {
        return DB::table('p2sserialstabs as pts')
                    ->join('branches as b', function($join){
                        $join->on('pts.BranchAllocation', '=', 'b.BranchesID');
                    })
                    ->where('pts.BranchAllocation', '=', $branch)
                    ->orderBy('pts.SerialNumber','asc')
                    ->paginate(10);
    }

    public static function getSerialNumberByIds($ptsSsId, $branchAllocation, $serialNumber)
    {
        return DB::table('p2sserialstabs as pts')
                    ->join('branches as b', function($join){
                        $join->on('pts.BranchAllocation', '=', 'b.BranchesID');
                    })
                    ->where('pts.PTSSSID', '=', $ptsSsId)
                    ->where('pts.BranchAllocation', '=', $branchAllocation)
                    ->where('pts.SerialNumber', '=', $serialNumber)
                    ->get();
    }

    public static function insertSerialNumbers($branchAllocation, $serialNumberStart, $serialNumberEnd, $quantity, $dateAdded, $ticketSolicitor, $status, $dateTimeAdded, $serialNumber)
    {
        return DB::table('p2sserialstabs')->insert(
            [
                'BranchAllocation' => $branchAllocation,
                'SerialNumber' => $serialNumber,
                'SerialNumberStart' => $serialNumberStart,
                'serialNumberEnd' => $serialNumberEnd,
                'Quantity' => $quantity,
                'DateAdded' => $dateAdded,
                'TicketSolicitor' => $ticketSolicitor,
                'Status' => $status,
                'DateTimeAdded' => $dateTimeAdded,
            ]
        );
    }

    public static function updateSerialNumber($ptsSsId, $branchAllocation, $serialNumberStart, $serialNumberEnd, $quantity, $dateAdded, $ticketSolicitor, $status, $dateTimeAdded, $serialNumber)
    {
        return DB::table('p2sserialstabs')->where('PTSSSID', $ptsSsId)->where('BranchAllocation', $branchAllocation)
                    ->where('SerialNumber', $serialNumber)->update(
                        [
                            'SerialNumberStart' => $serialNumberStart,
                            'serialNumberEnd' => $serialNumberEnd,
                            'Quantity' => $quantity,
                            'DateAdded' => $dateAdded,
                            'TicketSolicitor' => $ticketSolicitor,
                            'Status' => $status,
                            'DateTimeAdded' => $dateTimeAdded,
                        ]
        );
    }

    /** ALL SERIAL STABS FUNCTIONS */
    public static function insertSerialNumbersAll($branchAllocation, $serialNumberStart, $serialNumberEnd, $quantity, $dateAdded, $dateTimeAdded, $serialNumber)
    {
        return DB::table('p2sserialstabsall')->insert(
            [
                'BranchAllocation' => $branchAllocation,
                'SerialNumber' => $serialNumber,
                'SerialNumberStart' => $serialNumberStart,
                'serialNumberEnd' => $serialNumberEnd,
                'Quantity' => $quantity,
                'DateAdded' => $dateAdded,
                'DateTimeAdded' => $dateTimeAdded,
            ]
        );
    } 


    /** BRANCHES FUNCTIONS */
    public static function getBranches()
    {
        return DB::table('branches')->get();
    }

    // public static function insertBranches($ptsBrCode, $ptsBranchName, $ptsBranchAddress, $ptsBranchManager, $ptsBranchContact, $ptsBranchEmail, $ptsBranchDateAdded)
    // {
    //     return DB::table('p2sbranches')->insert(
    //         [
    //             'PTSBR_CODE' => $ptsBrCode,
    //             'PTSBranchName' => $ptsBranchName,
    //             'PTSBranchAddress' => $ptsBranchAddress,
    //             'PTSBranchManager' => $ptsBranchManager,
    //             'PTSBranchContact' => $ptsBranchContact,
    //             'PTSBranchEmail' => $ptsBranchEmail,
    //             'PTSBranchDateAdded' => $ptsBranchDateAdded
    //         ]
    //     );
    // }
}
