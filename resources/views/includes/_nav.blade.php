<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse text-white">
            StickyNotes
        </a>
        @auth
            <div class="flex items-center space-x-6 rtl:space-x-reverse">
                <span class="font-bold uppercase text-white">
                    Welcome {{ auth()->user()->name }}
                </span>
                <form method="post" action="{{route('user.logout')}}">
                    @csrf
                    <button type="submit" class="text-red-500">
                        Logout
                    </button>
                </form>
            </div>
        @else
            <div class="flex items-center space-x-6 rtl:space-x-reverse">
                <a href="{{ route('user.register') }}"
                    class="text-sm  text-gray-500 dark:text-yellow-300 hover:underline">Register</a>
                <a href="{{ route('user.login') }}"
                    class="text-sm  text-blue-600 dark:text-yellow-300 hover:underline">Login</a>
            </div>
        @endauth
    </div>
</nav>
