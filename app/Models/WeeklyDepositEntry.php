<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeeklyDepositEntry extends Model
{
    use HasFactory;

    protected $table = 'weekly_deposit_entries';
}
