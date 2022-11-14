<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Forms extends Component
{
    public $x = 1;
    public $nOfStep = 9;

    public function mount()
    {
       return  $this->x;
    }

    public function increase()
    {
        $this->x++;
    }
    public function decrease()
    {
        $this->x--;
    }
    public function render()
    {
        return view('livewire.forms');
    }


}
