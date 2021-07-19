<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeeklyDeposit extends Model
{
    use HasFactory;
    protected $table = 'weekly_deposit';
    public function weekly_deposit_entries()
    {
        return $this->hasMany(WeeklyDepositEntry::class, 'weekly_deposit_id', "id");
    }
}
