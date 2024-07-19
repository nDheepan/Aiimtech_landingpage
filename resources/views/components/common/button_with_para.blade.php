<div class="w-[50%] p-6 sm:p-2 sm:w-full md:w-full">
    <!-- Checking the Button in the Data -->
    {!! isset($elements['button']) ? view('components.common.common_ui.button', ['button' => $elements['button']])->render() : '' !!}
    <div class="w-[100%] lg:w-[90%] xl:w-[80%] x2l:w-[70%] sm:w-[100%] md:w-[100%]">
    {!! isset($elements['title']) ? view('components.common.common_ui.para_title', ['title' => $elements['title']])->render() : '' !!}
        <p class='w-[100%] text-lg text-[#10a6ec]'>{{ $elements['label2'] ?? '' }}</p>
        <p class='pt-2 text-xl lg:text-xl md:text-lg sm:text-base xl:text-xl font-poppins text-explain_content'>
            {{ $elements['text'] ?? 'Default Content' }}
        </p>
    </div>
</div>
