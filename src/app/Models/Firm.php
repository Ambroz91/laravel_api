<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Firm extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'nip',
        'address',
        'city',
        'postal'
    ];
    public function worker(){
        return $this->hasMany(Worker::class);
    }
}
