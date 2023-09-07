<nav class="menu">

    <img class="logo" src="{{asset('img/logo.svg')}}" alt="">
    
    <ul>
        <li>
            <a href="{{route('home')}}">
                <svg width="48" height="48" viewBox="0 0 1024 1024"><path fill="currentColor" d="M946.5 505L534.6 93.4a31.93 31.93 0 0 0-45.2 0L77.5 505c-12 12-18.8 28.3-18.8 45.3c0 35.3 28.7 64 64 64h43.4V908c0 17.7 14.3 32 32 32H448V716h112v224h265.9c17.7 0 32-14.3 32-32V614.3h43.4c17 0 33.3-6.7 45.3-18.8c24.9-25 24.9-65.5-.1-90.5z"/></svg>
            </a>
        </li>
        <li>
            <a href="{{route('wishlist')}}">
                @auth
                    <span class="info-count">{{count(auth()->user()->wishlist)}}</span>      
                @endauth
                <svg width="48" height="48" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="m13.087 21.388l.542-.916c.42-.71.63-1.066.968-1.262c.338-.197.763-.204 1.613-.219c1.256-.021 2.043-.098 2.703-.372a5 5 0 0 0 2.706-2.706C22 14.995 22 13.83 22 11.5v-1c0-3.273 0-4.91-.737-6.112a5 5 0 0 0-1.65-1.651C18.41 2 16.773 2 13.5 2h-3c-3.273 0-4.91 0-6.112.737a5 5 0 0 0-1.651 1.65C2 5.59 2 7.228 2 10.5v1c0 2.33 0 3.495.38 4.413a5 5 0 0 0 2.707 2.706c.66.274 1.447.35 2.703.372c.85.015 1.275.022 1.613.219c.337.196.548.551.968 1.262l.542.916c.483.816 1.69.816 2.174 0ZM7.5 9.715c0 1.752 2.163 3.615 3.49 4.593c.454.335.681.502 1.01.502c.329 0 .556-.167 1.01-.502c1.327-.978 3.49-2.84 3.49-4.593c0-2.677-2.475-3.677-4.5-1.609c-2.025-2.068-4.5-1.068-4.5 1.609Z" clip-rule="evenodd"/></svg>
            </a>
        </li>
        <li>
            <a href="{{route('cart')}}">
                <span class="info-count">{{session()->has('cart') ? count(session('cart')) : 0}}</span>
                <svg width="48" height="48" viewBox="0 0 48 48"><mask id="ipSShopping0"><g fill="none"><path fill="#fff" d="M39 32H13L8 12h36l-5 20Z"/><path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M3 6h3.5L8 12m0 0l5 20h26l5-20H8Z"/><circle cx="13" cy="39" r="3" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/><circle cx="39" cy="39" r="3" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/></g></mask><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSShopping0)"/></svg>
            </a>
        </li>
        <li>
            <a href="{{route('account')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><mask id="ipSPeople0"><path fill="#fff" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M24 20a7 7 0 1 0 0-14a7 7 0 0 0 0 14ZM6 40.8V42h36v-1.2c0-4.48 0-6.72-.872-8.432a8 8 0 0 0-3.496-3.496C35.92 28 33.68 28 29.2 28H18.8c-4.48 0-6.72 0-8.432.872a8 8 0 0 0-3.496 3.496C6 34.08 6 36.32 6 40.8Z"/></mask><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSPeople0)"/></svg>
            </a>
        </li>
    </ul>


</nav>