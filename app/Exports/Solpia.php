<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use App\Exports\HMM\InterviewSheet;

class Solpia implements WithMultipleSheets
{
    use Exportable;
    
    public function __construct($data){
        $this->data = $data;
    }

    /**
     * @return array
     */
    public function sheets(): array
    {
        $sheets = [];

        array_push($sheets, new FormPage1($this->data));
        array_push($sheets, new FormPage2($this->data));

        return $sheets;
    }
}
