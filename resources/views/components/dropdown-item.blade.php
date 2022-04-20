@props(['active' => false])

@php
    $classes = 'block text-left px-3 text-sm leading-6 hover:bg-blue-200 focus:bg-blue-500 focus:text-white';
    if ($active) $classes .= ' bg-blue-500 text-white';
@endphp

<a {{ $attributes(['class' => $classes]) }}
style="padding-top: 5px;padding-bottom: 5px;padding-left: 20px;padding-right: 20px;display: block;text-align: left;font-size: 14px;">{{ $slot }}</a>
