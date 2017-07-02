<?php 
 
namespace App\Repositories;
 
use Illuminate\Http\UploadedFile;
 
interface AvatarRepositoryInterface
{
    public function save(UploadedFile $image);
}