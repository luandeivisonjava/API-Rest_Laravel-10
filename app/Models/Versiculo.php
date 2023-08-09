<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Versiculo extends Model
{
    use HasFactory;
    protected $fillable = ['chapter', 'verse', 'text', 'livro_id'];
}
