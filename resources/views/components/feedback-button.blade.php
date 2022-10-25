<button
    data-tally-open="{{ $id }}"
    data-tally-layout="{{ $layout }}"
    data-tally-width="{{ $width }}"
    data-tally-emoji-text="{{ $emojiText }}"
    data-tally-emoji-animation="{{ $emojiAnimation }}"
    class="bg-primary-500 text-white hover:bg-primary-600"
    @foreach($info as $key => $value)
    data-{{ $key }}="{{ $value }}"
    @endforeach
    style="border: none !important;
position: fixed !important;
inset: auto 0px 50% auto !important;
width: 150px !important;
height: 42px !important;
pointer-events: all !important;
touch-action: auto !important;
display: block !important;
color-scheme: none !important;
border-top-left-radius: 8px !important;
border-top-right-radius: 8px !important;
box-shadow: rgb(0 0 0 / 9%) 0px -4px 30px -6px, rgb(0 0 0 / 9%) 0px -2px 10px 0px !important;
transform: rotateZ(-90deg) translateX(50%) translateY(3px);
transform-origin: 100% 100% !important;
z-index: 100000000;
opacity: 1;"
>{{ $buttonText }}</button>
