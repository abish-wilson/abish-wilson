<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recurringdeposit extends Model
{
    use HasFactory;
    protected $table = 'recurring_deposit';
    public function recurring_deposit_entries()
    {
        return $this->hasMany(RecurringDepositEntry::class, 'reccuring_deposit_id', "id");
    }
}
