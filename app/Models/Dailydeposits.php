<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dailydeposits extends Model
{
    use HasFactory;
    protected $table = 'daily_deposit';
    public function daily_deposit_entries()
    {
        return $this->hasMany(DailyDepositEntry::class, 'daily_deposit_id', "id");
    }
}
