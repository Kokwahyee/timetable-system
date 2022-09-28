@props(['listing'])

<x-card>
    <div>
        <div>
            <h1 class="text-sm">
                <a href="/listings/{{$listing->id}}">{{$listing->course}}</a>
            </h1>
            {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
                <h3 class="text-sm">
                    <a href="/listings/{{$listing->id}}">{{$listing->type}}</a>
                </h3>
            <div class="text-sm">
                <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
            </div>
        </div>
    </div>
</x-card>
