<x-bank.panel class="mt-3">
    <x-slot name="title">
        {{ __('My accounts') }} ({{ $accounts->count() }})
    </x-slot>

    <x-slot name="info">
        <x-bank.account-info>
            <x-slot name="title">
                {{ __('Total balance') }}
            </x-slot>
            <x-slot name="content">
                @euroFormat($accounts->sum('balance'))
            </x-slot>
        </x-bank.account-info>
    </x-slot>

    <x-slot name="content">
        <x-bank.account-list :accounts="$accounts" />
    </x-slot>
</x-bank.panel>