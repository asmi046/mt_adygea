<div class="location_wrapper">
    @foreach (config('lend_data.location_photo') as $key => $item)
    <div class="location">
        <div class="img">
            <img src="{{ asset($item) }}" alt="{{ $key }}">
        </div>
        <h3>{{ $key }}</h3>
    </div>
    @endforeach

</div>
