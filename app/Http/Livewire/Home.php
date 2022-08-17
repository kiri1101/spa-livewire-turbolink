<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
    public $lang;

    public function lang($lang)
    {
        $this->lang = $lang;
        return dd("welcome to $this->lang");
    }

    public function render()
    {
        $data['title'] = 'Modern Automobiles';
        return view('livewire.home')->layout('layouts.app',$data);
    }
}
