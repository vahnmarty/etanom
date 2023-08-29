@props(['active' => false, 'align' => 'center'])

<li class="px-8 py-2 text-sm transition rounded-md {{ $active ? 'bg-blue-100 text-blue-700 font-bold' : 'hover:bg-gray-200 text-gray-600' }}">
    <a {{ $attributes }} class="inline-flex items-{{ $align }} w-full gap-3">
        {{ $icon }}
        <span>{{ $slot }}</span>
    </a>
</li>