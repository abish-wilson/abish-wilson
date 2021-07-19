<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     * 
     * 
     */

    protected $table = "members";

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function dailydeposit()
    {
        return $this->hasMany(Dailydeposits::class, 'member_id', "member_id");
    }
    public function savingaccount()
    {
        return $this->hasOne(SavingAccount::class, 'member', "id");
    }
    public function recurringdeposit()
    {
        return $this->hasMany(Recurringdeposit::class, 'member_id', "member_id");
    }
    public function fixeddeposit()
    {
        return $this->hasMany(Fixeddeposit::class, 'member_id', "member_id");
    }
    public function weeklydeposit()
    {
        return $this->hasMany(WeeklyDeposit::class, 'member_id', "member_id");
    }
    public function loan()
    {
        return $this->hasMany(Loan::class, 'member_id', "member_id");
    }

    public function mis_loan()
    {
        return $this->hasMany(MIS::class, 'member_id', "member_id");
    }
    public function gold_loan()
    {
        return $this->hasMany(GoldLoan::class, 'member', "member_id");
    }
}
