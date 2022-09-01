<div tabindex="0" aria-label="group icon" role="img" class="focus:outline-none w-8 h-8 border rounded-full border-gray-200 flex flex-shrink-0 items-center justify-center">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-4/5 h-4/5 fill-blue-600">
        <path d="M638.4 313.9c-2.1-5.9-6.4-11.2-12.9-14.5-21-10.8-58.3-24.9-87.4-105-.8-2.2-14.7-40.5-15.4-42.6C503 97.6 451.8 64 397.4 64c-15.1 0-30.5 2.6-45.6 8.1-3.6 1.3-6.6 3.3-10 4.8-14.2-16-32.1-29-53.5-36.8-15-5.5-30.5-8.1-45.6-8.1-54.5 0-105.6 33.6-125.3 87.8-.8 2.1-14.6 40.4-15.4 42.6-29.2 80.1-66.4 94.3-87.4 105-6.5 3.3-10.8 8.6-12.9 14.5-4.6 12.9 1 28.8 16 34.2l82 29.9c-2.1 7-3.6 14.3-3.6 22 0 44.2 35.8 80 80 80 32.6 0 60.5-19.6 72.9-47.7l42.1 15.3c-2.8 6.5-7.5 14.8-3.4 26 4.9 13.1 19.6 21.3 34.3 15.9l76-27.7c11.8 29.4 40.5 50.1 74.1 50.1 44.2 0 80-35.8 80-80 0-8.7-1.9-16.8-4.6-24.5l75-27.3c14.9-5.4 20.5-21.3 15.9-34.2zM176 416c-26.5 0-48-21.5-48-48 0-3.9.6-7.5 1.5-11.1l88.9 32.4C210.6 405 194.7 416 176 416zm124.7-30.9L40.1 290.3c24.5-12.8 63.2-38.2 91.8-117 8.3-22.9 5.1-14.1 15.4-42.6C161.9 90.8 200.2 64 242.6 64c44.7 0 70.8 29.1 71.6 29.9-43.3 34.8-62.2 94-42.2 149.1.8 2.1 14.8 40.4 15.6 42.6 16.9 46.4 17.4 77.3 13.1 99.5zM472 448c-19.7 0-36.1-12.2-43.4-29.3l89.3-32.5c1.3 4.4 2.1 9 2.1 13.8 0 26.5-21.5 48-48 48zm-149.5-24.8c10.6-25.6 23.8-69.8-4.8-148.7-9.6-26.3-5.5-15-15.6-42.6-19.1-52.5 8.1-110.8 60.6-129.9 53-19.3 110.9 8.5 129.9 60.6 9.7 26.7 5 13.8 15.4 42.6 28.7 78.8 67.3 104.2 91.8 117l-277.3 101z"/>
    </svg>
</div>
<div class="pl-3 w-full">
    <div class="items-center justify-between w-full pr-2">
        <p class="block w-full focus:outline-none text-sm leading-none my-0">
            <span class="text-indigo-700 font-bold">
                @if(! empty($announcement['link']))
                    <a href="{{ $announcement['link'] }}">
                @endif
                        {{ $announcement['title'] }}
                        @if(! empty($announcement['link']))
                    </a>
                @endif
            </span>
        </p>
        <p class="block w-full focus:outline-none text-sm leading-none">
            {{ $announcement['body'] }}
        </p>
    </div>
    <div class="flex justify-between">
        <p class="focus:outline-none text-xs leading-3 pt-1 text-gray-500" title="{{ $created_at->format('jS M Y H:i') }}">
            {{ $created_at->diffForHumans() }}
        </p>

        @if(! empty($announcement['link']))
            <p class="text-right focus:outline-none text-xs leading-3 pt-1">
                <a href="{{ $announcement['link'] }}"
                   {{ ! empty($announcement['linkNewWindow']) ? ' target="_blank"' : '' }}
                   class="cursor-pointer no-underline bg-gray-100 text-gray-800 rounded-md border border-gray-300 p-2 hover:bg-gray-300">
                    {{ ! empty($announcement['linkText']) ? $announcement['linkText'] : 'View' }}
                </a>
            </p>
        @endif
    </div>
</div>
