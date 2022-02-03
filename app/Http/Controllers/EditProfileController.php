<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Client\Request;

class EditProfileController extends Controller
{
    public function edit($id,Request $request)
    {
        DB::table('users')->where('users.id',$id)->update([
            
            'first_name'=>$request->input('first_name'),
            'last_name'=>$request->input('last_name'),
            'email'=>$request->input('email'),
            'password'=>$request->input('password'),
            'birthday'=>$request->input('birthday'),
            'phone'=>$request->input('phone'),
            // 'curriculum_vitae'=>input(),
            'school'=>$request->input('school'),
            'study_field'=>$request->input('study_field'),
            'interest'=>$request->input('interest'),
            'entrepreuneuship_lover'=>$request->input('doLove'),
            'entrepreuneuship_level'=>$request->input('level')

            
            
            ]) ;
    }
    public function editProfile($id)
    {
        $currentUser=DB::table('users')
        ->where('users.id',$id)->get();
        $school= ['IFRI', 'EPAC', 'FSA', 'FAST'];
        $fields = ['1' => ['Genie Logiciel', 'Securite Informatique','Internet et Multimedia'],
    '2' => ['PSA','GTA','GE'], '3' => ['STPV','STPA','AGRN','NSTA','GRPA'],'4' => ['ERSE']];
    $interests = ['Nutrition (technologie alimentaire, diététique, restauration)',
    'Agriculture (production animale, santé animale, production végétale)','Numérique (développement, réseaux, multimédia)',
    'Ressources naturelles (eau, forêt, aménagement)','Infrastructures (construction, énergies, environnement)'
    ];  
    $engagement_levels = ['Phase d\'idée','Modèle économique','Prototype','Rédaction du plan d\'affaires',
    'Existence sur le marché (fait déjà des ventes)','Pas applicable'];
    $isEntrepreuner=[0,1];
    foreach($currentUser as $user)
    {
        switch($user->school)
        {
            case 'IFRI':
                $fields=$fields['1'];
                break;
            case 'EPAC':
                $fields=$fields['2'];
                break;
            case 'FSA':
                $fields=$fields['3'];
                break;
            case 'FAST':
                $fields=$fields['4'];
                break;
            default:
                break;
        }
    }
   
        
        return view('livewire.user.editProfile',['currentUser'=>$currentUser,'school'=>$school,'fields'=>$fields,'interests'=>$interests,'isEntrepreuner'=>$isEntrepreuner,'engagement_levels'=>$engagement_levels ]);
    }
}
