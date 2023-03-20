<?php

namespace App\View\Components\Navbar;

use Illuminate\View\Component;

class TopNav extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $userInfo;
    public function __construct($user)
    {
        //
        $this->userInfo = $user;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.navbar.top-nav');
    }
}
