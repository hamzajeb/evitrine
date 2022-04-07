<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['titre', 'prix', 'image', 'quantite','id_user'];
}
