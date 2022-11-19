<x-layout>
    <br>
    <span class="font-bold uppercase font-sans flex items-center justify-center w-screen text-xl"> 
      User List
      </span>
      <div class="flex flex-col">
    <div class="overflow ">
      <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
        <div class="overflow-hidden">
          <table class="min-w-full text-center">
              <thead class="border-b bg-gray-800 boder-gray-900">
              <tr>
                <th scope="col" class="text-sm text-white font-medium px-6 py-4 whitespace-nowrap">
                  Name
                </th>
                <th scope="col" class="text-sm text-white font-medium px-6 py-4 whitespace-nowrap">
                  Email
                </th>
                <th scope="col" class="text-sm text-white font-medium px-6 py-4 whitespace-nowrap">
                  Group
                </th>
                <th scope="col" class="text-sm text-white font-medium px-6 py-4 whitespace-nowrap">
                  Course 1
                </th>
                <th scope="col" class="text-sm text-white font-medium px-6 py-4 whitespace-nowrap">
                  Course 2
                </th>
                <th scope="col" class="text-sm text-white font-medium px-6 py-4 whitespace-nowrap">
                  Course 3
                </th>
                <th scope="col" class="text-sm text-white font-medium px-6 py-4 whitespace-nowrap">
                    Course 4
                </th>
              </tr>
            </thead>
  
            <tbody>
              <tr class="border-b bg-blue-100 border-blue-200">
                
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
  