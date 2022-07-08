    {{-- <div class="container">
        <div class="grid grid-cols-4 gap-4">

            @extends('blocks.catalogItemMini')
            @extends('blocks.catalogItemMini')
            @extends('blocks.catalogItemMini')
            @extends('blocks.catalogItemMini')
            @extends('blocks.catalogItemMini')
            @extends('blocks.catalogItemMini')
            @extends('blocks.catalogItemMini')

        </div>
    </div> --}}


    <!--
  This example requires Tailwind CSS v2.0+
  
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
    <div class="bg-white">

        <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
            <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Текущий каталог</h2>

            <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                @for ($i = 0; $i < 10; $i++)
                    @include('blocks.catalogItemMini')
                @endfor
            </div>
        </div>


    </div>
