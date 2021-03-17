<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dress extends Model
{
    protected $fillable = ['nome','marca','taglia','prezzo','descrizione'];
}
