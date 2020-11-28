<ul class="text-lg divide-y divide-gray-300 md:text-2xl">
    @forelse ($accounts as $account)
    <li class="p-5 flex justify-between">
        <div>
            {{ $account->name }}
        </div>
        <div class="flex">
            <div>
                <p>@euroFormat($account->balance)</p>
                @if(null !== $account->transactionHistories->first())
                <p class="text-sm text-right text-gray-200">@euroFormatWithSign($account->lastTransactionAmount())</p>
                @endif
            </div>
            <a href="route('bank.accounts', ['bankAccount' => $account])" aria-label="{{ __('Link to ' . $account->accountName) }}">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </div>
            </a>
        </div>
    </li>
    @empty
    <p>{{ __('No account') }}</p>
    @endforelse
</ul>