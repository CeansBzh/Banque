<?php

namespace App\View\Components\bank;

use Illuminate\View\Component;

class AccountInfo extends Component
{
    /**
     * Create the component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.bank.account-info');
    }
}
