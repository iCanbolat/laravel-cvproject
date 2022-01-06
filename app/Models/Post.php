<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Applies;
use Illuminate\Support\Facades\App;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $fillable = [
        'user_id',
        'company_name',
        'job_title',
        'description',
        'image',
        'location',
        'sector',
    ];
    public function people()
    {
       return $this->belongsToMany(Info::class , 'applies', 'user_id' , 'posts_id');
    }
}