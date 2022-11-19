<x-layout>

<a href="/group_index" class="inline-block text-black ml-4 mb-4">
    <i class="fa-solid fa-arrow-left"></i> Back
</a>

<div class="mx-4">
    <x-card class="">
        <div class="lg:grid-cols-2 flex flex-col items-center justify-center text-center">
            <h1 class="text-lg mb-2" style="text-transform:uppercase;" >{{$listing->course}}</h1>
            <h2 class="text-lg mb-2" style="text-transform:uppercase;">Type: {{$listing->type}}</h2>
            <div class="text-lg font-bold mb-4" style="text-transform:uppercase;">Day: {{$listing->day}}</div>
            <div class="text-lg font-bold mb-4" style="text-transform:uppercase;">Time: {{$listing->time}}</div>
            
            <div class="text-lg my-4">
                <i class="fa-solid fa-location-dot text-lg"style="text-transform:uppercase;"></i> Will be held at {{$listing->location}}
            </div>
            
            </div>
        </div>
    </x-card>

    @if($listing->user_id == auth()->id())
    
        @if($listing->type == 'short test')
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

        @if($listing->type == 'exam')
            <x-card class="mt-4 p-2 flex space-x-6 flex items-center justify-center w-screen">
                <a href="/listings/{{$listing->id}}/exam_edit">
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

        @if($listing->type == 'meetup')
            <x-card class="mt-4 p-2 flex space-x-6 flex items-center justify-center w-screen">
                <a href="/listings/{{$listing->id}}/group_edit">
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

        @if($listing->type == 'lecture')
            <x-card class="mt-4 p-2 flex space-x-6 flex items-center justify-center w-screen">
                <a href="/listings/{{$listing->id}}/group_edit">
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
        
        @if($listing->type == 'tutorial')
            <x-card class="mt-4 p-2 flex space-x-6 flex items-center justify-center w-screen">
                <a href="/listings/{{$listing->id}}/group_edit">
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

    @endif
    

</div>

</x-layout>
