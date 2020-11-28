<div {{ $attributes }}>
    <x-bank.panel-title>
        <x-slot name="title">{{ $title }}</x-slot>
        <x-slot name="info">{{ $info }}</x-slot>
    </x-bank.panel-title>

    <div class="bg-gray-200 dark:bg-gray-600 dark:text-gray-100">
        {{ $content }}
    </div>
</div>