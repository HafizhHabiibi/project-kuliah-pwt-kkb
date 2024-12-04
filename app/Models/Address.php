<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'first_name',
        'last_name',
        'phone',
        'alamat',
        'kabkota',
        'provinsi',
        'kode_pos'
    ];

    public function order() {
        return $this->belongsTo(Order::class);
    }

    public function gerFullNameAttribute() {
        return "{$this->first_name} {$this->last_name}"; 
    }

}
