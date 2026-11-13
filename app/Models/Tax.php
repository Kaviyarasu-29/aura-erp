<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
    //
    protected $fillable = [
        'name',
        'rate',
        'is_active'
    ];

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updator()
    {
        return $this->belongTo(User::class, 'updated_by');
    }
}
