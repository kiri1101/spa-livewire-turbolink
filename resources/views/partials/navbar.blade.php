<nav class="bg-cream-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a href="{{ route('home') }}" class="flex items-center">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo">
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
        </a>
        <div class="flex items-center md:order-2">
            @foreach (Config::get('languages') as $lang => $language)
                <a href="{{ route('lang.toggle', $lang) }}" class="block p-2 text-sm text-gray-700 hover:shadow hover:text-gray-900 hover:bg-gray-50 dark:hover:bg-gray-700 dark:hover:text-white">
                    <div class="inline-flex items-center">
                        <span class="fi fi-{{$language['flag-icon']}} mr-1"></span> 
                        <span class="hidden lg:block">{{$language['display']}}</span>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="items-center justify-between w-full md:flex md:w-auto md:order-1">
            <ul class="flex flex-row justify-center p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li
                    @if(url()->current()==route('home'))
                        class="block py-2 pl-3 pr-4 text-white bg-amber-500 rounded md:bg-transparent hover:shadow md:hover:shadow-none md:text-amber-500 md:p-0 dark:text-white" aria-current="page"
                    @else
                        class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent hover:shadow md:hover:shadow-none md:hover:text-amber-500 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                    @endif>
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li 
                    @if (url()->current()==route('about'))
                        class="block py-2 pl-3 pr-4 text-white bg-amber-500 rounded md:bg-transparent hover:shadow md:hover:shadow-none md:text-amber-500 md:p-0 dark:text-white" aria-current="page"
                    @else
                        class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent hover:shadow md:hover:shadow-none md:hover:text-amber-500 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                    @endif>
                    <a href="{{ route('about') }}">About</a>
                </li>
                <li
                    @if (url()->current()==route('courses'))
                        class="block py-2 pl-3 pr-4 text-white bg-amber-500 rounded md:bg-transparent hover:shadow md:hover:shadow-none md:text-amber-500 md:p-0 dark:text-white" aria-current="page"
                    @else
                        class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent hover:shadow md:hover:shadow-none md:hover:text-amber-500 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                    @endif>
                    <a href="{{ route('courses') }}">Courses</a>
                </li>
                <li
                    @if (url()->current()==route('review'))
                        class="block py-2 pl-3 pr-4 text-white bg-amber-500 rounded md:bg-transparent hover:shadow md:hover:shadow-none md:text-amber-500 md:p-0 dark:text-white" aria-current="page"
                    @else
                        class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent hover:shadow md:hover:shadow-none md:hover:text-amber-500 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                    @endif>
                    <a href="{{ route('review') }}">Reviews</a>
                </li>
            </ul>
        </div>
    </div>
</nav>