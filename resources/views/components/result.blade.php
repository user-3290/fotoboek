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
    <div class="overflow-hidden " style="background-color: rgba(0,0,0,0.5)" x-show="showModal"
        :class="{ 'absolute inset-0 z-10 flex items-center justify-center h-full': showModal }">
        <!--Dialog-->
        <div class="w-11/12 max-h-screen scrollbar-thin scrollbar-thumb-rounded-full px-6 py-4 mx-auto space-y-10 overflow-auto text-left bg-white rounded shadow-lg sm:max-h-[36rem] md:max-h-[42rem] lg:max-h-[48rem] xl:max-h-[56rem] sm:max-w-xl md:max-w-2xl lg:max-w-3xl xl:max-w-4xl"
            x-show="showModal" @click.away="showModal = false" x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">

            <!-- name and image -->
            <div class="flex items-center justify-between pb-3">
                <div class="flex items-center space-x-4">
                    <img class="object-cover w-32 h-32 rounded-full" src="{{ $data['image'] }}"
                        alt="Foto {{ $data['firstname'] }} {{ $data['lastname'] }}">
                    <p class="text-2xl font-bold">{{ $data['firstname'] }} {{ $data['lastname'] }}</p>
                </div>
            </div>

            <!-- function info -->
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                @foreach ($data['functions'] as $function)
                    <div
                        class="w-full p-3 rounded-md text-{{ $function['color']['text'] }} bg-{{ $function['color']['background'] }}">
                        @if ($function['function'])
                            <div class="flex justify-between p-2 space-x-1 text-right">
                                <p class="font-bold">Functie:</p>
                                <p>{{ $function['function'] }}</p>
                            </div>
                        @endif
                        @if ($function['region'])
                            <div class="flex justify-between p-2 space-x-1 text-right">
                                <p class="font-bold">Regio:</p>
                                <p>{{ $function['region'] }}</p>
                            </div>
                        @endif
                        @if ($function['entity'])
                            <div class="flex justify-between p-2 space-x-1 text-right">
                                <p class="font-bold">Entiteit:</p>
                                <p>{{ $function['entity'] }}</p>
                            </div>
                        @endif
                        @if ($function['team'])
                            <div class="flex justify-between p-2 space-x-1 text-right">
                                <p class="font-bold">Team:</p>
                                <p>{{ $function['team'] }}</p>
                            </div>
                        @endif
                        @if ($function['extra'])
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
