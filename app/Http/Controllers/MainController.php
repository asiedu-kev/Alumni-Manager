<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
   
    // public function displaySingle()
    // {
        
    //     return view('user.display',['users'=>$user]);
    // }
    public $fields = ['1' => ['Genie Logiciel', 'Securite Informatique','Internet et Multimedia'],
    '2' => ['PSA','GTA','GE'], '3' => ['STPV','STPA','AGRN','NSTA','GRPA'],'4' => ['ERSE']];
    public $selected_list_fields = [];
    public $interests = ['Nutrition (technologie alimentaire, diététique, restauration)',
    'Agriculture (production animale, santé animale, production végétale)','Numérique (développement, réseaux, multimédia)',
    'Ressources naturelles (eau, forêt, aménagement)','Infrastructures (construction, énergies, environnement)'
    ];  
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
        ->where('users.id',$_POST['id'])
        ->get();
        // $userInfo=UserInfo::where('user_id',$_POST['id'])->get();
        // $merge = $user + $userInfo;
        $user = json_encode($user);

        return $user;
    }
   

   
    
}
