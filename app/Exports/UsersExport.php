<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithHeadings
{
	use Exportable;
	private $users;
	private $data = [];
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
    	$this->relation()->dataParsing();

        return collect($this->data);
    }
    public function headings(): array
    {
        return [
            'Name',
            'Email',
            'Phone',
            'Company Name',
            'Country Name',
            'Address',
            'City',
            'Zip Code',
            'Sort Story',
            'Description',
            'language'
        ];
    }
    private function relation()
    {
        $this->users = User::with('userDetail','userBillingAaddresses')
        ->whereType(0)
        ->get();
        return $this;
    }
    private function dataParsing()
    {
    	foreach ($this->users as $user) {
    		$this->data[] = [
    			'name' => $user->name,
    			'email' => $user->email,
    			'mobile_number' => $user->mobile_number,
    			'company_name' => $user->userBillingAaddresses->company_name ?? '',
    			'country_id' => $user->userBillingAaddresses->country_id ?? '',
    			'address' => $user->userBillingAaddresses->address ?? '',
    			'city_id' => $user->userBillingAaddresses->city_id ?? '',
    			'zip_code' => $user->userBillingAaddresses->zip_code ?? '',
    			'sort_story' => $user->userDetail->sort_story ?? '',
    			'description' => $user->userDetail->description ?? ''
    		];
    	}
    	return $this;
    }

}
