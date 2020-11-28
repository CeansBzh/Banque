<?php

namespace App\View\Components\bank;

use Illuminate\View\Component;

class NavLink extends Component
{
    /**
     * Status of the current nav link.
     *
     * @var bool
     */
    public $active;

    /**
     * Create the component instance.
     *
     * @param  bool  $active
     * @return void
     */
    public function __construct($active)
    {
        $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.bank.nav-link');
    }
}
