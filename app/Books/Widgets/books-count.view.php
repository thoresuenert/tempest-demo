<div hx-get="/books/widget/count/refresh" hx-trigger="every 2s">
    <x-count :count="$this->count" />
</div>

<!--<div hx-swap-oob="beforeend:#notifications">-->
<!--    <p remove-me="1s" class="font-bold text-xl"> we loadd the following: {{ $this->count }}</p>-->
<!--</div>-->