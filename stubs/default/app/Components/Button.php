<?php

namespace SDream\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;


class Button extends Component {
    public $type;
    public $size;


    public function __construct($type = 'primary', $size = 'medium') {
        $this->type = $type;
        $this->size = $size;
    }


    public function render(): View|Closure|string
    {
        return view('s-dream::components.button');
    }
}
