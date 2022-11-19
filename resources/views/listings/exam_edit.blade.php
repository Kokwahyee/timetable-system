<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">

        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Edit Timeslots
            </h2>
            <p class="mb-4">For Exam/Short Test</p>
        </header>

        <form method="POST" action="/listings/{{$listing->id}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label
                    for="course"
                    class="inline-block text-lg mb-2"
                >
                    Course Code
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-half"
                    name="course"
                    placeholder="Enter Course Code"
                    value="{{$listing->course}}"
                />

                @error('course')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            
            <div class="mb-6">
                <label for="type" class="inline-block text-lg mb-2">Type</label>
               
                <select class="form-control" name="day">
                    <option value="exam" {{ $listing->type == 'exam' ? 'selected' : '' }}>Exam</option>
                    </select>
            </div>

            <div class="mb-6">
                <label for="day" class="inline-block text-lg mb-2">Day</label>

                <select class="form-control" name="day">
                    <option value="monday" {{ $listing->day == 'monday' ? 'selected' : '' }}>Monday</option>
                    <option value="tuesday"{{ $listing->day == 'tuesday' ? 'selected' : '' }}>Tuesday</option>
                    <option value="wednesday"{{ $listing->day == 'wednesday' ? 'selected' : '' }}>Wednesday</option>
                    <option value="thursday"{{ $listing->day == 'thursday' ? 'selected' : '' }}>Thursday</option>
                    <option value="friday"{{ $listing->day == 'friday' ? 'selected' : '' }}>Friday</option>
                </select>
            </div>

            <div class="mb-6">
                <label
                    for="time"
                    class="inline-block text-lg mb-2"
                    >Time</label
                >
                <select class="form-control" name="time">
                    <option value="9-12"{{ $listing->time == '9-12' ? 'selected' : '' }}>9am - 12pm</option>
                    <option value="12-3"{{ $listing->time == '12-3' ? 'selected' : '' }}>12pm - 3pm</option>
                    <option value="3-6"{{ $listing->time == '3-6' ? 'selected' : '' }}>3pm - 6pm</option>
                </select>

            </div>

            <div class="mb-6">
                <label
                    for="location"
                    class="inline-block text-lg mb-2"
                >
                    Location
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-half"
                    name="location"
                    placeholder="Enter Location"
                    value="{{$listing->location}}"
                />

                @error('location')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror

            </div>

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Update Timeslot
                </button>

                <a href="/group_index" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </x-card>
</x-layout>
