@props(['active', 'navLink'])

@php
$classes = ($active ?? false)
            ? 'active'
            : '';
@endphp

<li class="{{ $classes }}">
    <a href="{{ $navLink }}">{{ $slot }}</a>
</li>
