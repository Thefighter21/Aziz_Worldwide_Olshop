<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminates\Support\Facades\Auth;
use Livewire\Component;

class UserProfile extends Component
{
    public $user;

    public function mount($id) {
        $userProfile = User::find($id);

        if ($userProfile) {
            $this->user = $userProfile;
        }
    }

    public function render()
    {
        return view('livewire.user-profile');
    }
}
