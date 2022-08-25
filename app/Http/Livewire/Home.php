<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\App;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $data['title'] = 'Modern Automobiles';
        return view('livewire.home')->layout('layouts.app',$data);
    }
}
