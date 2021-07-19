<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;
    protected $table = 'loan';
    public function loan_entries()
    {
        return $this->hasMany(LoanEntry::class, 'loan_id', "id");
    }
}
