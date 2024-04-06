<div
    class="block rounded-lg p-6 text-surface bg-yellow-300 shadow-secondary-1 dark:bg-surface-dark dark:text-black mt-4 shadow-lg border border-gray-500">
    <p class="mb-4 text-base overflow-auto">
        {{ $note->note }}
    </p>
    <form action="{{ route('note.destroy', $note->id) }}" method="post">
        @csrf
        @method('delete')
        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">
            Done
        </button>
    </form>
</div>
