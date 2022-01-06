<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Applies extends Model
{
    use HasFactory;
    protected $table = 'applies';
    protected $primaryKey = ['user_id', 'id'];
    public $incrementing = false;
    protected $fillable = [
        'user_id',
        'posts_id'
    ];

    
}
