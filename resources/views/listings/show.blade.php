<x-layout>

<a href="/" class="inline-block text-black ml-4 mb-4">
    <i class="fa-solid fa-arrow-left"></i> Back
</a>

<div class="mx-4">
    <x-card class="">
        <div class="lg:grid-cols-2 flex flex-col items-center justify-center text-center">
            <h3 class="text-lg mb-2">Course Code: {{$listing->course}}</h3>
            <h3 class="text-lg mb-2">Type: {{$listing->type}}</h3>
            <div class="text-lg font-bold mb-4">Test Day: {{$listing->day}}</div>
            <div class="text-lg font-bold mb-4">Test time:{{$listing->time}}</div>

            <div class="text-lg my-4">
                <i class="fa-solid fa-location-dot text-lg"></i> Test will be held at {{$listing->location}}
            </div>
            
            </div>
        </div>
    </x-card>

    @if($listing->user_id == auth()->id())
    
        <x-card class="mt-4 p-2 flex space-x-6 flex items-center justify-center w-screen">
            <a href="/listings/{{$listing->id}}/edit">
                <i class="fa-solid fa-pencil"></i> Edit
            </a>
    
            <form method="POST" action="/listings/{{$listing->id}}">
                @csrf
                @method('DELETE')
                <button class="text-red-500">
                    <i class="fa-solid fa-trash"></i>
                    DELETE
                </button>
            </form>
        </x-card>
    @endif
    

</div>

</x-layout>
