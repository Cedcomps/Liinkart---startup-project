<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
use Gstt\Achievements\Achiever;
 
class Post extends Model
{
    use Achiever;

    protected $fillable = [
        'titre','contenu','user_id', 'technique', 'theme', 'style'
    ];
 
    public function user() 
    {
        return $this->belongsTo(\App\User::class);
    }
 
    public function tags()
    {
        return $this->belongsToMany(\App\Tag::class);
    } 

}