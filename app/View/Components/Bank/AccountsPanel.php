<?php

namespace App\View\Components\bank;

use Illuminate\View\Component;

class AccountsPanel extends Component
{
    /**
     * The current user's accounts.
     *
     * @var string
     */
    public $accounts;

    /**
     * Create the component instance.
     *
     * @param  string  $accounts
     * @return void
     */
    public function __construct($accounts)
    {
        $this->accounts = $accounts;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.bank.accounts-panel');
    }
}
