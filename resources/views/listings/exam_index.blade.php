<x-layout>
    <br>
    <span class="font-bold uppercase font-sans flex items-center justify-center w-screen text-xl"> 
        Exam Timetable
    </span>
        
    <div class="flex flex-col">
        <div class="overflow ">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full text-center">
                        <thead class="border-b bg-gray-800 boder-gray-900">
                            <tr>
                                <th scope="col" class="text-sm text-white font-medium px-6 py-4 whitespace-nowrap">
                                    Time 
                                </th>
                                <th scope="col" class="text-sm text-white font-medium px-6 py-4 whitespace-nowrap">
                                    Monday
                                </th>
                                <th scope="col" class="text-sm text-white font-medium px-6 py-4 whitespace-nowrap">
                                    Tuesday
                                </th>
                                <th scope="col" class="text-sm text-white font-medium px-6 py-4 whitespace-nowrap">
                                    Wednesday
                                </th>
                                <th scope="col" class="text-sm text-white font-medium px-6 py-4 whitespace-nowrap">
                                    Thursday
                                </th>
                                <th scope="col" class="text-sm text-white font-medium px-6 py-4 whitespace-nowrap">
                                    Friday
                                </th>
                            </tr>
                        </thead>
    
              
                        <tbody>
                            
                                <tr class="border-b bg-blue-100 border-blue-200">
                                    
                                    <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                        9am-12pm
                                    </td>
                                
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        
                                        @foreach($listings as $listing) {{-- for loop--}}
                                            @if ($listing->day == 'monday')
                                                @if ($listing->time == '9-12')
                                                    @if($listing->type=='exam')
                                                        @if(\Auth::user()->role =='admin')
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
    
                                                        @if(\Auth::user()->course1 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if(\Auth::user()->course2 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if(\Auth::user()->course3 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if(\Auth::user()->course4 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    @endif
                                                @endif
                                            @endif
                                        @endforeach
    
                                    </td>
                                
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
    
                                        @foreach($listings as $listing) {{-- for loop--}}
                                            @if ($listing->day == 'tuesday')
                                                @if ($listing->time == '9-12')
                                                    @if($listing->type=='exam')
                                                        @if(\Auth::user()->role =='admin')
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
    
                                                        @if(\Auth::user()->course1 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if(\Auth::user()->course2 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if(\Auth::user()->course3 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if(\Auth::user()->course4 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    @endif
                                                @endif
                                            @endif
                                        @endforeach
    
                                    </td>
    
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
    
                                        @foreach($listings as $listing) {{-- for loop--}}
                                            @if ($listing->day == 'wednesday')
                                                @if ($listing->time == '9-12')
                                                    @if($listing->type=='exam')
                                                        @if(\Auth::user()->role =='admin')
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
    
                                                        @if(\Auth::user()->course1 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if(\Auth::user()->course2 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if(\Auth::user()->course3 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if(\Auth::user()->course4 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    @endif
                                                @endif
                                            @endif
                                        @endforeach
    
                                    </td>
    
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
    
                                        @foreach($listings as $listing) {{-- for loop--}}
                                            @if ($listing->day == 'thursday')
                                                @if ($listing->time == '9-12')
                                                    @if($listing->type=='exam')
                                                        @if(\Auth::user()->role =='admin')
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
    
                                                        @if(\Auth::user()->course1 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if(\Auth::user()->course2 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if(\Auth::user()->course3 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if(\Auth::user()->course4 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    @endif
                                                @endif
                                            @endif
                                        @endforeach
    
                                    </td>
    
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
    
                                        @foreach($listings as $listing) {{-- for loop--}}
                                            @if ($listing->day == 'friday')
                                                @if ($listing->time == '9-12')
                                                    @if($listing->type=='exam')
                                                        @if(\Auth::user()->role =='admin')
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
    
                                                        @if(\Auth::user()->course1 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if(\Auth::user()->course2 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if(\Auth::user()->course3 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if(\Auth::user()->course4 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    @endif
                                                @endif
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
    
                            <tr class="border-b bg-purple-100 border-purple-200">
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                12am-3pm
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
    
                                @foreach($listings as $listing) {{-- for loop--}}
                                            @if ($listing->day == 'monday')
                                                @if ($listing->time == '12-3')
                                                    @if($listing->type=='exam')
                                                        @if(\Auth::user()->role =='admin')
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
    
                                                        @if(\Auth::user()->course1 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if(\Auth::user()->course2 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if(\Auth::user()->course3 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if(\Auth::user()->course4 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    @endif
                                                @endif
                                            @endif
                                        @endforeach
    
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
    
                                @foreach($listings as $listing) {{-- for loop--}}
                                            @if ($listing->day == 'tuesday')
                                                @if ($listing->time == '12-3')
                                                    @if($listing->type=='exam')
                                                        @if(\Auth::user()->role =='admin')
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
    
                                                        @if(\Auth::user()->course1 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if(\Auth::user()->course2 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if(\Auth::user()->course3 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if(\Auth::user()->course4 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    @endif
                                                @endif
                                            @endif
                                        @endforeach
    
    
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
    
                                @foreach($listings as $listing) {{-- for loop--}}
                                            @if ($listing->day == 'wednesday')
                                                @if ($listing->time == '12-3')
                                                    @if($listing->type=='exam')
                                                        @if(\Auth::user()->role =='admin')
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
    
                                                        @if(\Auth::user()->course1 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if(\Auth::user()->course2 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if(\Auth::user()->course3 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if(\Auth::user()->course4 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    @endif
                                                @endif
                                            @endif
                                        @endforeach
    
    
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
    
                                @foreach($listings as $listing) {{-- for loop--}}
                                            @if ($listing->day == 'thursday')
                                                @if ($listing->time == '12-3')
                                                    @if($listing->type=='exam')
                                                        @if(\Auth::user()->role =='admin')
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
    
                                                        @if(\Auth::user()->course1 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if(\Auth::user()->course2 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if(\Auth::user()->course3 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if(\Auth::user()->course4 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    @endif
                                                @endif
                                            @endif
                                        @endforeach
    
    
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
    
                                @foreach($listings as $listing) {{-- for loop--}}
                                            @if ($listing->day == 'friday')
                                                @if ($listing->time == '12-3')
                                                    @if($listing->type=='exam')
                                                        @if(\Auth::user()->role =='admin')
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
    
                                                        @if(\Auth::user()->course1 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if(\Auth::user()->course2 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if(\Auth::user()->course3 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if(\Auth::user()->course4 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    @endif
                                                @endif
                                            @endif
                                        @endforeach
    
    
                            </td>
                            </tr>
    
                            <tr class="border-b bg-blue-100 border-blue-200">
                                <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                3pm-6pm
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                
                                    @foreach($listings as $listing) {{-- for loop--}}
                                            @if ($listing->day == 'monday')
                                                @if ($listing->time == '3-6')
                                                    @if($listing->type=='exam')
                                                        @if(\Auth::user()->role =='admin')
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
    
                                                        @if(\Auth::user()->course1 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if(\Auth::user()->course2 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if(\Auth::user()->course3 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if(\Auth::user()->course4 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    @endif
                                                @endif
                                            @endif
                                        @endforeach
    
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                
                                    @foreach($listings as $listing) {{-- for loop--}}
                                            @if ($listing->day == 'tuesday')
                                                @if ($listing->time == '3-6')
                                                    @if($listing->type=='exam')
                                                        @if(\Auth::user()->role =='admin')
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
    
                                                        @if(\Auth::user()->course1 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if(\Auth::user()->course2 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if(\Auth::user()->course3 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if(\Auth::user()->course4 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    @endif
                                                @endif
                                            @endif
                                        @endforeach
    
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                
                                    @foreach($listings as $listing) {{-- for loop--}}
                                            @if ($listing->day == 'wednesday')
                                                @if ($listing->time == '3-6')
                                                    @if($listing->type=='exam')
                                                        @if(\Auth::user()->role =='admin')
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
    
                                                        @if(\Auth::user()->course1 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if(\Auth::user()->course2 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if(\Auth::user()->course3 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if(\Auth::user()->course4 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    @endif
                                                @endif
                                            @endif
                                        @endforeach
    
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
    
                                    @foreach($listings as $listing) {{-- for loop--}}
                                            @if ($listing->day == 'thursday')
                                                @if ($listing->time == '3-6')
                                                    @if($listing->type=='exam')
                                                        @if(\Auth::user()->role =='admin')
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
    
                                                        @if(\Auth::user()->course1 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if(\Auth::user()->course2 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if(\Auth::user()->course3 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if(\Auth::user()->course4 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    @endif
                                                @endif
                                            @endif
                                        @endforeach
    
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                
                                    @foreach($listings as $listing) {{-- for loop--}}
                                            @if ($listing->day == 'friday')
                                                @if ($listing->time == '3-6')
                                                    @if($listing->type=='exam')
                                                        @if(\Auth::user()->role =='admin')
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
    
                                                        @if(\Auth::user()->course1 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if(\Auth::user()->course2 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if(\Auth::user()->course3 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if(\Auth::user()->course4 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    @endif
                                                @endif
                                            @endif
                                        @endforeach
                                </td>
                            </tr>
                    </tbody>
                
                </table>
                <br>     
                <br>
                <br>
                </div>
            </div>
        </div>
    </div>
    
    </x-layout>
    