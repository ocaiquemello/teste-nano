<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'value',
        'type',
        'observation',
        'employee_id',
        'admin_id',
    ];

    public function setValueAttribute($value)
    {
        $this->attributes['value'] = str_replace(['.',','], ['','.'], $value);
    }

    public function employee()
    {
        return $this->hasOne(Employee::class, 'id', 'employee_id');
    }
}
