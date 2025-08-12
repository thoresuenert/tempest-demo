<?php
?>
<form class="space-y-6" :hx-put="uri([BooksFormController::class, 'update'], book: $this->book)" hx-target="this">
    <x-csrf-token />

    <x-form-item :book="$this->book">
        <x-input type="text" name="title" value="{{$book->title}}" class="border rounded-md"/>
    </x-form-item>

    <button class="border rounded-md" type="submit">Speichern</button>
</form>