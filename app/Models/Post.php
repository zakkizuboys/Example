<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'post';
    protected $primarykey = 'id';
    protected $fillable = [
        'nama',
        'alamat',
        'umur',
        'category_id'
    ];
}
