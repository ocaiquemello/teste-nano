<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name',
        'login',
        'password',
        'current_balance',
        'admin_id'
    ];

    public function setCurrentBalanceAttribute($value)
    {
        $this->attributes['current_balance'] = str_replace(['.',','], ['','.'], $value);
    }

    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }
}
