<?php

namespace Key13\Tally\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TallyScript extends Component
{
    public function render(): View
    {
        return view('tally-components::components.tally-script');
    }
}
