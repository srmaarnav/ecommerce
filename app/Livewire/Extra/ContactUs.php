<?php

namespace App\Livewire\Extra;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Contact Us')]
class ContactUs extends Component
{
    public function render()
    {
        return view('livewire.extra.contact-us');
    }
}
