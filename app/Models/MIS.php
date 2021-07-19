<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MIS extends Model
{
    use HasFactory;
    protected $table = 'ims_loan';
    public function mis_loan_entries()
    {
        return $this->hasMany(MISLoanEntry::class, 'ims_loan_id', "id");
    }
}
