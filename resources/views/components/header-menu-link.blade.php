@props(['label', 'active' => false])

<a 
{{ $attributes }} 
class="md:text-lg font-semibold transition-all duration-100 ease-in hover:text-light-green {{ $active ? 'text-light-green' : 'text-gray-900' }}" 
>{{ $label }}</a>