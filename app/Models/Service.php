<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    /** @use HasFactory<\Database\Factories\ServiceFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'serial_number',
        'id_service_type',
    ];

    public function serviceType(){
        return $this->belongsTo(Service_type::class, 'id_service_type');
    }
}
