<?php

namespace App\Http\Livewire;

use Livewire\Component;

class About extends Component
{
    public function render()
    {
        $data['title'] = 'Modern Automobiles';
        $data['sub_title'] = 'About Us';
        return view('livewire.about',$data)->layout('layouts.app',$data);
    }
}
