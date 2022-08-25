<section id="review-list" class="bg-white dark:bg-gray-900">
    <div class="container px-6 py-10 mx-auto">        
        <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-10">
            @forelse ($lists as $list)
                <div class="px-12 py-8 transition-colors duration-200 transform border cursor-pointer rounded-xl">
                    <div class="flex flex-col sm:-mx-4 sm:flex-row">
                        {{-- <img class="flex-shrink-0 object-cover w-24 h-24 rounded-full sm:mx-4 ring-4 ring-gray-300" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="Profile Picture"> --}}
                        <img class="flex-shrink-0 object-cover w-24 h-24 rounded-full sm:mx-4 ring-4 ring-blue-300" src="{{ asset('storage') }}/{{ $list['photo'] }}" alt="Profile Picture">

                        <div class="mt-4 sm:mx-4 sm:mt-0">
                            <h1 class="text-xl font-semibold text-gray-700 capitalize md:text-2xl dark:text-white group-hover:text-white">{{ $list['name'] }}</h1>
                            
                            <p class="text-gray-500 dark:text-gray-300 group-hover:text-gray-300">{{ $list['email'] }}</p>
                            <div class="flex flex-row">
                                @for ($i=0; $i < $list['rating']; $i++)
                                    <svg aria-hidden="true" class="w-5 h-5 cursor-pointer text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Second star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                @endfor
                            </div>
                            <span class="text-gray-500 dark:text-gray-300 group-hover:text-gray-300">{{ __('messages.review_start') }} {{ $list['location'] }} {{ __('messages.review_on') }} {{ $list['created_at']->format('F d, Y') }}</span>
                        </div>
                    </div>

                    <hr>

                    <p class="mt-4 text-gray-500 capitalize dark:text-gray-300 group-hover:text-gray-300">{{ $list['comment'] }}</p>
                </div>
            @empty
                <div class="flex flex-col p-5 shadow gap-2 justify-center items-center">
                    <h1 class="text-gray-700 text-xl dark:text-gray-500 font-bold uppercase">{{ __('messages.review_empty_table') }}😢</h1>
                    
                    <svg class="w-12 h-12 fill-amber-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36.5 34.72"><g data-name="Layer 2"><path d="M34.57 6.21H26.25a3.59 3.59 0 01-3.38-2.36h-10A3.59 3.59 0 019.48 6.11H1.93a1.93 1.93 0 110-3.85H9.3A3.61 3.61 0 0112.64 0H23.05a3.59 3.59 0 013.38 2.36h8.14a1.93 1.93 0 110 3.85zM26.88 8.83V29.61a.27.27 0 01-.27.27H9.1a.28.28 0 01-.27-.27V8.83H4V29.61A5.11 5.11 0 009.1 34.72H26.61a5.11 5.11 0 005.11-5.11V8.83z" data-name="Layer 1"/></g></svg>
                </div>
            @endforelse
        </div>
    </div>
</section>