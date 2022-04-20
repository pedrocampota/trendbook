<x-dropdown>
    <x-slot name="trigger">
        <button class="dropdown-button">
            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}

            <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;"/>
        </button>
    </x-slot>

    <x-dropdown-item
        href="/"
        :active="request()->routeIs('home') && is_null(request()->getQueryString())"
    >
        All
    </x-dropdown-item>

    @foreach ($categories as $category)
        <x-dropdown-item
            href="/?categories={{ $category->slug }}"
            :active='request()->fullUrlIs("*?category={$category->slug}*")'
        >
            {{ ucwords($category->name) }}
        </x-dropdown-item>
    @endforeach
</x-dropdown>
