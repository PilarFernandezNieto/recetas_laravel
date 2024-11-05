@php
    $classes = "font-bold text-xs text-gray-600 hover:text-gray-700 rounded-md"
@endphp

<a {{$attributes->merge(['class' => $classes])}} >
   {{$slot}}
</a>
