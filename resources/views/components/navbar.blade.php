<nav class="max-w-screen-xl border bg-white mx-auto">
    <div class="flex items-center justify-center">
        <ul class="font-medium flex gap-4 p-4 rounded-lg">
            @foreach ($links as $link)
                <li
                    class="{{ url()->current() === $link['uri'] ? 'bg-blue-700 hover:bg-blue-800 text-white' : null }} rounded p-2">
                    <a href={{ $link['uri'] }} class="block py-2 pl-3 pr-4 md:hover:bg-transparent md:border-0 md:p-0">
                        {{ ucwords($link['name']) }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</nav>
