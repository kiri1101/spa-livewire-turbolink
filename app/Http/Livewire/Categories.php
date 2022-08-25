<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Categories extends Component
{
    public function render()
    {
        $data['title'] = 'Modern Automobiles';
        $data['sub_title'] = 'Categories';
        return view('livewire.categories',$data)->layout('layouts.app',$data);
    }
}
