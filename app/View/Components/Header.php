<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    /**
     * Create a new component instance.
     */

    public $role;
    public $user_id;

    
    public function __construct($role = null, $user_id = null)
    {
        $this->role = $role ?? session('role', '0');
        $this->user_id = $user_id ?? auth()->id();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header');
    }
}
