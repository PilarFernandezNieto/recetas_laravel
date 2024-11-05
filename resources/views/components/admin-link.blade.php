@php
    $classes = "inline-flex items-center px-4 py-2 bg-amber-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-amber-700 focus:bg-amber-700 active:bg-amber-900 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-offset-2 transition ease-in-out duration-150 my-10 mx-6"
@endphp

<a {{$attributes->merge(['class' => $classes])}} >
   {{$slot}}
</a>
