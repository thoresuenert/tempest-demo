<?php
use function \Tempest\uri;
use App\Books\Form\BooksFormController;
?>

<x-datatable href="/books" trigger="book-was-created from:body">
    <x-table-head>ID</x-table-head>
    <x-table-head>Name</x-table-head>
    <x-table-head>actions</x-table-head>

    <x-slot name="actions">
        <x-dialog-trigger target="modal" href="/books/create" > Create Book </x-dialog-trigger>
    </x-slot>

    <x-slot name="results">
        <x-table-row :foreach="$this->books as $book">
            <x-table-cell :book="$book">{{ $book->id }}</x-table-cell>
            <x-table-cell :book="$book">{{ $book->title }}</x-table-cell>
            <x-table-cell :book="$book">
                <x-dialog-trigger target="modal" :href="uri([BooksFormController::class, 'edit'], book: $book->id)" > Edit Book </x-dialog-trigger>
            </x-table-cell>
        </x-table-row>
        <x-table-row :forelse>
            <x-table-cell>There is no book.</x-table-cell>
        </x-table-row>
    </x-slot>
</x-datatable>


