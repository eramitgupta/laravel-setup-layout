<?php

namespace LaravelSetupLayout\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WebAppLayout extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('vendor.setup-layout.components.web-app-layout');
    }
}
