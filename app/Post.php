<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Sluggable;
    
    protected $fillable = ['title', 'body', 'category'];
    
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function estimatedTime()
    {
        $mycontent = $this->body; 
        $word = str_word_count(strip_tags($mycontent));
        $m = floor($word / 150);
        // $s = floor($word % 200 / (200 / 60));
         $est = $m . ' min'; // . ($m == 1 ? '' : 's');

        return $est;
    }
}
