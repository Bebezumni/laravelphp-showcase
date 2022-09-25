<x-card>
<div class="flex flex-row ">
        <img
            width="400" height="200"
            src="{{$device->picture ? asset('storage/' . $device->picture) : asset('/images/no-image.png')}}"
            alt=""
        />
        <div class= "mx-6">
            <h2 class="text-2xl">
                <a href="/devices/{{$device->id}}">{{$device->title}}</a>
            </h2>
            <h3><div class="text-xl font-bold mb-4">{{$device['brand name']}}</div></h3>
            <ul class="flex">
                <li
                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xl"
                >
                    <a >{{$device->modelname}}</a>
                </li>
            </ul>
            <div class="text-xl font-bold mb-4">{{$device->chars}}</div>
            <div class="text-lg mt-4">
                    <i class="fa-solid fa-circle"></i> {{$device->description}}
            </div>
        </div>
</div>
</x-card>
