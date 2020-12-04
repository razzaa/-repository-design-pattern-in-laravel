<?php
namespace App\Repositories;
interface PostRepositoryInterface{
    public function getAll();
    public function getPost($id);
}
