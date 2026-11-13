<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $fillable = [
        'name',
        'email',
        'phone',
        'dob',
        'address_1',
        'address_2',
        'country_code',
        'country',
        'state_code',
        'state',
        'city',
        'pincode',
        'gst_no',
        'pan_no',
        'is_active'
    ];
    
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updator()
    {
        return $this->belongTo(User::class, 'updated_by');
    }
}
