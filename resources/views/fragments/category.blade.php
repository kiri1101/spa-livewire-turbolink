<section id="page-title" class="px-10 py-4 bg-cream-white">    
    <div class="py-5 mx-3 h-72" style="background-image: url({{ asset('photos/made-it.png') }}); background-position: center; background-repeat: no-repeat;">
        {{-- <ul>
            <li class="border-l-4 border-gray-600 dark:border-gray-300"><h3 class="text-blue-700 dark:text-blue-300 text-xl ml-2 mb-2 capitalize font-bold">We made it</h3></li>
            <li class="border-l-4 border-gray-600 dark:border-gray-300"><h1 class="text-blue-700 dark:text-blue-300 text-4xl ml-2 capitalize font-bold">Thank you {{ Config::get('app.name') }}</h1></li>
        </ul> --}}
    </div>
</section>

<section id="category">
    <div id="catA" class="bg-dark-blue dark:bg-cream-white lg:py-12 lg:flex lg:justify-center">
        <div class="bg-white dark:bg-gray-800 lg:mx-8 lg:flex lg:max-w-7xl lg:shadow-lg lg:rounded-lg">
            <div class="lg:w-1/3">
                <div class="h-64 bg-cover lg:rounded-lg lg:h-full" style="background-image:url('{{ asset('photos/cata.jpg') }}'); background-position: center;"></div>
            </div>
    
            <div class="max-w-xl px-6 py-12 lg:max-w-5xl lg:w-2/3">
                <h2 class="text-2xl font-bold text-gray-800 dark:text-white uppercase md:text-3xl">{{ __('messages.category_title') }} <span class="text-blue-600 dark:text-blue-400">{{ __('messages.category_A') }}</span></h2>
                <p class="mt-4 text-gray-600 dark:text-gray-400">{{ __('messages.category_A_msg') }}</p>
                
                <div class="mt-8">
                    <a href="#" class="px-5 py-2 font-semibold text-gray-100 transition-colors duration-200 transform bg-gray-900 rounded-md hover:bg-gray-700">{{ __('messages.start_now') }}</a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-cream-white dark:bg-dark-blue lg:py-12 lg:flex lg:justify-center">
        <div class="bg-white dark:bg-gray-800 lg:mx-8 lg:flex lg:max-w-7xl lg:shadow-lg lg:rounded-lg">
            <div class="lg:w-1/3">
                <div class="h-64 bg-cover lg:rounded-lg lg:h-full" style="background-image:url('{{ asset('photos/catam.jpg') }}'); background-position: center;"></div>
            </div>
    
            <div class="max-w-xl px-6 py-12 lg:max-w-5xl lg:w-2/3">
                <h2 class="text-2xl font-bold text-gray-800 dark:text-white uppercase md:text-3xl">{{ __('messages.category_title') }} <span class="text-blue-600 dark:text-blue-400">{{ __('messages.category_AM') }}</span></h2>
                <p class="mt-4 text-gray-600 dark:text-gray-400">{{ __('messages.category_AM_msg') }}</p>
            </div>
        </div>
    </div>

    <div id="catB" class="bg-dark-blue dark:bg-cream-white lg:py-12 lg:flex lg:justify-center">
        <div class="bg-white dark:bg-gray-800 lg:mx-8 lg:flex lg:max-w-7xl lg:shadow-lg lg:rounded-lg">
            <div class="lg:w-1/3">
                <div class="h-64 bg-cover lg:rounded-lg lg:h-full" style="background-image:url('{{ asset('photos/catb1.jpg') }}'); background-position: center;"></div>
            </div>
    
            <div class="max-w-xl px-6 py-12 lg:max-w-5xl lg:w-2/3">
                <h2 class="text-2xl font-bold text-gray-800 dark:text-white uppercase md:text-3xl">{{ __('messages.category_title') }} <span class="text-blue-600 dark:text-blue-400">{{ __('messages.category_B1') }}</span></h2>
                <p class="mt-4 text-gray-600 dark:text-gray-400">{{ __('messages.category_B1_msg') }}</p>
            </div>
        </div>
    </div>

    <div class="bg-cream-white dark:bg-dark-blue lg:py-12 lg:flex lg:justify-center">
        <div class="bg-white dark:bg-gray-800 lg:mx-8 lg:flex lg:max-w-7xl lg:shadow-lg lg:rounded-lg">
            <div class="lg:w-1/3">
                <div class="h-64 bg-cover lg:rounded-lg lg:h-full" style="background-image:url('{{ asset('photos/catb.jpg') }}'); background-position: center;"></div>
            </div>
    
            <div class="max-w-xl px-6 py-12 lg:max-w-5xl lg:w-2/3">
                <h2 class="text-2xl font-bold text-gray-800 dark:text-white uppercase md:text-3xl">{{ __('messages.category_title') }} <span class="text-blue-600 dark:text-blue-400">{{ __('messages.category_B') }}</span></h2>
                <p class="mt-4 text-gray-600 dark:text-gray-400">{{ __('messages.category_B_msg') }}</p>
            </div>
        </div>
    </div>

    <div id="catC" class="bg-dark-blue dark:bg-cream-white lg:py-12 lg:flex lg:justify-center">  
        <div class="bg-white dark:bg-gray-800 lg:mx-8 lg:flex lg:max-w-7xl lg:shadow-lg lg:rounded-lg">
            <div class="lg:w-1/3">
                <div class="h-64 bg-cover lg:rounded-lg lg:h-full" style="background-image:url('{{ asset('photos/catc.jpg') }}'); background-position: center;"></div>
            </div>
    
            <div class="max-w-xl px-6 py-12 lg:max-w-5xl lg:w-2/3">
                <h2 class="text-2xl font-bold text-gray-800 dark:text-white uppercase md:text-3xl">{{ __('messages.category_title') }} <span class="text-blue-600 dark:text-blue-400">{{ __('messages.category_C') }}</span></h2>
                <p class="mt-4 text-gray-600 dark:text-gray-400">{{ __('messages.category_C_msg') }}</p>
            </div>
        </div>
    </div>

    <div id="catD" class="bg-cream-white dark:bg-dark-blue lg:py-12 lg:flex lg:justify-center">
        <div class="bg-white dark:bg-gray-800 lg:mx-8 lg:flex lg:max-w-7xl lg:shadow-lg lg:rounded-lg">
            <div class="lg:w-1/3">
                <div class="h-64 bg-cover lg:rounded-lg lg:h-full" style="background-image:url('{{ asset('photos/catd.jpg') }}'); background-position: center;"></div>
            </div>
    
            <div class="max-w-xl px-6 py-12 lg:max-w-5xl lg:w-2/3">
                <h2 class="text-2xl font-bold text-gray-800 uppercase dark:text-white md:text-3xl">{{ __('messages.category_title') }} <span class="text-blue-600 dark:text-blue-400">{{ __('messages.category_D') }}</span></h2>
                <p class="mt-4 text-gray-600 dark:text-gray-400">{{ __('messages.category_D_msg') }}</p>
            </div>
        </div>
    </div> 
</section>