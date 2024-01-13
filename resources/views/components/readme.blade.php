@if ($orthopedics as $item)
    
<div id="solution">
    <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6 pt-36">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-sky-500">
            <path fill-rule="evenodd"
                d="M2.25 13.5a8.25 8.25 0 018.25-8.25.75.75 0 01.75.75v6.75H18a.75.75 0 01.75.75 8.25 8.25 0 01-16.5 0z"
                clip-rule="evenodd" />
            <path fill-rule="evenodd"
                d="M12.75 3a.75.75 0 01.75-.75 8.25 8.25 0 018.25 8.25.75.75 0 01-.75.75h-7.5a.75.75 0 01-.75-.75V3z"
                clip-rule="evenodd" />
        </svg>

        <div
            class="space-y-6 justify-between text-gray-600 md:flex flex-row-reverse md:gap-6 md:space-y-0 lg:gap-12 lg:items-center">
            <div class="md:5/12 lg:w-1/2">
                <img src="{{ asset('images/orthopedic/$item->image') }}" alt="image" loading="lazy" width="" height=""
                    class="w-full rounded-full" />
            </div>
            <div class="md:7/12 lg:w-1/2">
                <h2 class="text-3xl font-bold text-gray-900 md:text-4xl dark:text-white">
                    Selamunaleyküm , ben <span class="text-primary dark:text-white">{{ $item->name }}</span>
                </h2>
                <p class="my-8 text-gray-600 dark:text-gray-300">
                    {{ $item->description }}
                </p>
            </div>
        </div>
    </div>
</div>

@endif