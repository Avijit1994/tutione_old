@props([
    'onclick'=>null,
    'direction'=>null
])
<tr @if($onclick)onclick="{{$onclick}}"@endif>
    {{ $slot }}
</tr>
