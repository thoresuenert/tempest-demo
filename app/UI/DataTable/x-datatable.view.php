<div class="space-y-8">
    <div class="flex justify-between">
        <input class="form-control" type="search"
               name="search" placeholder="Begin Typing To Search Users..."
               hx-get="{{ $href }}"
               hx-trigger="input changed delay:500ms, keyup[key=='Enter'], load, {{ $trigger }}"
               hx-target="#search-results"
               hx-indicator=".htmx-indicator"
        />
        <div class="flex gap-2">
            <x-slot name="actions" />
        </div>
    </div>

    <div class="border rounded-md">
        <x-table>
            <x-table-header>
                <x-table-row>
                    <x-slot>
                            <x-table-head>ID</x-table-head>
                    </x-slot>
                </x-table-row>
            </x-table-header>
            <x-table-body id="search-results">
            </x-table-body>
        </x-table>
    </div>
</div>