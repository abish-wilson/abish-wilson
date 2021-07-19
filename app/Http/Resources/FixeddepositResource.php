<?php

namespace App\Http\Resources;

use App\Models\Fixeddeposit;
use App\Models\FixedDepositEntry;
use Illuminate\Http\Resources\Json\JsonResource;

class FixeddepositResource extends JsonResource
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
        $res['entries'] = $this->fixed_deposit_entries;
        return $res;
    }
}
