<nav class="bg-[#140c0a] border-b border-[#1e1010] flex flex-col divide-y-[0.5px] divide-[#1e1010] items-center justify-center">
    <div class="container mx-auto">
        @php
            $links = [
                ['name' => 'JEUX', 'href' => '/jeux'],
                ['name' => 'CRASH GAMES', 'href' => '/crash-games'],
                ['name' => 'MINI GAMES', 'href' => '/mini-games'],
            ];

            $links2 = [
                ['name' => 'Statistiques', 'href' => '/statistiques'],
                ['name' => 'Promotion', 'href' => '/promotion'],
                ['name' => 'Results', 'href' => '/results'],
                ['name' => 'Support', 'href' => '/support'],
                ['name' => 'Points', 'href' => '/points', 'badge' => 'NEW'],
            ];
        @endphp

        <ul class="flex flex-row justify-center items-center gap-4 px-4">
            @foreach($links as $link)
                <li>
                    <a href="{{ $link['href'] }}"
                       class="block py-3 text-md text-gray-300 hover:text-white transition-colors
                              {{ request()->is(ltrim($link['href'], '/')) ? 'text-red-500' : '' }}">
                        {{ $link['name'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="container mx-auto">
        <ul class="flex flex-row justify-center items-center gap-4 px-4">
            @foreach($links2 as $link)
                <li>
                    <a href="{{ $link['href'] }}"
                       class="block py-3 text-md text-gray-300 hover:text-white transition-colors
                              {{ request()->is(ltrim($link['href'], '/')) ? 'text-red-500' : '' }}">
                        {{ $link['name'] }}
                        @isset($link['badge'])
                            <span class="ml-1 bg-yellow-400 text-black text-xs px-1 rounded">
                                {{ $link['badge'] }}
                            </span>
                        @endisset
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</nav>
