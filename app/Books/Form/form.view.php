<form
    class="space-y-6"
    hx-post="/books"
    hx-target="this"
    hx-on:book-was-created="window.modal.close();window.modal_content.innerHTML='';"
>
    <x-csrf-token />
    <x-form-item>
    <x-input type="text" name="title" class="border rounded-md"/>
    </x-form-item>
    <button class="border rounded-md" type="submit">Speichern</button>
</form>