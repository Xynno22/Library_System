<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nim',
        'email',
        'phonenumber',
        'address',
        'major'
    ];


    public function loans()
    {
        return $this->hasMany(Loan::class);
    }

    public function majors(){
        return $this->belongsto(Major::class);
    }
}
