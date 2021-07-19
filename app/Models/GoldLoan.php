<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoldLoan extends Model
{
    use HasFactory;
    protected $table = 'golditems_master';
    public function gold_loan_details()
    {
        return $this->hasMany(GoldLoanDetails::class, 'gold_loan_no', "gold_loan_no");
    }
}
