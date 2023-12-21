<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loan extends Model
{
    use HasFactory;

    protected $fillable = [
        'booktitle',
        'member',
        'loan_date' ,
        'due_date', 
        'return_date',
        'status'
    ];
    
    public function books()
    {
        return $this->belongsTo(book::class);
    }

    public function member()
    {
        return $this->belongsTo(member::class);
    }

    public function loanstatus()
    {
        return $this->belongsToMany(status::class);
    }
}
