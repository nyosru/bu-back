<div>
    список товаров

    <div class="text-center">
        
        @foreach ($items as $i)
            @include('blocks.itemListItem', ['i' => $i])
        @endforeach

        {{-- <pre>
    {{ print_r($items) }}
    </pre> --}}
    </div>
    <br clear="all" />
</div>
