@props([
    'url' => "#",
    'title' => "",
    'index' => -1
])

<div @class(['palaroid', 'fslightbox' => $index >= 0]) data-indexf="{{ $index }}" >
    <a @class(['photo_wrap'])
    @if ($index >= 0)
        data-fslightbox="page-galery"
    @endif
    href="{{ $url }}">
        <img src="{{ $url }}" alt="{{ $title }}">
    </a>
    <div class="text">
        {{ $title }}
    </div>
</div>
