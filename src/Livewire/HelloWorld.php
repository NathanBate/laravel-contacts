<?php

namespace Nathanbate\LaravelContacts\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $title = "";

    public function render()
    {
        return view('laravel-contacts::livewire.hello-world');
    }
}
