<?php

namespace App\Http\Resources;

use App\Models\RecurringDepositEntry;
use Illuminate\Http\Resources\Json\JsonResource;

class RecurringDepositResource extends JsonResource
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
        $res['entries'] = $this->recurring_deposit_entries;
        return $res;
    }
}
