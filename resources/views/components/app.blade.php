<x-master>
    <section class="px-4">
        <main class="container mx-auto">
            <div class="lg:flex lg:justify-between">
                @if (auth()->check())
                    <div class="lg:w-1/6 mb-2">
                        @include('_dashboard')
                    </div>
                @endif

                @if (auth()->check())
                    <div class="lg:flex-1 lg:mx-10 mb-2">
                        {{ $slot }}
                    </div>
                @endif

                @if (auth()->check())
                    <div class="lg:w-1/5 mb-2">
                        @include('_notifications')
                    </div>
                @endif
            </div>
        </main>
    </section>
</x-master>
