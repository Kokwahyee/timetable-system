<x-layout>
    <br>
    <span class="font-bold uppercase font-sans flex items-center justify-center w-screen text-xl"> 
      Group Timetable
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
  
                  @foreach($listings as $listing) {{-- for loop--}}
                      @if ($listing->day == 'monday')
                        @if ($listing->time == '8-9')
                        <x-card>
                              <div>
                                <div>
                                    <h3 class="text-sm">
                                        <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                    </h3>
                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
  
                                    <div class="text-sm">
                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                    </div>
                                </div>
                            </div>
                        </x-card>
                        @endif
                      @endif
                  @endforeach
  
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
  
                  @foreach($listings as $listing) {{-- for loop--}}
                      @if ($listing->day == 'tuesday')
                        @if ($listing->time == '8-9')
                        <x-card>
                              <div>
                                <div>
                                    <h3 class="text-sm">
                                        <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                    </h3>
                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
  
                                    <div class="text-sm">
                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                    </div>
                                </div>
                            </div>
                        </x-card>
                        @endif
                      @endif
                  @endforeach
  
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
  
                  @foreach($listings as $listing) {{-- for loop--}}
                      @if ($listing->day == 'wednesday')
                        @if ($listing->time == '8-9')
                        <x-card>
                              <div>
                                <div>
                                    <h3 class="text-sm">
                                        <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                    </h3>
                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
  
                                    <div class="text-sm">
                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                    </div>
                                </div>
                            </div>
                        </x-card>
                        @endif
                      @endif
                  @endforeach
  
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
  
                  @foreach($listings as $listing) {{-- for loop--}}
                      @if ($listing->day == 'thursday')
                        @if ($listing->time == '8-9')
                        <x-card>
                              <div>
                                <div>
                                    <h3 class="text-sm">
                                        <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                    </h3>
                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
  
                                    <div class="text-sm">
                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                    </div>
                                </div>
                            </div>
                        </x-card>
                        @endif
                      @endif
                  @endforeach
  
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
  
                  @foreach($listings as $listing) {{-- for loop--}}
                      @if ($listing->day == 'friday')
                        @if ($listing->time == '8-9')
                        <x-card>
                              <div>
                                <div>
                                    <h3 class="text-sm">
                                        <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                    </h3>
                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
  
                                    <div class="text-sm">
                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                    </div>
                                </div>
                            </div>
                        </x-card>
                        @endif
                      @endif
                  @endforeach
  
                </td>
              </tr>
  
              <tr class="border-b bg-purple-100 border-purple-200">
                <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                  9am - 10am
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
  
                  @foreach($listings as $listing) {{-- for loop--}}
                      @if ($listing->day == 'monday')
                        @if ($listing->time == '9-10')
                        <x-card>
                              <div>
                                <div>
                                    <h3 class="text-sm">
                                        <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                    </h3>
                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
  
                                    <div class="text-sm">
                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                    </div>
                                </div>
                            </div>
                        </x-card>
                        @endif
                      @endif
                  @endforeach
  
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
  
                  @foreach($listings as $listing) {{-- for loop--}}
                      @if ($listing->day == 'tuesday')
                        @if ($listing->time == '9-10')
                        <x-card>
                              <div>
                                <div>
                                    <h3 class="text-sm">
                                        <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                    </h3>
                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
  
                                    <div class="text-sm">
                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                    </div>
                                </div>
                            </div>
                        </x-card>
                        @endif
                      @endif
                  @endforeach
  
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
  
                  @foreach($listings as $listing) {{-- for loop--}}
                      @if ($listing->day == 'wednesday')
                        @if ($listing->time == '9-10')
                        <x-card>
                              <div>
                                <div>
                                    <h3 class="text-sm">
                                        <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                    </h3>
                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
  
                                    <div class="text-sm">
                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                    </div>
                                </div>
                            </div>
                        </x-card>
                        @endif
                      @endif
                  @endforeach
  
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
  
                  @foreach($listings as $listing) {{-- for loop--}}
                      @if ($listing->day == 'thursday')
                        @if ($listing->time == '9-10')
                        <x-card>
                              <div>
                                <div>
                                    <h3 class="text-sm">
                                        <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                    </h3>
                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
  
                                    <div class="text-sm">
                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                    </div>
                                </div>
                            </div>
                        </x-card>
                        @endif
                      @endif
                  @endforeach
  
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
  
                  @foreach($listings as $listing) {{-- for loop--}}
                      @if ($listing->day == 'friday')
                        @if ($listing->time == '9-10')
                        <x-card>
                              <div>
                                <div>
                                    <h3 class="text-sm">
                                        <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                    </h3>
                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
  
                                    <div class="text-sm">
                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                    </div>
                                </div>
                            </div>
                        </x-card>
                        @endif
                      @endif
                  @endforeach
  
                </td>
              </tr>
  
              <tr class="border-b bg-blue-100 border-blue-200">
                  <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                    10am - 11am
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    
                    @foreach($listings as $listing) {{-- for loop--}}
                      @if ($listing->day == 'monday')
                        @if ($listing->time == '10-11')
                        <x-card>
                              <div>
                                <div>
                                    <h3 class="text-sm">
                                        <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                    </h3>
                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
  
                                    <div class="text-sm">
                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                    </div>
                                </div>
                            </div>
                        </x-card>
                        @endif
                      @endif
                  @endforeach
  
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    
                    @foreach($listings as $listing) {{-- for loop--}}
                      @if ($listing->day == 'tuesday')
                        @if ($listing->time == '10-11')
                        <x-card>
                              <div>
                                <div>
                                    <h3 class="text-sm">
                                        <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                    </h3>
                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
  
                                    <div class="text-sm">
                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                    </div>
                                </div>
                            </div>
                        </x-card>
                        @endif
                      @endif
                  @endforeach
  
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    
                    @foreach($listings as $listing) {{-- for loop--}}
                      @if ($listing->day == 'wednesday')
                        @if ($listing->time == '10-11')
                        <x-card>
                              <div>
                                <div>
                                    <h3 class="text-sm">
                                        <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                    </h3>
                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
  
                                    <div class="text-sm">
                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                    </div>
                                </div>
                            </div>
                        </x-card>
                        @endif
                      @endif
                  @endforeach
  
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    @foreach($listings as $listing) {{-- for loop--}}
                      @if ($listing->day == 'thursday')
                        @if ($listing->time == '10-11')
                        <x-card>
                              <div>
                                <div>
                                    <h3 class="text-sm">
                                        <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                    </h3>
                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
  
                                    <div class="text-sm">
                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                    </div>
                                </div>
                            </div>
                        </x-card>
                        @endif
                      @endif
                  @endforeach
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    @foreach($listings as $listing) {{-- for loop--}}
                      @if ($listing->day == 'friday')
                        @if ($listing->time == '10-11')
                        <x-card>
                              <div>
                                <div>
                                    <h3 class="text-sm">
                                        <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                    </h3>
                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
  
                                    <div class="text-sm">
                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                    </div>
                                </div>
                            </div>
                        </x-card>
                        @endif
                      @endif
                  @endforeach
                  </td>
                </tr>
  
                <tr class="border-b bg-purple-100 border-purple-200">
                  <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                    11am - 12pm
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    @foreach($listings as $listing) {{-- for loop--}}
                      @if ($listing->day == 'monday')
                        @if ($listing->time == '11-12')
                        <x-card>
                              <div>
                                <div>
                                    <h3 class="text-sm">
                                        <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                    </h3>
                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
  
                                    <div class="text-sm">
                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                    </div>
                                </div>
                            </div>
                        </x-card>
                        @endif
                      @endif
                  @endforeach
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    @foreach($listings as $listing) {{-- for loop--}}
                      @if ($listing->day == 'tuesday')
                        @if ($listing->time == '11-12')
                        <x-card>
                              <div>
                                <div>
                                    <h3 class="text-sm">
                                        <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                    </h3>
                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
  
                                    <div class="text-sm">
                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                    </div>
                                </div>
                            </div>
                        </x-card>
                        @endif
                      @endif
                  @endforeach
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    @foreach($listings as $listing) {{-- for loop--}}
                      @if ($listing->day == 'wednesday')
                        @if ($listing->time == '11-12')
                        <x-card>
                              <div>
                                <div>
                                    <h3 class="text-sm">
                                        <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                    </h3>
                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
  
                                    <div class="text-sm">
                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                    </div>
                                </div>
                            </div>
                        </x-card>
                        @endif
                      @endif
                  @endforeach
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      @foreach($listings as $listing) {{-- for loop--}}
                      @if ($listing->day == 'thursday')
                        @if ($listing->time == '11-12')
                        <x-card>
                              <div>
                                <div>
                                    <h3 class="text-sm">
                                        <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                    </h3>
                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
  
                                    <div class="text-sm">
                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                    </div>
                                </div>
                            </div>
                        </x-card>
                        @endif
                      @endif
                  @endforeach
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      @foreach($listings as $listing) {{-- for loop--}}
                      @if ($listing->day == 'friday')
                        @if ($listing->time == '11-12')
                        <x-card>
                              <div>
                                <div>
                                    <h3 class="text-sm">
                                        <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                    </h3>
                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
  
                                    <div class="text-sm">
                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                    </div>
                                </div>
                            </div>
                        </x-card>
                        @endif
                      @endif
                  @endforeach
                    </td>
                </tr>
  
                <tr class="border-b bg-blue-100 border-blue-200">
                  <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                    12pm - 1pm
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    @foreach($listings as $listing) {{-- for loop--}}
                      @if ($listing->day == 'monday')
                        @if ($listing->time == '12-1')
                        <x-card>
                              <div>
                                <div>
                                    <h3 class="text-sm">
                                        <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                    </h3>
                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
  
                                    <div class="text-sm">
                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                    </div>
                                </div>
                            </div>
                        </x-card>
                        @endif
                      @endif
                  @endforeach
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    
                    @foreach($listings as $listing) {{-- for loop--}}
                      @if ($listing->day == 'tuesday')
                        @if ($listing->time == '12-1')
                        <x-card>
                              <div>
                                <div>
                                    <h3 class="text-sm">
                                        <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                    </h3>
                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
  
                                    <div class="text-sm">
                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                    </div>
                                </div>
                            </div>
                        </x-card>
                        @endif
                      @endif
                  @endforeach
  
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    @foreach($listings as $listing) {{-- for loop--}}
                      @if ($listing->day == 'wednesday')
                        @if ($listing->time == '12-1')
                        <x-card>
                              <div>
                                <div>
                                    <h3 class="text-sm">
                                        <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                    </h3>
                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
  
                                    <div class="text-sm">
                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                    </div>
                                </div>
                            </div>
                        </x-card>
                        @endif
                      @endif
                  @endforeach
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      @foreach($listings as $listing) {{-- for loop--}}
                      @if ($listing->day == 'thursday')
                        @if ($listing->time == '12-1')
                        <x-card>
                              <div>
                                <div>
                                    <h3 class="text-sm">
                                        <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                    </h3>
                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
  
                                    <div class="text-sm">
                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                    </div>
                                </div>
                            </div>
                        </x-card>
                        @endif
                      @endif
                  @endforeach
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      @foreach($listings as $listing) {{-- for loop--}}
                      @if ($listing->day == 'friday')
                        @if ($listing->time == '12-1')
                        <x-card>
                              <div>
                                <div>
                                    <h3 class="text-sm">
                                        <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                    </h3>
                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
  
                                    <div class="text-sm">
                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                    </div>
                                </div>
                            </div>
                        </x-card>
                        @endif
                      @endif
                  @endforeach
                    </td>
                </tr>
  
                <tr class="border-b bg-purple-100 border-purple-200">
                  <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                      1pm - 2pm
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    @foreach($listings as $listing) {{-- for loop--}}
                      @if ($listing->day == 'monday')
                        @if ($listing->time == '1-2')
                        <x-card>
                              <div>
                                <div>
                                    <h3 class="text-sm">
                                        <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                    </h3>
                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
  
                                    <div class="text-sm">
                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                    </div>
                                </div>
                            </div>
                        </x-card>
                        @endif
                      @endif
                  @endforeach
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    @foreach($listings as $listing) {{-- for loop--}}
                      @if ($listing->day == 'tuesday')
                        @if ($listing->time == '1-2')
                        <x-card>
                              <div>
                                <div>
                                    <h3 class="text-sm">
                                        <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                    </h3>
                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
  
                                    <div class="text-sm">
                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                    </div>
                                </div>
                            </div>
                        </x-card>
                        @endif
                      @endif
                  @endforeach
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    @foreach($listings as $listing) {{-- for loop--}}
                      @if ($listing->day == 'wednesday')
                        @if ($listing->time == '1-2')
                        <x-card>
                              <div>
                                <div>
                                    <h3 class="text-sm">
                                        <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                    </h3>
                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
  
                                    <div class="text-sm">
                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                    </div>
                                </div>
                            </div>
                        </x-card>
                        @endif
                      @endif
                  @endforeach
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      @foreach($listings as $listing) {{-- for loop--}}
                      @if ($listing->day == 'thursday')
                        @if ($listing->time == '1-2')
                        <x-card>
                              <div>
                                <div>
                                    <h3 class="text-sm">
                                        <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                    </h3>
                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
  
                                    <div class="text-sm">
                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                    </div>
                                </div>
                            </div>
                        </x-card>
                        @endif
                      @endif
                  @endforeach
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      @foreach($listings as $listing) {{-- for loop--}}
                      @if ($listing->day == 'friday')
                        @if ($listing->time == '1-2')
                        <x-card>
                              <div>
                                <div>
                                    <h3 class="text-sm">
                                        <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                    </h3>
                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
  
                                    <div class="text-sm">
                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                    </div>
                                </div>
                            </div>
                        </x-card>
                        @endif
                      @endif
                  @endforeach
                    </td>
                </tr>
  
                <tr class="border-b bg-blue-100 border-blue-200">
                  <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                    2pm - 3pm
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    @foreach($listings as $listing) {{-- for loop--}}
                    @if ($listing->day == 'monday')
                      @if ($listing->time == '2-3')
                      <x-card>
                            <div>
                              <div>
                                  <h3 class="text-sm">
                                      <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                  </h3>
                                  {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
  
                                  <div class="text-sm">
                                      <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                  </div>
                              </div>
                          </div>
                      </x-card>
                      @endif
                    @endif
                @endforeach
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    @foreach($listings as $listing) {{-- for loop--}}
                    @if ($listing->day == 'tuesday')
                      @if ($listing->time == '2-3')
                      <x-card>
                            <div>
                              <div>
                                  <h3 class="text-sm">
                                      <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                  </h3>
                                  {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
  
                                  <div class="text-sm">
                                      <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                  </div>
                              </div>
                          </div>
                      </x-card>
                      @endif
                    @endif
                @endforeach
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    @foreach($listings as $listing) {{-- for loop--}}
                    @if ($listing->day == 'wednesday')
                      @if ($listing->time == '2-3')
                      <x-card>
                            <div>
                              <div>
                                  <h3 class="text-sm">
                                      <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                  </h3>
                                  {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
  
                                  <div class="text-sm">
                                      <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                  </div>
                              </div>
                          </div>
                      </x-card>
                      @endif
                    @endif
                @endforeach
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      @foreach($listings as $listing) {{-- for loop--}}
                      @if ($listing->day == 'thursday')
                        @if ($listing->time == '2-3')
                        <x-card>
                              <div>
                                <div>
                                    <h3 class="text-sm">
                                        <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                    </h3>
                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                    <div class="text-sm">
                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                    </div>
                                </div>
                            </div>
                        </x-card>
                        @endif
                      @endif
                  @endforeach
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      @foreach($listings as $listing) {{-- for loop--}}
                    @if ($listing->day == 'friday')
                      @if ($listing->time == '2-3')
                      <x-card>
                            <div>
                              <div>
                                  <h3 class="text-sm">
                                      <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                  </h3>
                                  {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
  
                                  <div class="text-sm">
                                      <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                  </div>
                              </div>
                          </div>
                      </x-card>
                      @endif
                    @endif
                @endforeach
                    </td>
                </tr>
  
                <tr class="border-b bg-purple-100 border-purple-200">
                  <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                      3pm - 4pm
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    @foreach($listings as $listing) {{-- for loop--}}
                    @if ($listing->day == 'monday')
                      @if ($listing->time == '3-4')
                      <x-card>
                            <div>
                              <div>
                                  <h3 class="text-sm">
                                      <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                  </h3>
                                  {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
  
                                  <div class="text-sm">
                                      <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                  </div>
                              </div>
                          </div>
                      </x-card>
                      @endif
                    @endif
                @endforeach
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    @foreach($listings as $listing) {{-- for loop--}}
                    @if ($listing->day == 'tuesday')
                      @if ($listing->time == '3-4')
                      <x-card>
                            <div>
                              <div>
                                  <h3 class="text-sm">
                                      <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                  </h3>
                                  {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
  
                                  <div class="text-sm">
                                      <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                  </div>
                              </div>
                          </div>
                      </x-card>
                      @endif
                    @endif
                @endforeach
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    @foreach($listings as $listing) {{-- for loop--}}
                    @if ($listing->day == 'wednesday')
                      @if ($listing->time == '3-4')
                      <x-card>
                            <div>
                              <div>
                                  <h3 class="text-sm">
                                      <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                  </h3>
                                  {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
  
                                  <div class="text-sm">
                                      <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                  </div>
                              </div>
                          </div>
                      </x-card>
                      @endif
                    @endif
                @endforeach
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      @foreach($listings as $listing) {{-- for loop--}}
                      @if ($listing->day == 'thursday')
                        @if ($listing->time == '3-4')
                        <x-card>
                              <div>
                                <div>
                                    <h3 class="text-sm">
                                        <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                    </h3>
                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                    <div class="text-sm">
                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                    </div>
                                </div>
                            </div>
                        </x-card>
                        @endif
                      @endif
                  @endforeach
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      @foreach($listings as $listing) {{-- for loop--}}
                      @if ($listing->day == 'friday')
                        @if ($listing->time == '3-4')
                        <x-card>
                              <div>
                                <div>
                                    <h3 class="text-sm">
                                        <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                    </h3>
                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                    <div class="text-sm">
                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                    </div>
                                </div>
                            </div>
                        </x-card>
                        @endif
                      @endif
                  @endforeach
                    </td>
                </tr>
  
                <tr class="border-b bg-blue-100 border-blue-200 ">
                  <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                    4pm - 5pm
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    @foreach($listings as $listing) {{-- for loop--}}
                    @if ($listing->day == 'monday')
                      @if ($listing->time == '4-5')
                      <x-card>
                            <div>
                              <div>
                                  <h3 class="text-sm">
                                      <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                  </h3>
                                  {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
  
                                  <div class="text-sm">
                                      <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                  </div>
                              </div>
                          </div>
                      </x-card>
                      @endif
                    @endif
                @endforeach
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    @foreach($listings as $listing) {{-- for loop--}}
                    @if ($listing->day == 'tuesday')
                      @if ($listing->time == '4-5')
                      <x-card>
                            <div>
                              <div>
                                  <h3 class="text-sm">
                                      <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                  </h3>
                                  {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
  
                                  <div class="text-sm">
                                      <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                  </div>
                              </div>
                          </div>
                      </x-card>
                      @endif
                    @endif
                @endforeach
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    @foreach($listings as $listing) {{-- for loop--}}
                    @if ($listing->day == 'wednesday')
                      @if ($listing->time == '4-5')
                      <x-card>
                            <div>
                              <div>
                                  <h3 class="text-sm">
                                      <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                  </h3>
                                  {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
  
                                  <div class="text-sm">
                                      <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                  </div>
                              </div>
                          </div>
                      </x-card>
                      @endif
                    @endif
                @endforeach
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      @foreach($listings as $listing) {{-- for loop--}}
                      @if ($listing->day == 'thursday')
                        @if ($listing->time == '4-5')
                        <x-card>
                              <div>
                                <div>
                                    <h3 class="text-sm">
                                        <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                    </h3>
                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                    <div class="text-sm">
                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                    </div>
                                </div>
                            </div>
                        </x-card>
                        @endif
                      @endif
                  @endforeach
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      @foreach($listings as $listing) {{-- for loop--}}
                      @if ($listing->day == 'friday')
                        @if ($listing->time == '4-5')
                        <x-card>
                              <div>
                                <div>
                                    <h3 class="text-sm">
                                        <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                    </h3>
                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                    <div class="text-sm">
                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                    </div>
                                </div>
                            </div>
                        </x-card>
                        @endif
                      @endif
                  @endforeach
                    </td>
                </tr>
  
                <tr class="border-b bg-purple-100 border-purple-200">
                  <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                      5pm - 6pm
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    @foreach($listings as $listing) {{-- for loop--}}
                    @if ($listing->day == 'monday')
                      @if ($listing->time == '5-6')
                      <x-card>
                            <div>
                              <div>
                                  <h3 class="text-sm">
                                      <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                  </h3>
                                  {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
  
                                  <div class="text-sm">
                                      <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                  </div>
                              </div>
                          </div>
                      </x-card>
                      @endif
                    @endif
                @endforeach
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    @foreach($listings as $listing) {{-- for loop--}}
                    @if ($listing->day == 'tuesday')
                      @if ($listing->time == '5-6')
                      <x-card>
                            <div>
                              <div>
                                  <h3 class="text-sm">
                                      <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                  </h3>
                                  {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
  
                                  <div class="text-sm">
                                      <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                  </div>
                              </div>
                          </div>
                      </x-card>
                      @endif
                    @endif
                @endforeach
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    @foreach($listings as $listing) {{-- for loop--}}
                    @if ($listing->day == 'wednesday')
                      @if ($listing->time == '5-6')
                      <x-card>
                            <div>
                              <div>
                                  <h3 class="text-sm">
                                      <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                  </h3>
                                  {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
  
                                  <div class="text-sm">
                                      <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                  </div>
                              </div>
                          </div>
                      </x-card>
                      @endif
                    @endif
                @endforeach
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      @foreach($listings as $listing) {{-- for loop--}}
                      @if ($listing->day == 'thursday')
                        @if ($listing->time == '5-6')
                        <x-card>
                              <div>
                                <div>
                                    <h3 class="text-sm">
                                        <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                    </h3>
                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                    <div class="text-sm">
                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                    </div>
                                </div>
                            </div>
                        </x-card>
                        @endif
                      @endif
                  @endforeach
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      @foreach($listings as $listing) {{-- for loop--}}
                      @if ($listing->day == 'friday')
                        @if ($listing->time == '5-6')
                        <x-card>
                              <div>
                                <div>
                                    <h3 class="text-sm">
                                        <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                    </h3>
                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                    <div class="text-sm">
                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                    </div>
                                </div>
                            </div>
                        </x-card>
                        @endif
                      @endif
                  @endforeach
                    </td>
                </tr>
  
                <tr class="border-b bg-blue-100 border-blue-200 ">
                  <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                    6pm - 7pm
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    @foreach($listings as $listing) {{-- for loop--}}
                    @if ($listing->day == 'monday')
                      @if ($listing->time == '6-7')
                      <x-card>
                            <div>
                              <div>
                                  <h3 class="text-sm">
                                      <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                  </h3>
                                  {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
  
                                  <div class="text-sm">
                                      <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                  </div>
                              </div>
                          </div>
                      </x-card>
                      @endif
                    @endif
                @endforeach
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    @foreach($listings as $listing) {{-- for loop--}}
                    @if ($listing->day == 'tuesday')
                      @if ($listing->time == '6-7')
                      <x-card>
                            <div>
                              <div>
                                  <h3 class="text-sm">
                                      <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                  </h3>
                                  {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
  
                                  <div class="text-sm">
                                      <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                  </div>
                              </div>
                          </div>
                      </x-card>
                      @endif
                    @endif
                @endforeach
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    @foreach($listings as $listing) {{-- for loop--}}
                    @if ($listing->day == 'wednesday')
                      @if ($listing->time == '6-7')
                      <x-card>
                            <div>
                              <div>
                                  <h3 class="text-sm">
                                      <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                  </h3>
                                  {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
  
                                  <div class="text-sm">
                                      <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                  </div>
                              </div>
                          </div>
                      </x-card>
                      @endif
                    @endif
                @endforeach
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      @foreach($listings as $listing) {{-- for loop--}}
                      @if ($listing->day == 'thursday')
                        @if ($listing->time == '6-7')
                        <x-card>
                              <div>
                                <div>
                                    <h3 class="text-sm">
                                        <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                    </h3>
                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                    <div class="text-sm">
                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                    </div>
                                </div>
                            </div>
                        </x-card>
                        @endif
                      @endif
                  @endforeach
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      @foreach($listings as $listing) {{-- for loop--}}
                      @if ($listing->day == 'friday')
                        @if ($listing->time == '6-7')
                        <x-card>
                              <div>
                                <div>
                                    <h3 class="text-sm">
                                        <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
                                    </h3>
                                    {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
    
                                    <div class="text-sm">
                                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                                    </div>
                                </div>
                            </div>
                        </x-card>
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
  {{--
  <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
  
      @unless(count($listings)==0)
  
          @foreach($listings as $listing)
              <x-listing-card :listing="$listing" />
          @endforeach
  
          @else
                  <p>No Listing Found</p>
      @endunless
  
  </div>
  
  <div class="mt-6 p-4">
      {{$listings->Links()}}
  </div>
  --}}
  </x-layout>
  