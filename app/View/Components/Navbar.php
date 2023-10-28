<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    public array $links;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->links = [
            'counter' => ['uri' => route('counter'), 'name' => 'counter'],
            'calculator'  => ['uri' => route('calculator'), 'name' => 'calculator'],
            'todo-list'  => ['uri' => route('todo-list'), 'name' => 'todo-list'],
            'cascading-dropdown' => ['uri' => route('cascading-dropdown'), 'name' => 'cascading-dropdown'],
            'product-search' => ['uri' => route('product-search'), 'name' => 'product-search'],
            'image-upload' => ['uri' => route('image-upload'), 'name' => 'image-upload'],
            'registration-form' => ['uri' => route('registration-form'), 'name' => 'registration-form'],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar');
    }
}
