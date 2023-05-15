{{-- accept active boolean variable --}}
@props(['active' => false, 'page' => null])

@php
$classes = ($active ?? false)
            ? 'active'
            : '';
@endphp

<li {{ $attributes->merge(['class' => $classes]) }}>
    <a href="/{{ $page->slug }}">
        {{ $slot }}
    </a>
</li>

