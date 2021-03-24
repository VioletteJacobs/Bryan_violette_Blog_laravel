
<nav class="mx-5 ">
    @if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
            @can("home")
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
            @endcan
            <form action="/logout" method="post" class="ml-3 ">
                @csrf
                <button type="submit" class="text-white btn btn-warning">Logout</button>
            </form>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>
    
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif
        @endauth
    </div>
    @endif
</nav>