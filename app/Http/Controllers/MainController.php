<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
   
    // public function displaySingle()
    // {
        
    //     return view('user.display',['users'=>$user]);
    // }
    public function destroy($id)
    {
        //dd($user);
        // $user->delete();
       
        // return redirect()->route('admin.dashboard')->with("success","L'utilisateur a été bien supprimé");

        $user=User::find($id);
        $user->delete();
        return redirect()->route('admin.dashboard')->with("success","L'utilisateur a été bien supprimé");
    }

    public function moreInfo()
    {
        \Log::info("moreInfo()");
        //$user = User::join('userInfos', 'userInfos.user_id', '=', 'users.id')->where('user_id',$_POST['id'])->get();
        $user = DB::table('users')
        ->join('user_infos', 'users.id', '=', 'user_infos.user_id')
        ->where('users.id',$_POST['id'])
        ->get();
        // $userInfo=UserInfo::where('user_id',$_POST['id'])->get();
        // $merge = $user + $userInfo;
        $user = json_encode($user);

        return $user;
    }
    
}
