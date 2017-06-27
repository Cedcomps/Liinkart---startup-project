<?php 
 
namespace App\Repositories;
 
use Illuminate\Http\UploadedFile;
 
class SignatureRepository implements SignatureRepositoryInterface
{
    public function save(UploadedFile $image)
    {
        $image->store(config('images.path'), 'public');
    }
}