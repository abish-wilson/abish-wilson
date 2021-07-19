<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MISLoanResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $res = parent::toArray($request);
        $res['entries'] = $this->mis_loan_entries;
        return $res;
    }
}
