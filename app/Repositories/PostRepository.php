<?php
 
namespace App\Repositories;
 
use App\Post;
 
class PostRepository
{
    protected $post;
 
    public function __construct(Post $post)
    {
        $this->post = $post;
    }
 
    protected function queryWithUserAndTags()
    {
        return $this->post->with('user', 'tags')->latest();
    }
 
    public function getWithUserAndTagsPaginate($n)
    {
        return $this->queryWithUserAndTags()->paginate($n);
    }
 
    public function getWithUserAndTagsForTagPaginate($tag, $n)
    {
        return $this->queryWithUserAndTags()
            ->whereHas('tags', function($query) use ($tag) {
                $query->where('tags.tag_url', $tag);
            })->paginate($n);
    }

    public function store($inputs)
    {
        return $this->post->create($inputs);
        
    }
 
    public function destroy(Post $post)
    {
        $post->tags()->detach();
        $post->delete();
    }
}