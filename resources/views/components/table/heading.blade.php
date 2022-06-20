@props([
    'sortable'=>null,
    'direction'=>null
])

<th scope="col">
    @unless($sortable)
        {{ $slot }}
    @else
        {{ $slot }}
        @if($direction == 'asc')
            <i class="bi bi-arrow-up-short"></i>
        @endif

        @if($direction == 'desc')
            <i class="bi bi-arrow-down-short"></i>
        @endif
    @endif
</th>
