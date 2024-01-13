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
        @foreach ($abouts as $item)
            
        <div
            class="space-y-6 justify-between text-gray-600 md:flex flex-row-reverse md:gap-6 md:space-y-0 lg:gap-12 lg:items-center">
            <div class="md:5/12 lg:w-1/2">
                <img src="{{ asset('images/about/'. $item->image ) }}" alt="image" loading="lazy" width="" height=""
                    class="w-full rounded-full" />
            </div>
            <div class="md:7/12 lg:w-1/2">
                <h2 class="text-3xl font-bold text-gray-900 md:text-4xl dark:text-white">
                    Selamunaleyküm , ben <span class="text-primary dark:text-white">{{ $item->name }} </span>
                </h2>
                <p class="my-8 text-gray-600 dark:text-gray-300">
                    {{ $item->description }}
                </p>
                <div class="divide-y space-y-4 divide-gray-100 dark:divide-gray-800">
                    <div class="mt-8 flex gap-4 md:items-center">
                        <div
                            class="w-12 h-12 flex gap-4 rounded-full bg-teal-100 dark:bg-teal-900/20 justify-center pt-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="teal" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>
                        </div>
                        <div class="w-5/6">
                            <h4 class="font-semibold text-lg text-gray-700 dark:text-teal-300">Engelli olmanın
                                avantajları</h3>
                                <p class="strong text-gray-500 dark:text-gray-200 pb-2">Engelli olmanın birçok avantajı vardır. Bu avantajlardan bazıları şunlardır:</p>
                                <ul class="list-decimal">
                                    <li class="pb-2">
                                        <p class="text-gray-500 dark:text-gray-400">Daha güçlü bir irade ve kararlılık:
                                            Engelli insanlar, hayatlarında birçok zorlukla karşılaşırlar. Bu zorlukların
                                            üstesinden gelmek için güçlü bir irade ve kararlılık geliştirmeleri gerekir.
                                        </p>
                                    </li>
                                    <li class="pb-2">
                                        <p class="text-gray-500 dark:text-gray-400">Daha fazla empati ve anlayış: Engelli insanlar, başkalarının göremediği şeyleri görebilirler. Bu da onların empati ve anlayış duygularını geliştirir.
                                        </p>
                                    </li>
                                    <li class="pb-2">
                                        <p class="text-gray-500 dark:text-gray-400">Daha fazla yardımseverlik: Engelli insanlar, kendileri de zorluklar yaşadıkları için başkalarına yardım etmek isterler. Bu da onların yardımseverlik duygularını geliştirir.
                                        </p>
                                    </li>
                                </ul>
                        </div>
                    </div>
                    <div class="pt-4 flex gap-4 md:items-center">
                        <div class="w-12 h-12 flex gap-4 rounded-full bg-teal-100 dark:bg-rose-900/20">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rose"
                                class="w-6 h-6 m-auto text-teal-600 dark:text-teal-400">
                                <path fill-rule="evenodd"
                                    d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="w-5/6">
                            <h4 class="font-semibold text-lg text-gray-700 dark:text-rose-300">Engelliliğin
                                dezavantajları</h3>
                                <p class="strong text-gray-500 dark:text-gray-200 pb-2">Engellilik, bazı dezavantajlara da neden olabilir. Bu dezavantajlardan bazıları
                                    şunlardır:</p>
                                <ul class="list-disc">
                                    <li class="pb-2">
                                        <p class="text-gray-500 dark:text-gray-400">Fiziksel zorluklar: Engelli
                                            insanlar, bazı fiziksel zorluklar yaşayabilirler. Örneğin, görme engelli
                                            insanlar, görme engelliler için tasarlanmış binaları ve araçları
                                            kullanmalıdırlar.</p>
                                    </li>
                                    <li class="pb-2">
                                        <p class="text-gray-500 dark:text-gray-400">Sosyal zorluklar: Engelli insanlar,
                                            bazı sosyal zorluklar yaşayabilirler. Örneğin, görme engelli insanlar,
                                            toplum tarafından dışlandıkları hissedebilirler.</p>
                                    </li>
                                    <li class="pb-2">
                                        <p class="text-gray-500 dark:text-gray-400">İş bulma zorluğu: Engelli insanlar, iş bulma konusunda dezavantajlı olabilirler. Bazı işverenler, engelli insanların işlerini iyi yapamayacağına inanırlar.</p>
                                    </li>
                                </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endforeach

    </div>
</div>