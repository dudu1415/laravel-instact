<?php

namespace App\Services;

use App\Models\Post;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;

class  PostService
{
    public function store(array $input,UploadedFile $photo){

        DB::beginTransaction();
        try {
            $post = Post::create($input);
        } catch (\Throwable $th) {

        }

    }

}
