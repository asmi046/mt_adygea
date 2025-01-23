<div class="programm_wrapper">

    @foreach (config('lend_data.program_dey') as $key => $item )
        <div class="dey_element">
            <div class="counter">
                <div class="inner">
                    {{ $key }}
                    <span>День</span>
                </div>
            </div>
            <div class="text text_styles">
                 {!! $item !!}
                @if ($loop->index + 1 == count(config('lend_data.program_dey')))
                    <br>
                    <a class="button yakor" href="#in_tur">Купить тур</a>
                @endif
            </div>
        </div>
    @endforeach




</div>
