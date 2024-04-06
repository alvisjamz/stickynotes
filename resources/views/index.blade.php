<x-layout>
    @include('includes._nav')
    <x-submit-note />
    <div class="lg:grid lg:grid-cols-6">
        @unless (count($notes) == 0)
            @foreach ($notes as $note)
                <div class="p-4">
                    @include('includes._note-card')
                </div>
            @endforeach
        @else
            <p>no notes</p>
        @endunless
    </div>
    <div class="p-4">
        {{ $notes->links() }}
    </div>

</x-layout>
