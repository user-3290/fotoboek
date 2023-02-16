<header class="flex justify-between w-full h-full pb-10">
    {{-- Logo --}}
    <a href="/" aria-current="page" class="nuxt-link-exact-active nuxt-link-active"><img
            src="{{ asset('/assets/images/png/cvovolt.png') }}" class="hidden w-32 h-32 lg:block"> <img
            src="{{ asset('/assets/images/png/cvovolt_rechthoek.png') }}" class="w-32 h-15 lg:hidden"></a>

    {{-- User -> Firstname and lastname --}}
    <div class="flex items-end justify-end w-full min-h-full">
        <div class="flex items-center space-x-2 xs:space-x-1 ">
            <div class="xs:space-x-1 xs:flex">
                <p>Voornaam</p>
                <p class="-mt-2 xs:mt-0">Achternaam</p>
            </div>
            <p><i class="fa-solid fa-user"></i></p>
        </div>
    </div>
</header>
