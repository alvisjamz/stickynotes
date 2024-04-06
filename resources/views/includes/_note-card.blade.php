<div class="max-w-sm rounded overflow-hidden shadow-lg">
    <div class="px-6 py-4">
      <p class="text-gray-700 overflow-hidden text-base">
        {{ $note->note }}
      </p>
    </div>
    <div class="px-6 pt-4 pb-2">
        <form action="{{ route('note.destroy', $note->id) }}" method="post">
            @csrf
            @method('delete')
            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">
                Done
            </button>
        </form>
    </div>
  </div>
