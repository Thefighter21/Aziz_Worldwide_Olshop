<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pesanan;
use Illuminate\Support\Facades\Auth;


class EditTransaction extends Component
{
    public $pesanan, $idPesanan;
    public $status = "1";


    public function mount($id) {
        $Pesanan = Pesanan::find($id);

        if ($Pesanan) {
            $this-> pesanan = $Pesanan;
            $this->idPesanan = $Pesanan->id;
            $this->status = $Pesanan->status;
        }
    }

    public function editTransaksi() {
        $Pesanan = Pesanan::find($this->idPesanan);

        if ($Pesanan) {
            $Pesanan->update([
                'status' => $this->status,
            ]);

            return redirect()->route('admin-order-dashboard');
        }
    }

    public function render()
    {
        if(Auth::user()->is_admin == 1) {
            return view('livewire.edit-transaction');
        } else {
            abort(404);
        }
    }
}
