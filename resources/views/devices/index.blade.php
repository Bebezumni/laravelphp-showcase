<x-layout>

@include('partials._hero')
@include('partials._search')




@foreach($devices as $device)
<x-device-card :device="$device"></x-device-card>
@endforeach
<div class="mt p-4">
    {{$devices->links()}}
</div>
</x-layout>
