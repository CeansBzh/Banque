<x-bank.main>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex flex-wrap overflow-hidden p-3">
        <div class="w-full lg:w-2/5 overflow-hidden px-2 ">
            <x-bank.home-panel :accounts="$user->bankAccounts" />
        </div>
        <div class="w-full lg:w-3/5 px-2">
            <x-bank.container :accounts="$user->bankAccounts">
                <x-slot name="header">
                    <x-bank.container-small-header>
                        {{ __('Weekly balance activity') }}
                    </x-bank.container-small-header>
                </x-slot>
                <x-slot name="content">
                    <p>Graphique d'activité</p>
                </x-slot>
            </x-bank.container>
            <x-bank.container :accounts="$user->bankAccounts">
                <x-slot name="header">
                    <x-bank.container-small-header>
                        {{ __('Latest transactions') }}
                    </x-bank.container-small-header>
                </x-slot>
                <x-slot name="content">
                    <table class="table-auto w-full">
                        <caption class="sr-only">{{ __('Latest transactions') }}</caption>
                        <thead class="sr-only">
                            <tr>
                                <th scope="col">{{ __('Date') }}</th>
                                <th scope="col">{{ __('Message') }}</th>
                                <th scope="col">{{ __('Amount') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($transactionHistories as $i => $transaction)
                            @php $class = ($i % 2 === 0 ? '' : 'bg-gray-100 dark:bg-gray-700'); @endphp
                            <tr class="{{ $class }}">
                                <td class="px-3 py-1">{{ date('d / m', strtotime($transaction->created_at)) }}</td>
                                <td class="px-3 py-1">{{ $transaction->message }}</td>
                                <td class="px-3 py-1 text-right">@euroFormatWithSign($transaction->amount)</td>
                            </tr> @empty <tr>
                                <td>- / -</td>
                                <td>{{ __('No transaction has been registered yet') }}</td>
                                <td>x,xx e</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </x-slot>
            </x-bank.container>
        </div>
    </div>
</x-bank.main>