<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    use HasFactory;
    protected $table = 'carousels';
    protected $fillable = [
        'id_ad',
        'content',
        'see_more',
        'media',
        'post_id'
    ];
    public function Post(){
        return $this->belongsTo(Post::class, 'post_id');
    }
}
