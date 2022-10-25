<?php

namespace Key13\Tally\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FeedbackButton extends Component
{
    public function __construct(
        public string $id,
        public string $buttonText = 'Feedback',
        public string $layout = 'modal',
        public string $width = '500',
        public string $emojiText = '👋',
        public string $emojiAnimation = 'wave',
        public array $info = [],
    ) {}

    public function render(): View
    {
        return view('tally-components::components.feedback-button');
    }
}
