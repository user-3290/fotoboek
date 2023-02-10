<form method="POST" action="{{ route('fotoboek.filter') }}" class="space-y-3">
    @csrf
    <input class="w-full p-2 bg-gray-100 rounded-md" placeholder="Zoeken op naam" name="q" id="q"
        type="text">
    <div class="grid grid-cols-1 gap-3 xs:grid-cols-2">
        <select class="w-full p-2 bg-gray-100 rounded-md" name="functions[]" id="function" placeholder="Functie"
            multiple="multiple" size="1">
        </select>
        <select class="w-full p-2 bg-gray-100 rounded-md" name="entities[]" id="entity" placeholder="Entiteit"
            multiple="multiple" size="1">
        </select>
        <select class="hidden w-full p-2 bg-gray-100 rounded-md" name="teams[]" id="team" placeholder="Team"
            multiple="multiple" size="1">
        </select>
        <select class="hidden w-full p-2 bg-gray-100 rounded-md" name="regions[]" id="region" placeholder="Regio"
            multiple="multiple" size="1">
        </select>
    </div>
    <button type="submit" class="w-full p-2 rounded-md bg-munt hover:bg-muntdonker">Filteren</button>
</form>
