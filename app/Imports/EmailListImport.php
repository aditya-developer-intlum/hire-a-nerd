<?php

namespace App\Imports;

use App\EmailList;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Auth; 

class EmailListImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if(!empty($row[0]) && filter_var($row[0], FILTER_VALIDATE_EMAIL)){
            return new EmailList([
                'email' => $row[0],
                'user_id' => Auth::id(),
            ]);
        }
        
    }
}
