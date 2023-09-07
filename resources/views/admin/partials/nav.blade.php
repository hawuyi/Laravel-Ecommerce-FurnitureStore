<aside class="side-nav">

    <div class="logo">
        <img src="{{asset('img/logo.svg')}}" alt="">
        ADMINPANEL
    </div>

    <ul>

        <li>
            <a href="{{route('adminpanel')}}">Dashboard</a>
        </li>
        <li>
            <a href="{{route('adminpanel.products')}}">Products</a>
        </li>
        <li>
            <a href="{{route('adminpanel.categories')}}">Categories</a>
        </li>
        <li>
            <a href="{{route('adminpanel.colors')}}">Colors</a>
        </li>
        <li>
            <a href="{{route('adminpanel.orders')}}">Orders</a>
        </li>

    </ul>

    <div class="logout">
        <form action="{{route('logout')}}" method="post">
            @csrf
            <button type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-width="2" d="M13 9V2H1v20h12v-7m9-3H5m12-5l5 5l-5 5"/></svg>
                &nbsp; Logout
            </button>
        </form>
    </div>


</aside>