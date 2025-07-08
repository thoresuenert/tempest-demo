<x-datatable href="/books" trigger="BookWasCreated">
    <x-slot name="actions">
        <x-dialog-trigger target="modal" href="/books/create" > Create Book </x-dialog-trigger>
    </x-slot>

        <x-table-head>ID</x-table-head>
        <x-table-head>Name</x-table-head>

</x-datatable>