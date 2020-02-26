<?php

namespace App\Http\Controllers;

class PostsController
{
    public function show($arg1)
    {
        return view('posts', [
            "post" => $arg1,
        ]);
        // return "<h1>Controller is working First arg $arg1!</h1>";
    }
}
