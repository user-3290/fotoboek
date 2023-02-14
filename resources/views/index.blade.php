@extends('layout.app')

@section('title')
    Fotoboek
@stop
@section('content')
    {{-- Start page content --}}
    <section class="w-full ">
        {{-- Include the filter, the file can be found at /resources/views/components/filter.blade.php --}}
        <x-filter />

        @if (request()->get('q') ||
                request()->get('functions') ||
                request()->get('entities') ||
                request()->get('teams') ||
                request()->get('regions'))
            @if (count($data) <= 0)
                <x-no-result />
            @else
                <x-results :data="$data" />
            @endif
        @else
            <x-start-filtering />
        @endif
        {{-- End search user section --}}
    </section>
    {{-- End page content --}}

    <div class="" id="test"></div>
@stop
