<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fixeddeposit extends Model
{
    use HasFactory;
    protected $table = 'fixed_deposit';
    public function fixed_deposit_entries()
    {
        return $this->hasMany(FixedDepositEntry::class, 'fixed_deposit_id', "id");
    }
}
