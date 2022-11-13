<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\BlogService;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected BlogService;

    public function __construct(BlogService $blogService)
    {
        $this->blogService = $blogService;
    }

    public function index(){
        $blogs = $this->blogService->getAll();

        return response()->json([
            'status' => true,
            'blogs' => $blogs
        ]);
    }
}
