<?php

namespace App\View\Components\Dream;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;


class Button extends Component {
    public $style;


    public function __construct($style = 'primary') {
        $this->style = $style;
    }


    public function render(): View|Closure|string
    {
        return view('components.dream.button', ['style' => $this->style]);
    }
}
