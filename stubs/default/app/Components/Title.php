<?php

namespace App\View\Components\Dream;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;


class Title extends Component
{
    public function render(): View|Closure|string
    {
        return view('components.dream.base.title');
    }
}
