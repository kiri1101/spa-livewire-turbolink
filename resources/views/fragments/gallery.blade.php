<section id="gallery" class="bg-white dark:bg-gray-900">
    <div class="container px-6 py-10 mx-auto">
        <h1 class="text-2xl font-normal mb-2 text-gray-800 uppercase lg:text-4xl dark:text-white"><span class="font-bold">{{ __('messages.photo') }}</span> {{ __('messages.gallery') }}</h1>
        
        <div class="container mx-auto">
            <div class="grid-cols-3 p-10 space-y-2 bg-cream-white lg:space-y-0 lg:grid lg:gap-3 lg:grid-rows-3">
                <div class="w-full rounded">
                    <img src="{{ asset('photos/image-1.jpg') }}"
                        alt="image">
                </div>
                <div class="w-full col-span-2 row-span-2 rounded">
                    <img src="{{ asset('photos/image-2.jpg') }}"
                        alt="image">
                </div>
                <div class="w-full rounded">
                    <img src="{{ asset('photos/image-3.jpg') }}"
                        alt="image">
                </div>
                <div class="w-full rounded">
                    <img src="{{ asset('photos/image-4.jpg') }}"
                        alt="image">
                </div>
                <div class="w-full rounded">
                    <img src="{{ asset('photos/image-6.jpg') }}"
                        alt="image">
                </div>
                <div class="w-full rounded">
                    <img src="{{ asset('photos/image-8.jpg') }}"
                        alt="image">
                </div>
            </div>
        </div>
    </div>
</section>
