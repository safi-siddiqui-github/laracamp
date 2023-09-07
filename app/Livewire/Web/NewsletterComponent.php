<?php

namespace App\Livewire\Web;

use App\Models\Newsletter;
use Livewire\Attributes\Rule;
use Livewire\Component;

class NewsletterComponent extends Component
{
    #[Rule('required|email|ends_with:gmail.com|unique:newsletters')] 
    public $email = '';
 
    public function save()
    {
        $this->validate(); 
        
        $news = new Newsletter();
        $news->email = $this->email;
        $news->status = true;
        $news->save();

        $this->reset();

        session()->flash('news_success', 'Email Added to Newsletter.');
    }

    public function render()
    {
        return view('livewire.web.newsletter-component');
    }
}
