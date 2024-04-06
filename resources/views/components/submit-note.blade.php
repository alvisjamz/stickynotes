<x-layout>
    <form action="{{ route('note.create') }}" class="max-w-sm mx-auto mt-6" method="post">
        @csrf
        <input name="content"
            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Enter note">
        @error('content')
            <span class="text-red-500 mt-2">{{ $message }}</span>
        @enderror
        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full mt-2">
            Add </button>
    </form>
</x-layout>
