<?php

namespace SDream\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;


class Label extends Component
{
    public string $for;
    public string $text;

    public function __construct(string $for, string $text)
    {
        $this->for = $for;
        $this->text = $text;
    }

    public function render(): View|Closure|string
    {
        return view('s-dream::welcome');
    }
}
