<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AdminLayout extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;
    public $menu;
    public function __construct($title=null,$menu=null)
    {
        $this->title = $title ?? config('app.name');
        $this->menu = $menu ?? "dashboard";
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('master-layouts.admin');
    }
}
