@props(['trigger'])

<div x-data="{ show: false }" @click.away="show = false" class="relative">
    {{-- Trigger --}}
    <div @click="show = ! show">
        {{ $trigger }}
    </div>

    {{-- Links --}}
    <div x-show="show" style="background: rgb(243, 244, 246); margin-top: 10px; width: 100%; max-height: 200px; overflow: auto; z-index: 50; border-radius: 12px; position: absolute; display: none">
        {{ $slot }}
    </div>
</div>
