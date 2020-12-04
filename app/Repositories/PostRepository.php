<?php
namespace App\Repositories;
use App\Models\Post;
class PostRepository implements PostRepositoryInterface
{

    public function getAll()
    {
      return Post::all();
    }

    public function getPost($id)
    {
        return Post::findOrFail($id);
    }
}
