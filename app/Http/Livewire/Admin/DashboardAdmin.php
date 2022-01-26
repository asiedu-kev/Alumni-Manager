<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use App\Models\UserInfo;
use App\Http\Livewire\Auth\Register;

class DashboardAdmin extends Component
{
    public function render()
    {
        $users=User::paginate(10);
        $usersInfo=UserInfo::paginate(10);
        return view('livewire.admin.dashboard-admin',['users'=>$users,'usersInfo'=>$usersInfo])
        ->layout('layouts.app');
    }
}