<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Token Authorization') }}
        </h2>
    </header>


    <div>
        <x-text-input id="token" name="token" type="text" class="mt-1 block w-full"
                      value="{{Cookie::get('accessToken')}}" readonly="readonly"/>
    </div>

</section>
