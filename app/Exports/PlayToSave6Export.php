<?php

namespace App\Exports;

use App\PlayToSave;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PlayToSave6Export implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PlayToSave::getAllSixDigitByDate(date('Y-m-d'));
    }

    public function headings(): array
    {
        return [
            'Serial Number',
            'Client ID',
            'Document No.',
            'Date',
            'Combo 6',
            'Date Time'
        ];
    }
}
