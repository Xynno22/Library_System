<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loan extends Model
{
    use HasFactory;
    protected $primarykey = 'loan_id';

    public function books()
    {
        return $this->belongsToMany(book::class);
    }

    public function member()
    {
        return $this->belongsTo(member::class);
    }
}
