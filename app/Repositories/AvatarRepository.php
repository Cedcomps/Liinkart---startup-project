<?php 
 
namespace App\Repositories;
 
use Illuminate\Http\UploadedFile;
 
class AvatarRepository implements AvatarRepositoryInterface
{
    public function save(UploadedFile $image)
    {
        $image->store(config('images.path'), 'public');
    }
}