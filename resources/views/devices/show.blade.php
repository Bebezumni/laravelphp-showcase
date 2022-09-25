<x-layout>
@include('partials._hero')
<a href="/" class="inline-block text-black ml-4 mb-4"
                ><i class="fa-solid fa-arrow-left"></i> Back
            </a>
            <div class="mx-4">
                <x-card class="p-10">
                    <div
                        class="flex flex-col items-center justify-center text-center"
                    >
                        <img
                            class="mr-6 mb-6"
                            src="{{$device->picture ? asset('storage/' . $device->picture) : asset('/images/no-image.png')}}"
                            alt=""
                        />

                        <h3 class="text-2xl mb-2">{{$device->title}}</h3>
                        <ul class="flex">
                            <li
                                class="bg-black text-white rounded-xl px-3 py-1 mr-2"
                            >
                                <a href="#">{{$device->modelname}}</a>
                            </li>
                        </ul>
                        <div class="text-lg my-4">
                            <i class="fa-solid fa-circle"></i> {{$device->chars}}
                        </div>
                        <div class="border border-gray-200 w-full mb-6"></div>
                        <div>
                            <h3 class="text-3xl font-bold mb-4">
                                {{$device->title}} {{$device->brandname}}
                            </h3>
                            <div class="text-lg space-y-6">
                                <p>{{$device->description}}</p>
                                <a
                                    href="https://www.google.com/search?q={{$device->modelname}}"
                                    target="_blank"
                                    class="block bg-black text-white py-2 rounded-xl hover:opacity-80"
                                    ><i class="fa-solid fa-globe"></i>Google more about it</a
                                >
                            </div>
                        </div>
                    </div>
                </x-card>

                <x-card class="mt-4 p-2 flex space-x-6">
                    <a href="/devices/{{$device->id}}/edit">
                    <i class="fa-solid fa-pencil"></i>Edit
                    </a>

                    <form method='POST' action="/devices/{{$device->id}}">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-500"><i class="fa-solid fa-trash"></i></button>

                    </form>
                </x-card>

            </div>

</x-layout>
