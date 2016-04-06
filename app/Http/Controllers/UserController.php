<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    /**
     * 显示给定用户的个人数据。
     * @return Json
     */
    public function showProfile(Request $request)
    {
        if ($request->isMethod('post')) {

            $nums_array = array(
                'zimu'    => '10',
                '万翔翔'   => '15',
                'shaohui' => '20',å
            );

            $name = $request->input('name');

            $num = $nums_array[$name] ? : '5';

            return response()->json(['num' => $num]);
        }
    }
}