<?php

namespace App\Livewire;

use Livewire\Component;

class ProfilePreview extends Component
{
    public string $name = ''; // This will hold our input

    public function render()
    {
        return view('livewire.profile-preview');
    }

    public function clearName()
    {
        $this->name = ''; // Resetting the PHP property to empty
    }
}
