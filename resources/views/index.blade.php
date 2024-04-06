<x-layout>
    @include('includes._success-msg')
    @include('includes._submit-note')
    <div class="lg:grid lg:grid-cols-6 gap-4 space-y-4 md:space-y-0 mx-4">
        @unless (count($notes) == 0)
            @foreach ($notes as $note)
                <div class="mt-3">
                    @include('includes._note-card')
                </div>
            @endforeach
            @else
            <p>no notes</p>
        @endunless
    </div>

    {{ $notes->links() }}
</x-layout>
