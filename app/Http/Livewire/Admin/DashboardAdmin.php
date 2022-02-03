<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use App\Http\Livewire\Auth\Register;

class DashboardAdmin extends Component
{
    public function render(Request $request)
    {
        $search = $request->input('search');
        // dd($search);
        $users = User::query()
        ->where('last_name', 'LIKE', "%{$search}%")
        ->orWhere('first_name', 'LIKE', "%{$search}%")
        ->get();
        //$users=User::paginate(10);
        
        
        
        return view('livewire.admin.dashboard-admin',['users'=>$users])->layout('layouts.app');
    }
}