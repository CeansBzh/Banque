<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'balance'
    ];

    /**
     * Get the owning bank_accountable model.
     */
    public function bankAccountable()
    {
        return $this->morphTo();
    }

    /**
     * Get the transaction history for the bank account.
     */
    public function transactionHistories()
    {
        return $this->hasMany('App\Models\TransactionHistory');
    }

    /**
     * Get the balance history for the bank account.
     */
    public function balanceHistories()
    {
        return $this->hasMany('App\Models\BalanceHistory');
    }
}
