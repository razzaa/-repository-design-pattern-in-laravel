<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PostRepositoryInterface;
class PostController extends Controller
{
    private $repository;

    public function __construct(PostRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function index(){
        $data=$this->repository->getAll();
        return view('posts.index')->with('data',$data);
    }

    public function show($id){
        $data=$this->repository->getPost($id);
        return view('posts.show')->with('data',$data);
    }
}

