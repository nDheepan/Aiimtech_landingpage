<div class="w-[50%] p-6 sm:p-2  sm:w-full  md:w-full flex justify-center">
            <div>
            {!! isset($elements['button']) ? view('components.common.common_ui.button', ['button' => $elements['button']])->render() : '' !!}
            <div class="">
            {!! isset($elements['title']) ? view('components.common.common_ui.para_title', ['title' => $elements['title']])->render() : '' !!}
                @foreach($elements['points'] as $index => $point)
                    <div>
                        <span class="text-2xl text-orange-500 font-semibold leading-8">{{ sprintf('%02d', $index + 1) }}. </span>
                        <span class="text-xl text-black font-semibold leading-8">{{ $point['heading'] }}</span>
                        <p class="text-lg text-gray-800 leading-8">{{ $point['content'] }}</p>
                    </div>
                @endforeach
            </div>
            </div>
        </div>

