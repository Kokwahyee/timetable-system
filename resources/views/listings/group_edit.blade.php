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
            @if(\Auth::user()->role =='admin')
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
                        value="{{$listing->course}}"
                    />

                    @error('course')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
            </div>

            @else
                <div class="mb-6">
                    <label
                        for="location"
                        class="inline-block text-lg mb-2"
                    >
                        Title:
                    </label>
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-half"
                        name="course"
                        placeholder="Enter Title"
                        value="{{$listing->course}}"
                    />

                    @error('course')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

            @endif
            
            <div class="mb-6">
                <label
                    for="type"
                    class="inline-block text-lg mb-2"
                >
                    Type: 
                </label>
                <select class="form-control" name="type">
                    @if(\Auth::user()->role =='admin')
                        <option value="tutorial" {{ $listing->type == 'tutorial' ? 'selected' : '' }}>Tutorial</option>
                        <option value="lecture" {{ $listing->type == 'lecture' ? 'selected' : '' }}>Lecture</option>
                    @endif
                    <option value="meetup" {{ $listing->type == 'meetup' ? 'selected' : '' }}> Meet Up</option>
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
                    <option value="8-9"{{ $listing->time == '8-9' ? 'selected' : '' }}>8am - 9am</option>
                    <option value="9-10"{{ $listing->time == '9-10' ? 'selected' : '' }}>9am - 10am</option>
                    <option value="10-11"{{ $listing->time == '10-11' ? 'selected' : '' }}>10am - 11am</option>
                    <option value="11-12"{{ $listing->time == '11-12' ? 'selected' : '' }}>11am - 12pm</option>
                    <option value="12-1"{{ $listing->time == '12-1' ? 'selected' : '' }}>12pm - 1pm</option>
                    <option value="1-2"{{ $listing->time == '1-2' ? 'selected' : '' }}>1pm - 2pm</option>
                    <option value="2-3"{{ $listing->time == '2-3' ? 'selected' : '' }}>2pm - 3pm</option>
                    <option value="3-4"{{ $listing->time == '3-4' ? 'selected' : '' }}>3pm - 4pm</option>
                    <option value="4-5"{{ $listing->time == '4-5' ? 'selected' : '' }}>4pm - 5pm</option>
                    <option value="5-6"{{ $listing->time == '5-6' ? 'selected' : '' }}>5pm - 6pm</option>
                    <option value="6-7"{{ $listing->time == '6-7' ? 'selected' : '' }}>6pm - 7pm</option>
                    <option value="7-8"{{ $listing->time == '7-8' ? 'selected' : '' }}>7pm - 8pm</option>
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


                    @if(\Auth::user()->role =='user')
                    <div class="mb-6">
                        <label
                            for="groups"
                            class="inline-block text-lg mb-2"
                        >
                            Group: 
                        </label>
                        <select class="form-control" name="groups">
                            @if(\Auth::user()->groupslot == 'null')
                                <option value="null" {{ $listing->time == '1' ? 'selected' : '' }}>null</option>
                            @endif
                            @if(\Auth::user()->groupslot == '1')
                            <option value="1" {{ $listing->time == '1' ? 'selected' : '' }}> 1 </option>
                            @endif
                            @if(\Auth::user()->groupslot == '2')
                                <option value="2" {{ $listing->time == '1' ? 'selected' : '' }}> 2 </option>
                            @endif
                            @if(\Auth::user()->groupslot == '3')
                                <option value="3" {{ $listing->time == '1' ? 'selected' : '' }}> 3 </option>
                            @endif
                            @if(\Auth::user()->groupslot == '4')
                                <option value="4" {{ $listing->time == '1' ? 'selected' : '' }}> 4 </option>
                            @endif
                            @if(\Auth::user()->groupslot == '5')
                                <option value="5" {{ $listing->time == '1' ? 'selected' : '' }}> 5 </option>
                            @endif
                            @if(\Auth::user()->groupslot == '6')
                                <option value="6" {{ $listing->time == '1' ? 'selected' : '' }}> 6 </option>
                            @endif
                            @if(\Auth::user()->groupslot == '7')
                                <option value="7" {{ $listing->time == '1' ? 'selected' : '' }}> 7 </option>
                            @endif
                            @if(\Auth::user()->groupslot == '8')
                                <option value="8" {{ $listing->time == '1' ? 'selected' : '' }}> 8 </option>
                            @endif
                            @if(\Auth::user()->groupslot == '9')
                                <option value="9" {{ $listing->time == '1' ? 'selected' : '' }}> 9 </option>
                            @endif
                            @if(\Auth::user()->groupslot == '10')
                                <option value="10" {{ $listing->time == '1' ? 'selected' : '' }}> 10 </option>
                            @endif
                            @if(\Auth::user()->groupslot == '11')
                                <option value="11" {{ $listing->time == '1' ? 'selected' : '' }}> 11 </option>
                            @endif
                            @if(\Auth::user()->groupslot == '12')
                                <option value="12" {{ $listing->time == '1' ? 'selected' : '' }}> 12 </option>
                            @endif
                        </select>
                    </div>

                @endif

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Update Timeslot
                </button>

                <a href="/group_index" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </x-card>
</x-layout>
