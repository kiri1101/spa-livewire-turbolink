<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Courses extends Component
{
    public function render()
    {
        $data['title'] = 'Modern Automobiles';
        $data['sub_title'] = 'Courses';
        return view('livewire.courses',$data)->layout('layouts.app',$data);
    }
}
