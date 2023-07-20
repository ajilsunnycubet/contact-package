<?php

namespace Ajilsunnycubet\Contact\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    public $fillable=[
        'firstname','lastname','country','subject'
    ];
}
