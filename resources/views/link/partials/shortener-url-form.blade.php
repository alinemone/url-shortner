<section >
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Shortener Url') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Short long Url") }}
        </p>
    </header>

    <form method="post" action="{{ route('save.shortener.link') }}" class="mt-6 space-y-6 md:inline sm:inline lg:flex lg:justify-between ">
        @csrf
        @method('post')

        @php
            $value = (old('url') !== null) ? old('url') : (isset($url) ? $url : null);
        @endphp

        <div class="w-full  ml-2">
            <x-text-input id="url" name="url" type="text" class="mt-1 block w-full" :value="$value"  required autofocus autocomplete="url" />
            <x-input-error class="mt-2" :messages="$errors->get('url')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('shortener') }}</x-primary-button>
        </div>
    </form>
</section>
