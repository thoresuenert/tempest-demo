<x-base>
    <main>
        <div id="notifications" hx-ext="remove-me"></div>
        <h1>Test</h1>
        <div class="p-12">
           <x-lightning url="/books" />
        </div>
    </main>
    <x-dialog id="modal" />
</x-base>