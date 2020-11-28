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
    public function bank_accountable()
    {
        return $this->morphTo();
    }
}
