<x-layout>
    <br>
    <span class="font-bold uppercase font-sans flex items-center justify-center w-screen text-xl"> 
        Student Timetable
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
                                        8am - 9am
                                    </td>
                                
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        @if(\Auth::user()->role=='user')
                                        @foreach($users as $user)
                                            @foreach($listings as $listing) {{-- for loop--}}
                                                @if ($listing->day == 'monday')
                                                    @if ($listing->time == '8-9')
                                                        @if(\Auth::user()->groupslot ==$listing->groups || $listing->groups == 'null' )
                                                            @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                                <x-card>
                                                                    <div>
                                                                        <div>
                                                                            
                                                                            <h3 class="text-sm" style="text-transform:uppercase;">
                                                                                <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                            </h3>
                                                                            <h3 class="text-sm" style="text-transform:uppercase;">
                                                                                <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                            </h3>
                                                                            {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
                
                                                                            <div class="text-sm" style="text-transform:uppercase;">
                                                                                <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </x-card>
                                                            @endif

                                                            @if($user->course1 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                        </h3>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
            
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                            @endif
                                                    
                                                        @if($user->course2 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                        </h3>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
            
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if($user->course3 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                        </h3>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
            
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if($user->course4 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                        </h3>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                            @endforeach
                                            @endif
                                            @if(\Auth::user()->role=='admin')       
                                                
                                                    @foreach($listings as $listing)
                                                        @if($listing->day == 'monday' && $listing->time == '8-9')
                                                            @if($listing->type == 'tutorial')
                                                                <x-card>
                                                                    <div>
                                                                        <div>
                                                                            
                                                                            <h3 class="text-sm" style="text-transform:uppercase;">
                                                                                <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                            </h3>
                                                                            {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                            <div class="text-sm" style="text-transform:uppercase;">
                                                                                <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </x-card>
                                                            @endif
                                                            @if($listing->type == 'lecture')
                                                                <x-card>
                                                                    <div>
                                                                        <div>
                                                                            
                                                                            <h3 class="text-sm" style="text-transform:uppercase;">
                                                                                <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                                    @endforeach
                                                
                                            @endif
                                    </td>
                                
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        @if(\Auth::user()->role == 'user')
                                        @foreach($users as $user)
                                            @foreach($listings as $listing) {{-- for loop--}}
                                                @if ($listing->day == 'tuesday')
                                                    @if ($listing->time == '8-9')
                                                        @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                            @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                                <x-card>
                                                                    <div>
                                                                        <div>
                                                                            
                                                                            <h3 class="text-sm" style="text-transform:uppercase;">
                                                                                <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                            </h3>
                                                                            <h3 class="text-sm" style="text-transform:uppercase;">
                                                                                <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                            </h3>
                                                                            {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
                
                                                                            <div class="text-sm" style="text-transform:uppercase;">
                                                                                <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </x-card>
                                                            @endif

                                                            @if($user->course1 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                        </h3>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
            
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                            @endif
                                                    
                                                        @if($user->course2 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                        </h3>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
            
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if($user->course3 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                        </h3>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
            
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if($user->course4 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                        </h3>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                            @endforeach
                                            @endif
                                            
                                            @if(\Auth::user()->role=='admin')       
                                                
                                                    @foreach($listings as $listing)
                                                        @if($listing->day == 'tuesday' && $listing->time == '8-9')
                                                            @if($listing->type == 'tutorial')
                                                                <x-card>
                                                                    <div>
                                                                        <div>
                                                                            
                                                                            <h3 class="text-sm" style="text-transform:uppercase;">
                                                                                <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                            </h3>
                                                                            {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                            <div class="text-sm" style="text-transform:uppercase;">
                                                                                <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </x-card>
                                                            @endif
                                                            @if($listing->type == 'lecture')
                                                                <x-card>
                                                                    <div>
                                                                        <div>
                                                                            
                                                                            <h3 class="text-sm" style="text-transform:uppercase;">
                                                                                <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                                    @endforeach
                                                
                                            @endif
                                    </td>
    
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        @if(\Auth::user()->role=='user')
                                        @foreach($users as $user)
                                            @foreach($listings as $listing) {{-- for loop--}}
                                                @if ($listing->day == 'wednesday')
                                                    @if ($listing->time == '8-9')
                                                        @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                            @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                                <x-card>
                                                                    <div>
                                                                        <div>
                                                                            
                                                                            <h3 class="text-sm" style="text-transform:uppercase;">
                                                                                <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                            </h3>
                                                                            <h3 class="text-sm" style="text-transform:uppercase;">
                                                                                <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                            </h3>
                                                                            {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
                
                                                                            <div class="text-sm" style="text-transform:uppercase;">
                                                                                <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </x-card>
                                                            @endif

                                                            @if($user->course1 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                        </h3>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
            
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                            @endif
                                                    
                                                        @if($user->course2 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                        </h3>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
            
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if($user->course3 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                        </h3>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
            
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if($user->course4 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                        </h3>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                            @endforeach
                                            @else       
                                                
                                                    @foreach($listings as $listing)
                                                        @if($listing->day == 'wednesday' && $listing->time == '8-9')
                                                            @if($listing->type == 'tutorial')
                                                                <x-card>
                                                                    <div>
                                                                        <div>
                                                                            
                                                                            <h3 class="text-sm" style="text-transform:uppercase;">
                                                                                <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                            </h3>
                                                                            {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                            <div class="text-sm" style="text-transform:uppercase;">
                                                                                <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </x-card>
                                                            @endif
                                                            @if($listing->type == 'lecture')
                                                                <x-card>
                                                                    <div>
                                                                        <div>
                                                                            
                                                                            <h3 class="text-sm" style="text-transform:uppercase;">
                                                                                <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                                    @endforeach
                                                
                                            @endif
                                    </td>
    
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        @if(\Auth::user()->role=='user')
                                        @foreach($users as $user)
                                            @foreach($listings as $listing) {{-- for loop--}}
                                                @if ($listing->day == 'thursday')
                                                    @if ($listing->time == '8-9')
                                                        @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                            @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                                <x-card>
                                                                    <div>
                                                                        <div>
                                                                            
                                                                            <h3 class="text-sm" style="text-transform:uppercase;">
                                                                                <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                            </h3>
                                                                            <h3 class="text-sm" style="text-transform:uppercase;">
                                                                                <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                            </h3>
                                                                            {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
                
                                                                            <div class="text-sm" style="text-transform:uppercase;">
                                                                                <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </x-card>
                                                            @endif

                                                            @if($user->course1 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                        </h3>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
            
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                            @endif
                                                    
                                                        @if($user->course2 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                        </h3>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
            
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if($user->course3 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                        </h3>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
            
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if($user->course4 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                        </h3>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                            @endforeach
                                            @else       
                                                
                                                    @foreach($listings as $listing)
                                                        @if($listing->day == 'thursday' && $listing->time == '8-9')
                                                            @if($listing->type == 'tutorial')
                                                                <x-card>
                                                                    <div>
                                                                        <div>
                                                                            
                                                                            <h3 class="text-sm" style="text-transform:uppercase;">
                                                                                <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                            </h3>
                                                                            {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                            <div class="text-sm" style="text-transform:uppercase;">
                                                                                <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </x-card>
                                                            @endif
                                                            @if($listing->type == 'lecture')
                                                                <x-card>
                                                                    <div>
                                                                        <div>
                                                                            
                                                                            <h3 class="text-sm" style="text-transform:uppercase;">
                                                                                <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                                    @endforeach
                                                
                                            @endif
                                    </td>
    
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        @if(\Auth::user()->role=='user')
                                        @foreach($users as $user)
                                            @foreach($listings as $listing) {{-- for loop--}}
                                                @if ($listing->day == 'friday')
                                                    @if ($listing->time == '8-9')
                                                        @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                            @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                                <x-card>
                                                                    <div>
                                                                        <div>
                                                                            
                                                                            <h3 class="text-sm" style="text-transform:uppercase;">
                                                                                <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                            </h3>
                                                                            <h3 class="text-sm" style="text-transform:uppercase;">
                                                                                <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                            </h3>
                                                                            {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
                
                                                                            <div class="text-sm" style="text-transform:uppercase;">
                                                                                <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </x-card>
                                                            @endif

                                                            @if($user->course1 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                        </h3>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
            
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                            @endif
                                                    
                                                        @if($user->course2 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                        </h3>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
            
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if($user->course3 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                        </h3>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
            
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                    
                                                        @if($user->course4 ==$listing->course)
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                        </h3>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                            @endforeach
                                            @else       
                                                
                                                    @foreach($listings as $listing)
                                                        @if($listing->day == 'friday' && $listing->time == '8-9')
                                                            @if($listing->type == 'tutorial')
                                                                <x-card>
                                                                    <div>
                                                                        <div>
                                                                            
                                                                            <h3 class="text-sm" style="text-transform:uppercase;">
                                                                                <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                            </h3>
                                                                            {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                            <div class="text-sm" style="text-transform:uppercase;">
                                                                                <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </x-card>
                                                            @endif
                                                            @if($listing->type == 'lecture')
                                                                <x-card>
                                                                    <div>
                                                                        <div>
                                                                            
                                                                            <h3 class="text-sm" style="text-transform:uppercase;">
                                                                                <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                                    @endforeach
                                                
                                            @endif
                                    </td>
                                </tr>
    
                            <tr class="border-b bg-purple-100 border-purple-200">
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                9am - 10am
                            </td>
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                @if(\Auth::user()->role=='user')
                                @foreach($users as $user)
                                    @foreach($listings as $listing) {{-- for loop--}}
                                        @if ($listing->day == 'monday')
                                            @if ($listing->time == '9-10')
                                                @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                    @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif

                                                    @if($user->course1 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                    @endif
                                            
                                                @if($user->course2 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course3 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course4 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                    @endforeach
                                    @else       
                                        
                                            @foreach($listings as $listing)
                                                @if($listing->day == 'monday' && $listing->time == '9-10')
                                                    @if($listing->type == 'tutorial')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                    @if($listing->type == 'lecture')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                            @endforeach
                                        
                                    @endif
                            </td>
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                @if(\Auth::user()->role=='user')
                                @foreach($users as $user)
                                    @foreach($listings as $listing) {{-- for loop--}}
                                        @if ($listing->day == 'tuesday')
                                            @if ($listing->time == '9-10')
                                                @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                    @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif

                                                    @if($user->course1 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                    @endif
                                            
                                                @if($user->course2 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course3 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course4 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                    @endforeach
                                    @else       
                                        
                                            @foreach($listings as $listing)
                                                @if($listing->day == 'tuesday' && $listing->time == '9-10')
                                                    @if($listing->type == 'tutorial')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                    @if($listing->type == 'lecture')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                            @endforeach
                                        
                                    @endif
                            </td>

                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                @if(\Auth::user()->role=='user')
                                @foreach($users as $user)
                                    @foreach($listings as $listing) {{-- for loop--}}
                                        @if ($listing->day == 'wednesday')
                                            @if ($listing->time == '9-10')
                                                @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                    @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif

                                                    @if($user->course1 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                    @endif
                                            
                                                @if($user->course2 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course3 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course4 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                    @endforeach
                                    @else       
                                        
                                            @foreach($listings as $listing)
                                                @if($listing->day == 'wednesday' && $listing->time == '9-10')
                                                    @if($listing->type == 'tutorial')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                    @if($listing->type == 'lecture')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                            @endforeach
                                        
                                    @endif
                            </td>

                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                @if(\Auth::user()->role=='user')
                                @foreach($users as $user)
                                    @foreach($listings as $listing) {{-- for loop--}}
                                        @if ($listing->day == 'thursday')
                                            @if ($listing->time == '9-10')
                                                @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                    @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif

                                                    @if($user->course1 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                    @endif
                                            
                                                @if($user->course2 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course3 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course4 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                    @endforeach
                                    @else       
                                        
                                            @foreach($listings as $listing)
                                                @if($listing->day == 'thursday' && $listing->time == '9-10')
                                                    @if($listing->type == 'tutorial')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                    @if($listing->type == 'lecture')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                            @endforeach
                                        
                                    @endif
                            </td>

                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                @if(\Auth::user()->role=='user')
                                @foreach($users as $user)
                                    @foreach($listings as $listing) {{-- for loop--}}
                                        @if ($listing->day == 'friday')
                                            @if ($listing->time == '9-10')
                                                @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                    @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif

                                                    @if($user->course1 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                    @endif
                                            
                                                @if($user->course2 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course3 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course4 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                    @endforeach
                                    @else       
                                        
                                            @foreach($listings as $listing)
                                                @if($listing->day == 'friday' && $listing->time == '9-10')
                                                    @if($listing->type == 'tutorial')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                    @if($listing->type == 'lecture')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                            @endforeach
                                        
                                    @endif
                            </td>
                            </tr>
    
                            <tr class="border-b bg-blue-100 border-blue-200">
                                <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                10am - 11am
                                </td>
                                
                                <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                    @if(\Auth::user()->role=='user')
                                    @foreach($users as $user)
                                        @foreach($listings as $listing) {{-- for loop--}}
                                            @if ($listing->day == 'monday')
                                                @if ($listing->time == '10-11')
                                                    @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                        @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                        </h3>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
            
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
    
                                                        @if($user->course1 ==$listing->course)
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                        @endif
                                                
                                                    @if($user->course2 ==$listing->course)
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                
                                                    @if($user->course3 ==$listing->course)
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                
                                                    @if($user->course4 ==$listing->course)
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                        @endforeach
                                        @else       
                                            
                                                @foreach($listings as $listing)
                                                    @if($listing->day == 'monday' && $listing->time == '10-11')
                                                        @if($listing->type == 'tutorial')
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                        @if($listing->type == 'lecture')
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                                @endforeach
                                            
                                        @endif
                                </td>


                                <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                    @if(\Auth::user()->role=='user')
                                    @foreach($users as $user)
                                        @foreach($listings as $listing) {{-- for loop--}}
                                            @if ($listing->day == 'tuesday')
                                                @if ($listing->time == '10-11')
                                                    @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                        @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                        </h3>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
            
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif

                                                        @if($user->course1 ==$listing->course)
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                        @endif
                                                
                                                    @if($user->course2 ==$listing->course)
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                
                                                    @if($user->course3 ==$listing->course)
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                
                                                    @if($user->course4 ==$listing->course)
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                        @endforeach
                                        @else       
                                            
                                                @foreach($listings as $listing)
                                                    @if($listing->day == 'tuesday' && $listing->time == '10-11')
                                                        @if($listing->type == 'tutorial')
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                        @if($listing->type == 'lecture')
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                                @endforeach
                                            
                                        @endif
                                </td>

                                <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                    @if(\Auth::user()->role=='user')
                                    @foreach($users as $user)
                                        @foreach($listings as $listing) {{-- for loop--}}
                                            @if ($listing->day == 'wednesday')
                                                @if ($listing->time == '10-11')
                                                    @if(\Auth::user()->groupslot == $listing->groups )
                                                        @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                        </h3>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
            
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif

                                                        @if($user->course1 ==$listing->course)
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                        @endif
                                                
                                                    @if($user->course2 ==$listing->course)
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                
                                                    @if($user->course3 ==$listing->course)
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                
                                                    @if($user->course4 ==$listing->course)
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                        @endforeach
                                        @else       
                                            
                                                @foreach($listings as $listing)
                                                    @if($listing->day == 'wednesday' && $listing->time == '10-11')
                                                        @if($listing->type == 'tutorial')
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                        @if($listing->type == 'lecture')
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                                @endforeach
                                            
                                        @endif
                                </td>

                                <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                    @if(\Auth::user()->role=='user')
                                    @foreach($users as $user)
                                        @foreach($listings as $listing) {{-- for loop--}}
                                            @if ($listing->day == 'thursday')
                                                @if ($listing->time == '10-11')
                                                    @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                        @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                        </h3>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
            
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif

                                                        @if($user->course1 ==$listing->course)
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                        @endif
                                                
                                                    @if($user->course2 ==$listing->course)
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                
                                                    @if($user->course3 ==$listing->course)
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                
                                                    @if($user->course4 ==$listing->course)
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                        @endforeach
                                        @else       
                                                @foreach($listings as $listing)
                                                    @if($listing->day == 'thursday' && $listing->time == '10-11')
                                                        @if($listing->type == 'tutorial')
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                        @if($listing->type == 'lecture')
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                                @endforeach
                                            
                                        @endif
                                </td>    

                                <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                    @if(\Auth::user()->role=='user')
                                    @foreach($users as $user)
                                        @foreach($listings as $listing) {{-- for loop--}}
                                            @if ($listing->day == 'friday')
                                                @if ($listing->time == '10-11')
                                                    @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                        @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                        </h3>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
            
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif

                                                        @if($user->course1 ==$listing->course)
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                        @endif
                                                
                                                    @if($user->course2 ==$listing->course)
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                
                                                    @if($user->course3 ==$listing->course)
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                
                                                    @if($user->course4 ==$listing->course)
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                        @endforeach
                                        @else       
                                            
                                                @foreach($listings as $listing)
                                                    @if($listing->day == 'friday' && $listing->time == '10-11')
                                                        @if($listing->type == 'tutorial')
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                        @if($listing->type == 'lecture')
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                                @endforeach
                                            
                                        @endif
                                </td>

                            </tr>
    
                            <tr class="border-b bg-purple-100 border-purple-200">
                                <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                11am - 12pm
                                </td>
                                <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                    @if(\Auth::user()->role=='user')
                                    @foreach($users as $user)
                                        @foreach($listings as $listing) {{-- for loop--}}
                                            @if ($listing->day == 'monday')
                                                @if ($listing->time == '11-12')
                                                    @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                        @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                        </h3>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
            
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
    
                                                        @if($user->course1 ==$listing->course)
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                        @endif
                                                
                                                    @if($user->course2 ==$listing->course)
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                
                                                    @if($user->course3 ==$listing->course)
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                
                                                    @if($user->course4 ==$listing->course)
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                        @endforeach
                                        @else       
                                            
                                                @foreach($listings as $listing)
                                                    @if($listing->day == 'monday' && $listing->time == '11-12')
                                                        @if($listing->type == 'tutorial')
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                        @if($listing->type == 'lecture')
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                                @endforeach
                                            
                                        @endif
                                </td>

                                <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                    @if(\Auth::user()->role=='user')
                                    @foreach($users as $user)
                                        @foreach($listings as $listing) {{-- for loop--}}
                                            @if ($listing->day == 'tuesday')
                                                @if ($listing->time == '11-12')
                                                    @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                        @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                        </h3>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
            
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
    
                                                        @if($user->course1 ==$listing->course)
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                        @endif
                                                
                                                    @if($user->course2 ==$listing->course)
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                
                                                    @if($user->course3 ==$listing->course)
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                
                                                    @if($user->course4 ==$listing->course)
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                        @endforeach
                                        @else       
                                            
                                                @foreach($listings as $listing)
                                                    @if($listing->day == 'tuesday' && $listing->time == '11-12')
                                                        @if($listing->type == 'tutorial')
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                        @if($listing->type == 'lecture')
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                                @endforeach
                                            
                                        @endif
                                </td>

                                <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                    @if(\Auth::user()->role=='user')
                                    @foreach($users as $user)
                                        @foreach($listings as $listing) {{-- for loop--}}
                                            @if ($listing->day == 'wednesday')
                                                @if ($listing->time == '11-12')
                                                    @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                        @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                        </h3>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
            
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
    
                                                        @if($user->course1 ==$listing->course)
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                        @endif
                                                
                                                    @if($user->course2 ==$listing->course)
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                
                                                    @if($user->course3 ==$listing->course)
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                
                                                    @if($user->course4 ==$listing->course)
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                        @endforeach
                                        @else       
                                            
                                                @foreach($listings as $listing)
                                                    @if($listing->day == 'wednesday' && $listing->time == '11-12')
                                                        @if($listing->type == 'tutorial')
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                        @if($listing->type == 'lecture')
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                                @endforeach
                                            
                                        @endif
                                </td>
                                
                                <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                    @if(\Auth::user()->role=='user')
                                    @foreach($users as $user)
                                        @foreach($listings as $listing) {{-- for loop--}}
                                            @if ($listing->day == 'thursday')
                                                @if ($listing->time == '11-12')
                                                    @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                        @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                        </h3>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
            
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
    
                                                        @if($user->course1 ==$listing->course)
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                        @endif
                                                
                                                    @if($user->course2 ==$listing->course)
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                
                                                    @if($user->course3 ==$listing->course)
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                
                                                    @if($user->course4 ==$listing->course)
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                        @endforeach
                                        @else       
                                            
                                                @foreach($listings as $listing)
                                                    @if($listing->day == 'thursday' && $listing->time == '11-12')
                                                        @if($listing->type == 'tutorial')
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                        @if($listing->type == 'lecture')
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                                @endforeach
                                            
                                        @endif
                                </td>
    
                                <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                    @if(\Auth::user()->role=='user')
                                    @foreach($users as $user)
                                        @foreach($listings as $listing) {{-- for loop--}}
                                            @if ($listing->day == 'friday')
                                                @if ($listing->time == '11-12')
                                                    @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                        @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                        </h3>
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
            
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
    
                                                        @if($user->course1 ==$listing->course)
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                        @endif
                                                
                                                    @if($user->course2 ==$listing->course)
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                
                                                    @if($user->course3 ==$listing->course)
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                
                                                    @if($user->course4 ==$listing->course)
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                        @endforeach
                                        @else       
                                            
                                                @foreach($listings as $listing)
                                                    @if($listing->day == 'friday' && $listing->time == '11-12')
                                                        @if($listing->type == 'tutorial')
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                        </h3>
                                                                        {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                        <div class="text-sm" style="text-transform:uppercase;">
                                                                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-card>
                                                        @endif
                                                        @if($listing->type == 'lecture')
                                                            <x-card>
                                                                <div>
                                                                    <div>
                                                                        
                                                                        <h3 class="text-sm" style="text-transform:uppercase;">
                                                                            <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                                @endforeach
                                            
                                        @endif
                                </td>
    
                            </tr>
    
                            <tr class="border-b bg-blue-100 border-blue-200">
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                12pm - 1pm
                            </td>
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                @if(\Auth::user()->role=='user')
                                @foreach($users as $user)
                                    @foreach($listings as $listing) {{-- for loop--}}
                                        @if ($listing->day == 'monday')
                                            @if ($listing->time == '12-1')
                                                @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                    @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif

                                                    @if($user->course1 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                    @endif
                                            
                                                @if($user->course2 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course3 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course4 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                    @endforeach
                                    @else       
                                        
                                            @foreach($listings as $listing)
                                                @if($listing->day == 'monday' && $listing->time == '12-1')
                                                    @if($listing->type == 'tutorial')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                    @if($listing->type == 'lecture')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                            @endforeach
                                        
                                    @endif
                            </td>
                            
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                @if(\Auth::user()->role=='user')
                                @foreach($users as $user)
                                    @foreach($listings as $listing) {{-- for loop--}}
                                        @if ($listing->day == 'tuesday')
                                            @if ($listing->time == '12-1')
                                                @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                    @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif

                                                    @if($user->course1 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                    @endif
                                            
                                                @if($user->course2 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course3 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course4 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                    @endforeach
                                    @else       
                                        
                                            @foreach($listings as $listing)
                                                @if($listing->day == 'tuesday' && $listing->time == '12-1')
                                                    @if($listing->type == 'tutorial')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                    @if($listing->type == 'lecture')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                            @endforeach
                                        
                                    @endif
                            </td>
                                
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                @if(\Auth::user()->role=='user')
                                @foreach($users as $user)
                                    @foreach($listings as $listing) {{-- for loop--}}
                                        @if ($listing->day == 'wednesday')
                                            @if ($listing->time == '12-1')
                                                @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                    @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif

                                                    @if($user->course1 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                    @endif
                                            
                                                @if($user->course2 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course3 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course4 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                    @endforeach
                                    @else       
                                        
                                            @foreach($listings as $listing)
                                                @if($listing->day == 'wednesday' && $listing->time == '12-1')
                                                    @if($listing->type == 'tutorial')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                    @if($listing->type == 'lecture')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                            @endforeach
                                        
                                    @endif
                            </td>
                                
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                @if(\Auth::user()->role=='user')
                                @foreach($users as $user)
                                    @foreach($listings as $listing) {{-- for loop--}}
                                        @if ($listing->day == 'thursday')
                                            @if ($listing->time == '12-1')
                                                @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                    @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif

                                                    @if($user->course1 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                    @endif
                                            
                                                @if($user->course2 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course3 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course4 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                    @endforeach
                                    @else       
                                        
                                            @foreach($listings as $listing)
                                                @if($listing->day == 'thursday' && $listing->time == '12-1')
                                                    @if($listing->type == 'tutorial')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                    @if($listing->type == 'lecture')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                            @endforeach
                                        
                                    @endif
                            </td>
                                
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                @if(\Auth::user()->role=='user')
                                @foreach($users as $user)
                                    @foreach($listings as $listing) {{-- for loop--}}
                                        @if ($listing->day == 'friday')
                                            @if ($listing->time == '12-1')
                                                @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                    @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif

                                                    @if($user->course1 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                    @endif
                                            
                                                @if($user->course2 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course3 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course4 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                    @endforeach
                                    @else       
                                        
                                            @foreach($listings as $listing)
                                                @if($listing->day == 'friday' && $listing->time == '12-1')
                                                    @if($listing->type == 'tutorial')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                    @if($listing->type == 'lecture')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                            @endforeach
                                        
                                    @endif
                            </td>
                            
                        </tr>
    
                        <tr class="border-b bg-purple-100 border-purple-200">
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                1pm - 2pm
                            </td>
    
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                @if(\Auth::user()->role=='user')
                                @foreach($users as $user)
                                    @foreach($listings as $listing) {{-- for loop--}}
                                        @if ($listing->day == 'monday')
                                            @if ($listing->time == '1-2')
                                                @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                    @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif

                                                    @if($user->course1 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                    @endif
                                            
                                                @if($user->course2 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course3 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course4 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                    @endforeach
                                    @else       
                                        
                                            @foreach($listings as $listing)
                                                @if($listing->day == 'monday' && $listing->time == '1-2')
                                                    @if($listing->type == 'tutorial')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                    @if($listing->type == 'lecture')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                            @endforeach
                                        
                                    @endif
                            </td>
    
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                @if(\Auth::user()->role=='user')
                                @foreach($users as $user)
                                    @foreach($listings as $listing) {{-- for loop--}}
                                        @if ($listing->day == 'tuesday')
                                            @if ($listing->time == '1-2')
                                                @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                    @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif

                                                    @if($user->course1 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                    @endif
                                            
                                                @if($user->course2 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course3 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course4 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                    @endforeach
                                    @else       
                                        
                                            @foreach($listings as $listing)
                                                @if($listing->day == 'tuesday' && $listing->time == '1-2')
                                                    @if($listing->type == 'tutorial')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                    @if($listing->type == 'lecture')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                            @endforeach
                                        
                                    @endif
                            </td>
    
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                @if(\Auth::user()->role=='user')
                                @foreach($users as $user)
                                    @foreach($listings as $listing) {{-- for loop--}}
                                        @if ($listing->day == 'wednesday')
                                            @if ($listing->time == '1-2')
                                                @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                    @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif

                                                    @if($user->course1 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                    @endif
                                            
                                                @if($user->course2 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course3 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course4 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                    @endforeach
                                    @else       
                                        
                                            @foreach($listings as $listing)
                                                @if($listing->day == 'wednesday' && $listing->time == '1-2')
                                                    @if($listing->type == 'tutorial')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                    @if($listing->type == 'lecture')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                            @endforeach
                                        
                                    @endif
                            </td>
    
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                @if(\Auth::user()->role=='user')
                                @foreach($users as $user)
                                    @foreach($listings as $listing) {{-- for loop--}}
                                        @if ($listing->day == 'thursday')
                                            @if ($listing->time == '1-2')
                                                @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                    @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif

                                                    @if($user->course1 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                    @endif
                                            
                                                @if($user->course2 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course3 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course4 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                    @endforeach
                                    @else       
                                        
                                            @foreach($listings as $listing)
                                                @if($listing->day == 'thursday' && $listing->time == '1-2')
                                                    @if($listing->type == 'tutorial')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                    @if($listing->type == 'lecture')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                            @endforeach
                                        
                                    @endif
                            </td>
    
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                @if(\Auth::user()->role=='user')
                                @foreach($users as $user)
                                    @foreach($listings as $listing) {{-- for loop--}}
                                        @if ($listing->day == 'friday')
                                            @if ($listing->time == '1-2')
                                                @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                    @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif

                                                    @if($user->course1 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                    @endif
                                            
                                                @if($user->course2 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course3 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course4 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                    @endforeach
                                    @else       
                                        
                                            @foreach($listings as $listing)
                                                @if($listing->day == 'friday' && $listing->time == '1-2')
                                                    @if($listing->type == 'tutorial')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                    @if($listing->type == 'lecture')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                            @endforeach
                                        
                                    @endif
                            </td>
                            
                        </tr>
    
                        <tr class="border-b bg-blue-100 border-blue-200">
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                2pm - 3pm
                            </td>
    
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                @if(\Auth::user()->role=='user')
                                @foreach($users as $user)
                                    @foreach($listings as $listing) {{-- for loop--}}
                                        @if ($listing->day == 'monday')
                                            @if ($listing->time == '2-3')
                                                @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                    @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif

                                                    @if($user->course1 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                    @endif
                                            
                                                @if($user->course2 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course3 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course4 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                    @endforeach
                                    @else       
                                        
                                            @foreach($listings as $listing)
                                                @if($listing->day == 'monday' && $listing->time == '2-3')
                                                    @if($listing->type == 'tutorial')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                    @if($listing->type == 'lecture')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                            @endforeach
                                        
                                    @endif
                            </td>
                            
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                @if(\Auth::user()->role=='user')
                                @foreach($users as $user)
                                    @foreach($listings as $listing) {{-- for loop--}}
                                        @if ($listing->day == 'tuesday')
                                            @if ($listing->time == '2-3')
                                                @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                    @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif

                                                    @if($user->course1 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                    @endif
                                            
                                                @if($user->course2 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course3 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course4 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                    @endforeach
                                    @else       
                                        
                                            @foreach($listings as $listing)
                                                @if($listing->day == 'tuesday' && $listing->time == '2-3')
                                                    @if($listing->type == 'tutorial')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                    @if($listing->type == 'lecture')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                            @endforeach
                                        
                                    @endif
                            </td>
    
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                @if(\Auth::user()->role=='user')
                                @foreach($users as $user)
                                    @foreach($listings as $listing) {{-- for loop--}}
                                        @if ($listing->day == 'wednesday')
                                            @if ($listing->time == '2-3')
                                                @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                    @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif

                                                    @if($user->course1 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                    @endif
                                            
                                                @if($user->course2 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course3 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course4 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                    @endforeach
                                    @else       
                                        
                                            @foreach($listings as $listing)
                                                @if($listing->day == 'wednesday' && $listing->time == '2-3')
                                                    @if($listing->type == 'tutorial')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                    @if($listing->type == 'lecture')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                            @endforeach
                                        
                                    @endif
                            </td>
                            
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                @if(\Auth::user()->role=='user')
                                @foreach($users as $user)
                                    @foreach($listings as $listing) {{-- for loop--}}
                                        @if ($listing->day == 'thursday')
                                            @if ($listing->time == '2-3')
                                                @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                    @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif

                                                    @if($user->course1 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                    @endif
                                            
                                                @if($user->course2 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course3 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course4 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                    @endforeach
                                    @else       
                                        
                                            @foreach($listings as $listing)
                                                @if($listing->day == 'thursday' && $listing->time == '2-3')
                                                    @if($listing->type == 'tutorial')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                    @if($listing->type == 'lecture')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                            @endforeach
                                        
                                    @endif
                            </td>
                            
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                @if(\Auth::user()->role=='user')
                                @foreach($users as $user)
                                    @foreach($listings as $listing) {{-- for loop--}}
                                        @if ($listing->day == 'friday')
                                            @if ($listing->time == '2-3')
                                                @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                    @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif

                                                    @if($user->course1 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                    @endif
                                            
                                                @if($user->course2 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course3 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course4 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                    @endforeach
                                    @else       
                                        
                                            @foreach($listings as $listing)
                                                @if($listing->day == 'friday' && $listing->time == '2-3')
                                                    @if($listing->type == 'tutorial')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                    @if($listing->type == 'lecture')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                            @endforeach
                                        
                                    @endif
                            </td>
                            
                        </tr>
    
                        <tr class="border-b bg-purple-100 border-purple-200">
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                3pm - 4pm
                            </td>
    
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                @if(\Auth::user()->role=='user')
                                @foreach($users as $user)
                                    @foreach($listings as $listing) {{-- for loop--}}
                                        @if ($listing->day == 'monday')
                                            @if ($listing->time == '3-4')
                                                @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                    @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif

                                                    @if($user->course1 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                    @endif
                                            
                                                @if($user->course2 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course3 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course4 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                    @endforeach
                                    @else       
                                        
                                            @foreach($listings as $listing)
                                                @if($listing->day == 'monday' && $listing->time == '3-4')
                                                    @if($listing->type == 'tutorial')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                    @if($listing->type == 'lecture')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                            @endforeach
                                        
                                    @endif
                            </td>
    
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                @if(\Auth::user()->role=='user')
                                @foreach($users as $user)
                                    @foreach($listings as $listing) {{-- for loop--}}
                                        @if ($listing->day == 'tuesday')
                                            @if ($listing->time == '3-4')
                                                @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                    @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif

                                                    @if($user->course1 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                    @endif
                                            
                                                @if($user->course2 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course3 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course4 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                    @endforeach
                                    @else       
                                        
                                            @foreach($listings as $listing)
                                                @if($listing->day == 'tuesday' && $listing->time == '3-4')
                                                    @if($listing->type == 'tutorial')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                    @if($listing->type == 'lecture')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                            @endforeach
                                        
                                    @endif
                            </td>
                            
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                @if(\Auth::user()->role=='user')
                                @foreach($users as $user)
                                    @foreach($listings as $listing) {{-- for loop--}}
                                        @if ($listing->day == 'wednesday')
                                            @if ($listing->time == '3-4')
                                                @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                    @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif

                                                    @if($user->course1 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                    @endif
                                            
                                                @if($user->course2 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course3 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course4 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                    @endforeach
                                    @else       
                                        
                                            @foreach($listings as $listing)
                                                @if($listing->day == 'wednesday' && $listing->time == '3-4')
                                                    @if($listing->type == 'tutorial')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                    @if($listing->type == 'lecture')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                            @endforeach
                                        
                                    @endif
                            </td>
                                
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                @if(\Auth::user()->role=='user')
                                @foreach($users as $user)
                                    @foreach($listings as $listing) {{-- for loop--}}
                                        @if ($listing->day == 'thursday')
                                            @if ($listing->time == '3-4')
                                                @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                    @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif

                                                    @if($user->course1 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                    @endif
                                            
                                                @if($user->course2 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course3 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course4 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                    @endforeach
                                    @else       
                                        
                                            @foreach($listings as $listing)
                                                @if($listing->day == 'thursday' && $listing->time == '3-4')
                                                    @if($listing->type == 'tutorial')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                    @if($listing->type == 'lecture')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                            @endforeach
                                        
                                    @endif
                            </td>
                                
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                @if(\Auth::user()->role=='user')
                                @foreach($users as $user)
                                    @foreach($listings as $listing) {{-- for loop--}}
                                        @if ($listing->day == 'friday')
                                            @if ($listing->time == '3-4')
                                                @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                    @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif

                                                    @if($user->course1 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                    @endif
                                            
                                                @if($user->course2 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course3 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course4 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                    @endforeach
                                    @else       
                                        
                                            @foreach($listings as $listing)
                                                @if($listing->day == 'friday' && $listing->time == '3-4')
                                                    @if($listing->type == 'tutorial')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                    @if($listing->type == 'lecture')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                            @endforeach
                                        
                                    @endif
                            </td>
                            
                        </tr>
    
                        <tr class="border-b bg-blue-100 border-blue-200 ">
                                
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                4pm - 5pm
                            </td>
                                
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                @if(\Auth::user()->role=='user')
                                @foreach($users as $user)
                                    @foreach($listings as $listing) {{-- for loop--}}
                                        @if ($listing->day == 'monday')
                                            @if ($listing->time == '4-5')
                                                @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                    @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif

                                                    @if($user->course1 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                    @endif
                                            
                                                @if($user->course2 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course3 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course4 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                    @endforeach
                                    @else       
                                        
                                            @foreach($listings as $listing)
                                                @if($listing->day == 'monday' && $listing->time == '4-5')
                                                    @if($listing->type == 'tutorial')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                    @if($listing->type == 'lecture')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                            @endforeach
                                        
                                    @endif
                            </td>
                                
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                @if(\Auth::user()->role=='user')
                                @foreach($users as $user)
                                    @foreach($listings as $listing) {{-- for loop--}}
                                        @if ($listing->day == 'tuesday')
                                            @if ($listing->time == '4-5')
                                                @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                    @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif

                                                    @if($user->course1 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                    @endif
                                            
                                                @if($user->course2 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course3 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course4 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                    @endforeach
                                    @else       
                                        
                                            @foreach($listings as $listing)
                                                @if($listing->day == 'tuesday' && $listing->time == '4-5')
                                                    @if($listing->type == 'tutorial')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                    @if($listing->type == 'lecture')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                            @endforeach
                                        
                                    @endif
                            </td>
                                
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                @if(\Auth::user()->role=='user')
                                @foreach($users as $user)
                                    @foreach($listings as $listing) {{-- for loop--}}
                                        @if ($listing->day == 'wednesday')
                                            @if ($listing->time == '4-5')
                                                @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                    @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif

                                                    @if($user->course1 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                    @endif
                                            
                                                @if($user->course2 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course3 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course4 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                    @endforeach
                                    @else       
                                        
                                            @foreach($listings as $listing)
                                                @if($listing->day == 'wednesday' && $listing->time == '4-5')
                                                    @if($listing->type == 'tutorial')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                    @if($listing->type == 'lecture')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                            @endforeach
                                        
                                    @endif
                            </td>
                                
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                @if(\Auth::user()->role=='user')
                                @foreach($users as $user)
                                    @foreach($listings as $listing) {{-- for loop--}}
                                        @if ($listing->day == 'thursday')
                                            @if ($listing->time == '4-5')
                                                @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                    @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif

                                                    @if($user->course1 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                    @endif
                                            
                                                @if($user->course2 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course3 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course4 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                    @endforeach
                                    @else       
                                        
                                            @foreach($listings as $listing)
                                                @if($listing->day == 'thursday' && $listing->time == '4-5')
                                                    @if($listing->type == 'tutorial')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                    @if($listing->type == 'lecture')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                            @endforeach
                                        
                                    @endif
                            </td>
    
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                @if(\Auth::user()->role=='user')
                                @foreach($users as $user)
                                    @foreach($listings as $listing) {{-- for loop--}}
                                        @if ($listing->day == 'friday')
                                            @if ($listing->time == '4-5')
                                                @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                    @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif

                                                    @if($user->course1 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                    @endif
                                            
                                                @if($user->course2 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course3 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course4 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                    @endforeach
                                    @else       
                                        
                                            @foreach($listings as $listing)
                                                @if($listing->day == 'friday' && $listing->time == '4-5')
                                                    @if($listing->type == 'tutorial')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                    @if($listing->type == 'lecture')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                            @endforeach
                                        
                                    @endif
                            </td>
                            
                        </tr>
    
                            
                        <tr class="border-b bg-purple-100 border-purple-200">
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                5pm - 6pm
                            </td>
                                
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                @if(\Auth::user()->role=='user')
                                @foreach($users as $user)
                                    @foreach($listings as $listing) {{-- for loop--}}
                                        @if ($listing->day == 'monday')
                                            @if ($listing->time == '5-6')
                                                @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                    @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif

                                                    @if($user->course1 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                    @endif
                                            
                                                @if($user->course2 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course3 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course4 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                    @endforeach
                                    @else       
                                        
                                            @foreach($listings as $listing)
                                                @if($listing->day == 'monday' && $listing->time == '5-6')
                                                    @if($listing->type == 'tutorial')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                    @if($listing->type == 'lecture')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                            @endforeach
                                        
                                    @endif
                            </td>
                                
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                @if(\Auth::user()->role=='user')
                                @foreach($users as $user)
                                    @foreach($listings as $listing) {{-- for loop--}}
                                        @if ($listing->day == 'tuesday')
                                            @if ($listing->time == '5-6')
                                                @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                    @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif

                                                    @if($user->course1 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                    @endif
                                            
                                                @if($user->course2 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course3 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course4 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                    @endforeach
                                    @else       
                                        
                                            @foreach($listings as $listing)
                                                @if($listing->day == 'tuesday' && $listing->time == '5-6')
                                                    @if($listing->type == 'tutorial')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                    @if($listing->type == 'lecture')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                            @endforeach
                                        
                                    @endif
                            </td>
                                
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                @if(\Auth::user()->role=='user')
                                @foreach($users as $user)
                                    @foreach($listings as $listing) {{-- for loop--}}
                                        @if ($listing->day == 'wednesday')
                                            @if ($listing->time == '5-6')
                                                @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                    @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif

                                                    @if($user->course1 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                    @endif
                                            
                                                @if($user->course2 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course3 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course4 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                    @endforeach
                                    @else       
                                        
                                            @foreach($listings as $listing)
                                                @if($listing->day == 'wednesday' && $listing->time == '5-6')
                                                    @if($listing->type == 'tutorial')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                    @if($listing->type == 'lecture')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                            @endforeach
                                        
                                    @endif
                            </td>
                                
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                @if(\Auth::user()->role=='user')
                                @foreach($users as $user)
                                    @foreach($listings as $listing) {{-- for loop--}}
                                        @if ($listing->day == 'thursday')
                                            @if ($listing->time == '5-6')
                                                @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                    @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif

                                                    @if($user->course1 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                    @endif
                                            
                                                @if($user->course2 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course3 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course4 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                    @endforeach
                                    @else       
                                        
                                            @foreach($listings as $listing)
                                                @if($listing->day == 'thursday' && $listing->time == '5-6')
                                                    @if($listing->type == 'tutorial')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                    @if($listing->type == 'lecture')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                            @endforeach
                                        
                                    @endif
                            </td>
    
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                @if(\Auth::user()->role=='user')
                                @foreach($users as $user)
                                    @foreach($listings as $listing) {{-- for loop--}}
                                        @if ($listing->day == 'friday')
                                            @if ($listing->time == '5-6')
                                                @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                    @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif

                                                    @if($user->course1 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                    @endif
                                            
                                                @if($user->course2 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course3 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course4 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                    @endforeach
                                    @else       
                                        
                                            @foreach($listings as $listing)
                                                @if($listing->day == 'friday' && $listing->time == '5-6')
                                                    @if($listing->type == 'tutorial')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                    @if($listing->type == 'lecture')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                            @endforeach
                                        
                                    @endif
                            </td>
                            
                        </tr>
    
                            
                        <tr class="border-b bg-blue-100 border-blue-200 ">
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                6pm - 7pm
                            </td>
                                
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                @if(\Auth::user()->role=='user')
                                @foreach($users as $user)
                                    @foreach($listings as $listing) {{-- for loop--}}
                                        @if ($listing->day == 'monday')
                                            @if ($listing->time == '6-7')
                                                @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                    @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif

                                                    @if($user->course1 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                    @endif
                                            
                                                @if($user->course2 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course3 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course4 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                    @endforeach
                                    @else       
                                        
                                            @foreach($listings as $listing)
                                                @if($listing->day == 'monday' && $listing->time == '6-7')
                                                    @if($listing->type == 'tutorial')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                    @if($listing->type == 'lecture')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                            @endforeach
                                        
                                    @endif
                            </td>
                                
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                @if(\Auth::user()->role=='user')
                                @foreach($users as $user)
                                    @foreach($listings as $listing) {{-- for loop--}}
                                        @if ($listing->day == 'tuesday')
                                            @if ($listing->time == '6-7')
                                                @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                    @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif

                                                    @if($user->course1 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                    @endif
                                            
                                                @if($user->course2 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course3 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course4 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                    @endforeach
                                    @else       
                                        
                                            @foreach($listings as $listing)
                                                @if($listing->day == 'tuesday' && $listing->time == '6-7')
                                                    @if($listing->type == 'tutorial')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                    @if($listing->type == 'lecture')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                            @endforeach
                                        
                                    @endif
                            </td>
                                
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                @if(\Auth::user()->role=='user')
                                @foreach($users as $user)
                                    @foreach($listings as $listing) {{-- for loop--}}
                                        @if ($listing->day == 'wednesday')
                                            @if ($listing->time == '6-7')
                                                @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                    @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif

                                                    @if($user->course1 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                    @endif
                                            
                                                @if($user->course2 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course3 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course4 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                    @endforeach
                                    @else       
                                        
                                            @foreach($listings as $listing)
                                                @if($listing->day == 'wednesday' && $listing->time == '6-7')
                                                    @if($listing->type == 'tutorial')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                    @if($listing->type == 'lecture')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                            @endforeach
                                        
                                    @endif
                            </td>
                                
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                @if(\Auth::user()->role=='user')
                                @foreach($users as $user)
                                    @foreach($listings as $listing) {{-- for loop--}}
                                        @if ($listing->day == 'thursday')
                                            @if ($listing->time == '6-7')
                                                @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                    @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif

                                                    @if($user->course1 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                    @endif
                                            
                                                @if($user->course2 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course3 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course4 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                    @endforeach
                                    @else       
                                        
                                            @foreach($listings as $listing)
                                                @if($listing->day == 'thursday' && $listing->time == '6-7')
                                                    @if($listing->type == 'tutorial')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                    @if($listing->type == 'lecture')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                            @endforeach
                                        
                                    @endif
                            </td>
                                
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                @if(\Auth::user()->role=='user')
                                @foreach($users as $user)
                                    @foreach($listings as $listing) {{-- for loop--}}
                                        @if ($listing->day == 'friday')
                                            @if ($listing->time == '6-7')
                                                @if(\Auth::user()->groupslot ==$listing->groups  || $listing->groups == 'null' )
                                                    @if($listing->type == 'meetup' && $listing->user_id == $user->id )
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
        
                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif

                                                    @if($user->course1 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                    @endif
                                            
                                                @if($user->course2 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course3 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
                                                                </h3>
                                                                {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                                                <div class="text-sm" style="text-transform:uppercase;">
                                                                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-card>
                                                @endif
                                            
                                                @if($user->course4 ==$listing->course)
                                                    <x-card>
                                                        <div>
                                                            <div>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                </h3>
                                                                <h3 class="text-sm" style="text-transform:uppercase;">
                                                                    <a href="/listings/{{$listing->id}}">{{$user->name}}</a>
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
                                    @endforeach
                                    @else       
                                        
                                            @foreach($listings as $listing)
                                                @if($listing->day == 'friday' && $listing->time == '6-7')
                                                    @if($listing->type == 'tutorial')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
                                                                    </h3>
                                                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}

                                                                    <div class="text-sm" style="text-transform:uppercase;">
                                                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-card>
                                                    @endif
                                                    @if($listing->type == 'lecture')
                                                        <x-card>
                                                            <div>
                                                                <div>
                                                                    
                                                                    <h3 class="text-sm" style="text-transform:uppercase;">
                                                                        <a href="/listings/{{$listing->id}}">{{$listing->course}} {{$listing->type}}</a>
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
                                            @endforeach
                                        
                                    @endif
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
    