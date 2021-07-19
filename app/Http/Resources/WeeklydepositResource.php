<?php

namespace App\Http\Resources;

use App\Models\WeeklyDepositEntry;
use Illuminate\Http\Resources\Json\JsonResource;

class WeeklydepositResource extends JsonResource
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
        $res['entries'] = $this->weekly_deposit_entries;
        return $res;
    }
}
