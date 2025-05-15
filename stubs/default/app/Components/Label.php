<?php

namespace App\View\Components\Dream;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;


class Label extends Component
{
    public string $for;

    public function __construct(string $for)
    {
        $this->for = $for;
    }

    public function render(): View|Closure|string
    {
        return view('components.dream.label');
    }
}
