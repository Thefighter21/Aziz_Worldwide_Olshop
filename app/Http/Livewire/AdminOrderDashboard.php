<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\pesanan;
use Livewire\WithPagination;

class AdminOrderDashboard extends Component
{
    //use WithPagination;

    public $search;

    public function updatingSearch() {
        $this->resetPage();
    }

    public function render()
    {
        if(Auth::user()->is_admin == 1) {
            return view('livewire.admin-order-dashboard', [
                'pesanans' => Pesanan::where('id','like','%'.$this->search.'%')->paginate(5),
            ]);
        } else {
            abort(404);
        }
    }
}