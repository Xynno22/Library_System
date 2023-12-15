<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;

    public function categories()
    {
        return $this->belongsToMany(category::class);
    }

    public function loans()
    {
        return $this->belongsToMany(loan::class);
    }
}
