<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;

use App\Profile;

class ProfileController extends Controller
{
     public function index(Request $request)
    {
        //プロフィールのデータを取得して、氏名で降順並び替え
        $posts = Profile::all()->sortByDesc('name');
        
        // profile/index.blade.php ファイルを渡している
        // また View テンプレートに posts、という変数を渡している
        return view('profile.index', ['posts' => $posts]);
    }
}
