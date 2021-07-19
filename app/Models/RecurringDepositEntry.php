<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecurringDepositEntry extends Model
{
    use HasFactory;
    protected $table = 'recurring_deposit_entries';
    public function recurring_deposit()
    {
        return $this->belongsTo(Recurringdeposit::class);
    }
}
