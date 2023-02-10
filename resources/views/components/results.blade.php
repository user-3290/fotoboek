@props(['data'])

{{-- Search or filter results --}}
<div class="grid grid-cols-1 gap-3 my-10 sm:grid-cols-2 md:grid-cols-3">
    @foreach ($data as $user)
        <x-result :data="$user"></x-result>
    @endforeach
</div>
