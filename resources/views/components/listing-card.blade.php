@props(['listing'])

<x-card>
    <div>
        <div>
            <h1 class="text-sm" style="text-transform:uppercase;">
                <a href="/listings/{{$listing->id}}"style="text-transform:uppercase;">{{$listing->course}}</a>
            </h1>
            {{--<x-listing-tags :tagsCsv="$listing->tags" />--}}
                <h3 class="text-sm" style="text-transform:uppercase;">
                    <a href="/listings/{{$listing->id}}"style="text-transform:uppercase;">{{$listing->type}}</a>
                </h3>
            <div class="text-sm" style="text-transform:uppercase;">
                <i class="fa-solid fa-location-dot"style="text-transform:uppercase;"></i> {{$listing->location}}
            </div>
        </div>
    </div>
</x-card>
