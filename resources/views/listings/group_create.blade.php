<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24 border-solid border-2">

        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Create Timeslots
            </h2>
            <p class="mb-4"></p>Timeslots</p>
            <br>
        </header>

        <form method="POST" action="/listings" enctype="multipart/form-data">
            @csrf

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
                        value="{{old('course')}}"
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
                        value="{{old('course')}}"
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
                        <option value="tutorial" @if (old('type') == 'tutorial') selected="selected" @endif>Tutorial</option>
                        <option value="lecture" @if (old('type') == 'lecture') selected="selected" @endif>Lecture</option>
                    @endif
                    <option value="meetup" @if (old('type') == 'meetup') selected="selected" @endif> Meet Up</option>
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
                    <option value="8-9" @if (old('time') == '8-9') selected="selected" @endif>8am - 9am</option>
                    <option value="9-10" @if (old('time') == '9-10') selected="selected" @endif>9am - 10am</option>
                    <option value="10-11" @if (old('time') == '10-11') selected="selected" @endif>10am - 11am</option>
                    <option value="11-12" @if (old('time') == '11-12') selected="selected" @endif>11am - 12pm</option>
                    <option value="12-1" @if (old('time') == '12-1') selected="selected" @endif>12pm - 1pm</option>
                    <option value="1-2" @if (old('time') == '1-2') selected="selected" @endif>1pm - 2pm</option>
                    <option value="2-3" @if (old('time') == '2-3') selected="selected" @endif>2pm - 3pm</option>
                    <option value="3-4" @if (old('time') == '3-4') selected="selected" @endif>3pm - 4pm</option>
                    <option value="4-5" @if (old('time') == '4-5') selected="selected" @endif>4pm - 5pm</option>
                    <option value="5-6" @if (old('time') == '5-6') selected="selected" @endif>5pm - 6pm</option>
                    <option value="6-7" @if (old('time') == '6-7') selected="selected" @endif>6pm - 7pm</option>
                    <option value="7-8" @if (old('time') == '7-8') selected="selected" @endif>7pm - 8pm</option>
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
                                <option value="null" @if (old('groups') == 'null') selected="selected" @endif>null</option>
                            @endif

                            @if(\Auth::user()->groupslot == '1')
                            <option value="1" @if (old('groups') == '1') selected="selected" @endif> 1 </option>
                            @endif
                            
                            @if(\Auth::user()->groupslot == '2')
                            <option value="2" @if (old('groups') == '2') selected="selected" @endif> 2 </option>
                            @endif
                            @if(\Auth::user()->groupslot == '3')
                            <option value="3" @if (old('groups') == '3') selected="selected" @endif> 3 </option>
                            @endif
                            @if(\Auth::user()->groupslot == '4')
                            <option value="4" @if (old('groups') == '4') selected="selected" @endif> 4 </option>
                            @endif
                            @if(\Auth::user()->groupslot == '5')
                            <option value="5" @if (old('groups') == '5') selected="selected" @endif> 5 </option>
                            @endif
                            @if(\Auth::user()->groupslot == '6')
                            <option value="6" @if (old('groups') == '6') selected="selected" @endif> 6 </option>
                            @endif
                            @if(\Auth::user()->groupslot == '7')
                            <option value="7" @if (old('groups') == '7') selected="selected" @endif> 7 </option>
                            @endif
                            @if(\Auth::user()->groupslot == '8')
                            <option value="8" @if (old('groups') == '8') selected="selected" @endif> 8 </option>
                            @endif
                            @if(\Auth::user()->groupslot == '9')
                            <option value="9" @if (old('groups') == '9') selected="selected" @endif> 9 </option>
                            @endif
                            @if(\Auth::user()->groupslot == '10')
                            <option value="10" @if (old('groups') == '10') selected="selected" @endif> 10 </option>
                            @endif
                            @if(\Auth::user()->groupslot == '11')
                            <option value="11" @if (old('groups') == '11') selected="selected" @endif> 11 </option>
                            @endif
                            @if(\Auth::user()->groupslot == '12')
                            <option value="12" @if (old('groups') == '12') selected="selected" @endif> 12 </option>
                            @endif
                        </select>
                    </div>
                    @endif
            

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Create Timeslot
                </button>

                <a href="/group_index" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </x-card>
</x-layout>
