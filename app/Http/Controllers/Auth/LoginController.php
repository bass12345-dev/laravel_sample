<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\UserModel;

class LoginController extends Controller
{
    public function verify(Request $request) {

    //   $data = array(

    //     'username' => $request->username,
    //     'password' => $request->password
    //   );

    //   return response()->json($data);

    $queries = UserModel::where('username', '=', $request->username)->count();
    return response()->json($queries);

    }
}
