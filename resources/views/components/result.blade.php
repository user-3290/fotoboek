@props(['data'])

<div class="" x-data="{ 'showModal': false }" @keydown.escape="showModal = false" x-cloak>

    <div class="flex items-center w-full p-2 space-x-2 rounded-md cursor-pointer bg-munt hover:bg-muntdonker"
        @click="showModal=true">
        <img class="object-cover w-8 h-8 rounded-full" src="{{ $data['image'] }}"
            alt="Foto {{ $data['firstname'] }} {{ $data['lastname'] }}">
        <p>
            {{ $data['firstname'] }}
            {{ $data['lastname'] }}
        </p>
    </div>

    <!--Overlay-->
    <div class="top-0 left-0 z-10 overflow-hidden" style="background-color: rgba(0,0,0,0.5)"
        x-show="showModal":class="{ 'fixed flex items-center justify-center w-screen h-screen': showModal }">
        <!--Dialog-->
        <div class="w-11/12 max-h-screen px-6 py-4 mx-auto space-y-10 overflow-auto scrollbar-thin scrollbar-thumb-rounded-full text-left bg-white rounded shadow-lg sm:max-h-[36rem] md:max-h-[42rem] lg:max-h-[48rem] xl:max-h-[56rem] sm:max-w-xl md:max-w-2xl lg:max-w-3xl xl:max-w-4xl"
            x-show="showModal" @click.away="showModal = false" x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">

            <!-- name and image -->
            <div class="flex justify-between pb-3">
                <div class="flex items-center space-x-4">
                    <img class="object-cover w-32 h-32 rounded-full" src="{{ $data['image'] }}"
                        alt="Foto {{ $data['firstname'] }} {{ $data['lastname'] }}">
                    <p class="text-2xl font-bold">{{ $data['firstname'] }} {{ $data['lastname'] }}</p>
                </div>
                <div class="flex p-2" @click="showModal = false"><i class="cursor-pointer fa-solid fa-xmark"></i></div>
            </div>

            <!-- function info -->
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                @foreach ($data['functions'] as $function)
                    <div
                        class="w-full p-3 rounded-md text-{{ $function['color']['text'] }} bg-{{ $function['color']['background'] }}">
                        @if ($function['function'] && $function['function'] !== null && $function['function'] !== '')
                            <div class="flex justify-between p-2 space-x-1 text-right">
                                <p class="font-bold">Functie:</p>
                                <p>{{ $function['function'] }}</p>
                            </div>
                        @endif
                        @if ($function['region'] && $function['region'] !== null && $function['region'] !== '')
                            <div class="flex justify-between p-2 space-x-1 text-right">
                                <p class="font-bold">Regio:</p>
                                <p>{{ $function['region'] }}</p>
                            </div>
                        @endif
                        @if ($function['entity'] && $function['entity'] !== null && $function['entity'] !== '')
                            <div class="flex justify-between p-2 space-x-1 text-right">
                                <p class="font-bold">Entiteit:</p>
                                <p>{{ $function['entity'] }}</p>
                            </div>
                        @endif
                        @if ($function['team'] && $function['team'] !== null && $function['team'] !== '')
                            <div class="flex justify-between p-2 space-x-1 text-right">
                                <p class="font-bold">Team:</p>
                                <p>{{ $function['team'] }}</p>
                            </div>
                        @endif
                        @if ($function['extra'] && $function['extra'] !== null && $function['extra'] !== '')
                            <div class="flex justify-between p-2 space-x-1 text-right">
                                <p class="font-bold">Verduidelijking:</p>
                                <p>{{ $function['extra'] }}</p>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
        <!--/Dialog -->
    </div><!-- /Overlay -->
</div>
