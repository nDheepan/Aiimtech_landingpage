@extends('index')
@section('title', 'Facilities')
@section('content')

    @foreach ($data['pages']['home'] as $section)
        @if ($section['type'] === 'component' && $section['name'] === 'columncomponent')
             @component('components.common.columncomponent', ['section' => $section])
            @endcomponent
        @elseif ($section['type'] === 'component' && $section['name'] === 'rowcomponent')
            @component('components.common.rowcomponent', ['section' => $section])
        @endcomponent
        @elseif ($section['type'] === 'markup')
            {!! $section['content'] !!}
        @endif
    @endforeach
@stop
    