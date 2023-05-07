<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;

    protected $fillable = [
        'firm_id',
        'firstName',
        'lastName',
        'email',
        'phone'
    ];
    public function firm(){
        return $this->belongsTo(Firm::class);
    }
}
