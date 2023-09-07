<?php

namespace App\Livewire\Web;

use Livewire\Component;

class HeroComponent extends Component
{
    public $title = '';
    public $description = '';
    public $btn_url = '';
    public $btn_text = '';
    public $link_url = '';
    public $link_text = '';
    public $image_path = '';
    public $image_alt = '';

    public function render()
    {
        return view('livewire.web.hero-component');
    }
}
