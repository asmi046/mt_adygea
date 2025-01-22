@props([
    'url' => "#",
    'title' => "",
])

<div class="palaroid">
    <a data-fslightbox="page-galery" href="{{ $url }}" class="photo_wrap">
        <img src="{{ $url }}" alt="{{ $title }}">
    </a>
    <div class="text">
        {{ $title }}
    </div>
</div>
