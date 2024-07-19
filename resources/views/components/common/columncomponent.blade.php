<section class="flex w-full justify-center {{ $section['variant']['class'] ?? '' }} ">
    <div class="w-[80%] flex sm:flex-wrap md:flex-wrap justify-center py-16 @if(isset($section['variant']['position']) && $section['variant']['position'] === 'right') flex-row-reverse sm:flex-col-reverse md:flex-col-reverse @endif">
@foreach($section['children'] as $index => $child)    
    @php
        switch ($child['name']) {
            case 'button_with_para':
                echo view('components.common.button_with_para', ['elements' => $child['elements']])->render();
                break;
            case 'column_image':
                echo view('components.common.column_image', ['elements' => $child['elements'],'variant' => $child['variant']])->render();
                break;
            case 'our_experts_section':
                echo view('components.home.our_experts_section', ['elements' => $child['elements']])->render();
                break;
        }
     @endphp
     @endforeach    
    </div>
</section>

        
