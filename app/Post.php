<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
use Gstt\Achievements\Achiever;
 
class Post extends Model
{
    use Achiever;

    protected $fillable = [
        'titre', 'contenu', 'user_id', 'year', 'largeur', 'longueur', 'hauteur', 'revision', 'category_id'
    ];
 
    public function user() 
    {
        return $this->belongsTo(\App\User::class);
    }
 
    public function tags()
    {
        return $this->belongsToMany(\App\Tag::class);
    } 

    public function category()
    {
        return $this->belongsTo(\App\Category::class);
    } 

    public function posts_photos()
    {
        return $this->hasMany(\App\PostsPhoto::class);
    } 
    
}