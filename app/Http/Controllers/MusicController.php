<?php

namespace App\Http\Controllers;

class MusicController extends Controller
{
    //
    public function show($usernum)
    {
        $row = \DB::table('tracks')->where('user_id', $usernum)->first();
        // $rows = \DB::table('tracks')->where('user_id', $usernum)->get();
        // var_dump($row);
        // die("For now");

        // return "Returning track $tracknum !";
        return view('music', [
            "track" => $row,
        ]);
    }
}
