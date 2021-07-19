<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SavingAccount extends Model
{
    use HasFactory;
    protected $table = 'savings_account';
    public function transaction(){
        return $this->hasMany(Transaction::class,'account_no',"account_no");
    }

}
