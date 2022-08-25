<section id="review-form" class="bg-dark-blue dark:bg-cream-white">
    <div class="container px-6 py-8 mx-auto">
        <div class="w-full max-w-2xl px-6 py-4 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
            <h2 class="text-3xl font-bold uppercase text-center text-gray-800 dark:text-white">{{ __('messages.review_add') }}</h2>
            <p class="my-3 text-center text-gray-600 dark:text-gray-400 font-semibold">{{ __('messages.review_title') }}</p>
    
            @if (session()->has('message'))
                <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                    <span class="font-medium"> {{ session('message') }}</span>
                </div>
            @endif

            @if ($success)
                <div class="flex justify-end mt-2">
                    <div id="toast-success" class="flex items-center p-4 mb-4 w-full max-w-xs text-gray-500 bg-white rounded-lg shadow-md dark:text-gray-400 dark:bg-gray-800" role="alert">
                        <div class="inline-flex flex-shrink-0 justify-center items-center w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Check icon</span>
                        </div>
                        <div class="ml-3 text-sm text-green-500 font-bold">Review created successfully!!!</div>
                        <button wire:click="close" type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                    </div>  
                </div> 
            @endif                             

            <form wire:submit.prevent='save'>
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your name</label>
                        <input type="text" wire:model="Name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John Doe" required="">
                        @error('Name') <span class="text-red-500 mt-4 text-sm font-semibold">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email address</label>
                        <input type="email" wire:model="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john.doe@company.com" required="">
                        @error('email') <span class="text-red-500 mt-4 text-sm font-semibold">{{ $message }}</span> @enderror
                    </div> 
                </div>

                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="file_input">Upload file</label>
                    <input id="photo" name="photo" wire:model="photo" type="file" class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                    @error('photo') <span class="text-red-500 mt-4 text-sm font-semibold">{{ $message }}</span> @enderror
                </div>

                <div class="mt-4">
                    <label for="comment" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>   
                    <textarea wire:model.lazy="comment" id="comment" name="comment" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your message..."></textarea>
                    @error('comment') <span class="text-red-500 mt-4 text-sm font-semibold">{{ $message }}</span> @enderror
                </div>

                <div class="lg:flex justify-between gap-2 mt-6">
                    <div class="flex flex-row">
                        <div class="flex items-center">
                            <p class="text-sm lg:text-base font-bold text-gray-900 dark:text-gray-500">Rating:</p>
                        </div>   
                        <div class="flex items-center">
                            <label for="star1">
                                <input hidden wire:model="rating" class="hidden" type="radio" id="star1" name="rating" value="1"/>
                                <svg aria-hidden="true" class="w-5 h-5 cursor-pointer @if($rating >= 1) text-yellow-400 @else text-gray-300 dark:text-gray-500 hover:text-yellow-400 @endif" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>First star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            </label>
                            <label for="star2">
                                <input hidden wire:model="rating" class="hidden" type="radio" id="star2" name="rating" value="2"/>
                                <svg aria-hidden="true" class="w-5 h-5 cursor-pointer @if($rating >= 2) text-yellow-400 @else text-gray-300 dark:text-gray-500 hover:text-yellow-400 @endif" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Second star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            </label>
                            <label for="star3">
                                <input hidden wire:model="rating" class="hidden" type="radio" id="star3" name="rating" value="3" />
                                <svg aria-hidden="true" class="w-5 h-5 cursor-pointer @if($rating >= 3) text-yellow-400 @else text-gray-300 dark:text-gray-500 hover:text-yellow-400 @endif" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Third star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            </label>
                            <label for="star4">
                                <input hidden wire:model="rating" class="hidden" type="radio" id="star4" name="rating" value="4" />
                                <svg aria-hidden="true" class="w-5 h-5 cursor-pointer @if($rating >= 4) text-yellow-400 @else text-gray-300 dark:text-gray-500 hover:text-yellow-400 @endif" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fourth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            </label>
                            <label for="star5">
                                <input hidden wire:model="rating" class="hidden" type="radio" id="star5" name="rating" value="5" />
                                <svg aria-hidden="true" class="w-5 h-5 cursor-pointer @if($rating >= 5) text-yellow-400 @else text-gray-300 dark:text-gray-500 hover:text-yellow-400 @endif" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fifth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            </label>
                        </div>
                    </div>

                    <button type="submit" class="px-15 py-2 mt-4 lg:mt-0 w-full lg:w-52 text-gray-900 dark:text-gray-400 font-bold transition-colors duration-200 transform bg-yellow-400 rounded-md hover:bg-yellow-300 focus:outline-none focus:bg-gray-600">Submit Review</button>
                </div>
            </form>

        </div>
    </div>
</section>