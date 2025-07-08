<x-table-row :foreach="$this->books as $book">
    <x-table-cell>{{ $book->id }}</x-table-cell>
    <x-table-cell>{{ $book->title }}</x-table-cell>
</x-table-row>
<x-table-row :forelse>
    <x-table-cell>There is no book.</x-table-cell>
</x-table-row>