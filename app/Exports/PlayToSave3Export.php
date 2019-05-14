<?php

namespace App\Exports;

use App\PlayToSave;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PlayToSave3Export implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PlayToSave::getAllThreeDigitByDate(date('Y-m-d'));
    }

    public function headings(): array
    {
        return [
            'Serial Number',
            'Client ID',
            'Document No.',
            'Date',
            'Combo 3',
            'Date Time'
        ];
    }
}
