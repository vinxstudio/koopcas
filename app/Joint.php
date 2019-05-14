<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Joint extends Model
{
    public static function getAllJointById($clientIdJoints)
    {
        return DB::table('joints')
                   ->where('ClientIDJoints', '=', $clientIdJoints)
                   ->paginate(10);
    }

    public static function insertJointById($jointsBrCode, $clientIdJoints, $jName, $jDateTimeAdded)
    {
        return DB::table('joints')->insert(
            [
                'JointsBR_CODE' => $jointsBrCode,
                'ClientIDJoints' => $clientIdJoints,
                'jName' => $jName,
                'JDateTimeAdded' => $jDateTimeAdded
            ]
        );
    }

    public static function deleteJointsById($clientId)
    {
        return DB::table('joints')->where('ClientIDJoints', '=', $clientId)->delete();
    }
}
