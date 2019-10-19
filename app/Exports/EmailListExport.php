<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\EmailList;

class EmailListExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        foreach (EmailList::all() as $email) {
            $emails[] = ['Email' => $email->email];       
        }
        return collect($emails);
    }
    public function headings(): array
    {
        return [
            'Email'
        ];
    }
}
