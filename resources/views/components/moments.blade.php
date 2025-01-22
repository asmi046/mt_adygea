<div class="location_wrapper">
    @foreach (config('lend_data.location_photo') as $item)
    <div class="location">
        <div class="img">
            <img src="{{ asset($item) }}" alt="">
        </div>
    </div>
    @endforeach

</div>
