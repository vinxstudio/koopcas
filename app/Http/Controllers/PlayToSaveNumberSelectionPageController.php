<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\PlayToSave6Export;
use Maatwebsite\Excel\Facades\Excel;

class PlayToSaveNumberSelectionPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('play-to-save.playtosave-number-selection.playtosave-number-selection');
    }

    public function downloadExcel6()
    {   
        return Excel::download(new PlayToSave6Export, 'playtosavecombo6.xlsx');
    }
}
