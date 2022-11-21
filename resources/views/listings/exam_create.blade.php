<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24 border-solid border-2">

        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Create Timeslots
            </h2>
            <p class="mb-4"></p>Timeslots for Exam</p>
            <br>
        </header>

        <form method="POST" action="/examlistings" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label
                    for="location"
                    class="inline-block text-lg mb-2"
                >
                    Course Code
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-half"
                    name="course"
                    placeholder="Enter Course Code"
                    value="{{old('course')}}"
                />

                @error('course')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="type"
                    class="inline-block text-lg mb-2"
                >
                    Type: 
                </label>
                <select class="form-control" name="type">
                    <option value="exam" @if (old('type') == 'exam') selected="selected" @endif>Exam</option>
                </select>
            </div>

            <div class="mb-6">
                <label for="day" class="inline-block text-lg mb-2">Day</label>

                <select class="form-control" name="day">
                    <option value="monday" @if (old('day') == 'monday') selected="selected" @endif>Monday</option>
                    <option value="tuesday" @if (old('day') == 'tuesday') selected="selected" @endif>Tuesday</option>
                    <option value="wednesday" @if (old('day') == 'wednesday') selected="selected" @endif>Wednesday</option>
                    <option value="thursday" @if (old('day') == 'thursday') selected="selected" @endif>Thursday</option>
                    <option value="friday" @if (old('day') == 'friday') selected="selected" @endif>Friday</option>
                </select>

            </div>

            <div class="mb-6">
                <label
                    for="time"
                    class="inline-block text-lg mb-2"
                    >Time</label
                >
                
                <select class="form-control" name="time">
                    <option value="9-12" @if (old('time') == '9-12') selected="selected" @endif>9am - 12am</option>
                    <option value="12-3" @if (old('time') == '12-3') selected="selected" @endif>12am - 3pm</option>
                    <option value="3-6" @if (old('time') == '3-6') selected="selected" @endif>3pm - 6pm</option>
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
                    value="{{old('location')}}"
                />

                @error('location')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror

            </div>

            

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Create Timeslot
                </button>

                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </x-card>
</x-layout>
