<dialog id="{{ $id }}"
        class="rounded-lg shadow-lg w-3/4">
    <div class="w-full">
        <div class="font-bold text-black text-lg border-b p-4">
            <div class="float-right cursor-pointer text-gray-400 hover:text-gray-600 transition"
                 onclick="window.{{ $id }}.close()"
            >
                <svg xmlns="http://www.w3.org/2000/svg"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke-width="1.5"
                     stroke="currentColor"
                     class="size-6">
                    <path stroke-linecap="round"
                          stroke-linejoin="round"d="M6 18 18 6M6 6l12 12" />
                </svg>
            </div>
            Dynamic Modal Example
        </div>

        <div id="modal-content">
            <div class="p-8 text-center text-xl text-gray-400">
                Loading....
            </div>
        </div>
    </div>
</dialog>