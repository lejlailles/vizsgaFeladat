<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Szakdoga extends Model
{
    protected $table = 'szakdoga';
    protected $primaryKey = 'id';

    protected $fillable = [

        'id',
       'szakdoga_nev',
        'github_link',
        'oldallink',
        'tagokneve',
   

    ];

    use HasFactory;
}
