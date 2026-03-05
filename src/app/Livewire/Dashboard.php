<?php

namespace App\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    // 1. We define the "State" of which module is visible
    public string $activeModule = 'module1';

    // 2. We create the "Action" to change that state
    public function showModule($moduleName)
    {
        $this->activeModule = $moduleName;
    }
    
    public function render()
    {
        return view('livewire.dashboard');
    }
}
