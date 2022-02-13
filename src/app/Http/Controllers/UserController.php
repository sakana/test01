<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $fileDir = "/var/www/html/laravel5.0/members_list.log";
        $file = fopen($fileDir, 'r');
        $i = 0;
        // 部員
        $members = array();

        if ($file) {
            while ($line = fgets($file)) {
                $members[$i] = explode(",", $line);
                $i++;
            }
        }
        return view('index', ['members' => $members]);
    }

    public function showDetail(Request $request)
    {
        // リクエスト取得
        if (isset($request)) {
            $id = $request->id;
        } else {
            $id = 2;
        }

        $user = DB::select('select * from members_list WHERE id = ?', [$id]);
        print_r($user);
        $name = $user[0]->Name;
        
        return view('detail', ['name' => $name]);
    }
}
