<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    // 1. Properties: Any 'public' variable here is accessible in your Blade file.
    // Livewire "remembers" this value between clicks.
    public int $count = 0;

    // 2. Actions: This is a standard PHP method that we will trigger from the browser.
    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    // 3. The Render: This tells Livewire which Blade file to "glue" to this class.
    public function render()
    {
        return view('livewire.counter');
    }
}