<?php

namespace App\Services\Impl;

use App\Services\BlogService;

class BlogServiceImpl implements BlogService
{
    public function getAll()
    {
        $blogs = Blog::all();

        return $blogs;
    }
}
