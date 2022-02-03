<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use App\Models\UserInfo;
use Livewire\WithFileUploads;



class Register extends Component
{
    use WithFileUploads;

    /* model use for user selection and answer */
    public $step = 1;
    public $email;
    public $first_name;
    public $last_name;
    public $phoneNumber;
    public $birthday;
    public $selected_school;
    public $selected_field;
    public $user_interest;
    public $entrepreuneurial_interest;
    public $entrepreuneurial_engagement_level;
    public $curriculum_vitae;
    public $password;
    public $password_confirmation;
    /* END */

    /*rules for validation */
    protected $rules = [
        'email' => 'required|email',
        'first_name' => 'required',
        'last_name' => 'required',
        'phoneNumber' => 'required',
        'birthday' => 'required',
        'selected_school' => 'required',
        'selected_field' => 'required',
        'user_interest' => 'required',
        'entrepreuneurial_interest' => 'required',
        'password' => 'required',
    ];


    /*CONST VALUES USE FOR SELECTION */
    public $schools = ['IFRI', 'EPAC', 'FSA', 'FAST'];
  
    public $fields = ['1' => ['Genie Logiciel', 'Securite Informatique','Internet et Multimedia'],
    '2' => ['PSA','GTA','GE'], '3' => ['STPV','STPA','AGRN','NSTA','GRPA'],'4' => ['ERSE']];
    public $selected_list_fields = [];
    public $interests = ['Nutrition (technologie alimentaire, diététique, restauration)',
    'Agriculture (production animale, santé animale, production végétale)','Numérique (développement, réseaux, multimédia)',
    'Ressources naturelles (eau, forêt, aménagement)','Infrastructures (construction, énergies, environnement)'
    ];  
    public $engagement_levels = ['Phase d\'idée','Modèle économique','Prototype','Rédaction du plan d\'affaires',
    'Existence sur le marché (fait déjà des ventes)','Pas applicable'];
    /* END */
   
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
             'email' => 'required|email|unique:users|max:255',
            'first_name' => 'required',
            'last_name' => 'required',
            'phoneNumber' => 'required',
            'birthday' => 'required',  
            'selected_school' => 'required',
            'selected_field' => 'required',
            'user_interest' => 'required',
            'entrepreuneurial_interest' => 'required',
            'password' => 'required|confirmed|min:6',        
        ]);
    }
    
    public function selectSchool(){
        switch($this->selected_school){
            case 'IFRI':
                $this->selected_list_fields = $this->fields[1];
                break;
            case 'EPAC':
                $this->selected_list_fields = $this->fields[2];
                break;
            case 'FSA':
                $this->selected_list_fields = $this->fields[3];
                break;
            case 'FAST':
                $this->selected_list_fields = $this->fields[4];
                break;
            default:
                break;
        }
    }
    public function continue(){
            $this->step++;        
       
    }

    public function back(){
        $this->step--;
    }
    public function cehckPasswords(){
        
    }
    public function save(){
        $this->validate();
        $user = User::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'password' => $this->password,
            'birthday' => $this->birthday,
            'phone' => $this->phoneNumber,
            'curriculum_vitae' => $this->last_name.'_'.$this->first_name,
            'school' => $this->selected_school,
            'study_field' => $this->selected_field,
            'interest' => $this->user_interest,
            'entrepreuneuship_lover' => $this->entrepreuneurial_interest == true ? 1 : 0,
            'entrepreuneuship_level' => $this->entrepreuneurial_engagement_level
        ]);
        
        $this->curriculum_vitae->storeAs('cv',$user->last_name.'_'.$user->first_name);
        
      
       
            
        
        return redirect()->intended('/');
    }
    public function render()
    {
        return view('livewire.auth.register')
                ->layout('layouts.auth');
    }
}