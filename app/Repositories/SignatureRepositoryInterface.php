<?php 
 
namespace App\Repositories;
 
use Illuminate\Http\UploadedFile;
 
interface SignatureRepositoryInterface
{
    public function save(UploadedFile $image);
}