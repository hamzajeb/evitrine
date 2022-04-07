<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class espadrilleHomme extends Model
{
    use HasFactory;
    protected $fillable = ['titre', 'prix', 'description', 'category', 'image'];
}
