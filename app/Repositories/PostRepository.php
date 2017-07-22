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
        // if($request->hasFile('image')) 
        // {
        //     $destinationPath = public_path('storage/uploads/artworks/');
        //     $image = $request->file('image');
        //     $filename = time() . '.' . $image->getClientOriginalExtension();
        //     $img = Image::make($image)->resize(400, 400, function ($constraint) {
        //         $constraint->aspectRatio();
        //         $constraint->upsize();
        //     });
        //     //Must separate fit and save method, both don't work on same line
        //     $image->move($destinationPath, $filename);
        //     //idem
        //     $img->save($destinationPath.'/'.$filename);
            
        //     $this->post = Auth::this->post();
        //     $this->post->image = $filename;
        //     $this->post->save();
        // }
    }
 
    public function destroy(Post $post)
    {
        $post->tags()->detach();
        $post->delete();
    }
}