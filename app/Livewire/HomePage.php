<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class HomePage extends Component
{
    use WithFileUploads;

    public $csvFile;

    public function render()
    {
        return view('livewire.home-page');
    }
}
