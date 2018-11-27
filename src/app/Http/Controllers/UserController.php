<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show(Request $request)
    {
        $name = "テスト";
        // リクエスト取得
        if (isset($request)) {
            $id = $request->id;
        } else {
            $id = 2;
        }

        $user = DB::select('select * from members_list WHERE id = ?', [$id]);
        print_r($user);
        $name = $user[0]->Name;
        
/*
        if ($id == "1") {
            $name = 'Yoshikazu';
        } else { 
            $name = 'TANAKA';
        }
*/
        return view('detail', ['name' => $name]);
    }
}
