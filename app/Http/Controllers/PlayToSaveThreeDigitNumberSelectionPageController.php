<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\PlayToSave3Export;
use Maatwebsite\Excel\Facades\Excel;

class PlayToSaveThreeDigitNumberSelectionPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("play-to-save.playtosave-three-digit-number-selection.playtosave-three-digit-number-selection");
    }

    public function downloadExcel()
    {
        return Excel::download(new PlayToSave3Export, 'playtosavecombo3.xlsx');
    }
}
