<x-layout>
    <x-card class="p-10 rounded max-w-lg mx-auto mt-24">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Edit a Device
        </h2>
        <p class="mb-4">Edit: {{$device->title}}</p>
    </header>

    <form method="POST" action="/devices/{{$device->id}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-6">
            <label
                for="title"
                class="inline-block text-lg mb-2"
                >Device Name</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="title"
                placeholder="Example: Microphone, Guitar"
                value="{{$device->title}}"
            />
            @error('title')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="brandname" class="inline-block text-lg mb-2"
                >Brand Name</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="brandname"
                placeholder="Example: Fender, Ibanez"
                value="{{$device->brandname}}"
            />
            @error('brandname')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label
                for="modelname"
                class="inline-block text-lg mb-2"
                >Model Name</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="modelname"
                placeholder="Example: F140, G88"
                value="{{$device->modelname}}"
            />
            @error('modelname')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="chars" class="inline-block text-lg mb-2">
                Device stats
            </label>
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="chars"
                placeholder="Example: Wood, Cardioid"
                value="{{$device->chars}}"
            />
            @error('chars')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="picture" class="inline-block text-lg mb-2">
                Beautiful Picture
            </label>
            <input
                type="file"
                class="border border-gray-200 rounded p-2 w-full"
                name="picture"
            />
            <img
                            class="mr-6 mb-6"
                            src="{{$device->picture ? asset('storage/' . $device->picture) : asset('/images/no-image.png')}}"
                            alt=""
                        />
            @error('picture')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label
                for="description"
                class="inline-block text-lg mb-2"
            >
                Device Description
            </label>
            <textarea
                class="border border-gray-200 rounded p-2 w-full"
                name="description"
                rows="10"
                placeholder="Include description"
                value="{{$device->description}}"
            ></textarea>
            @error('description')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button
                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
            >
                Submit Device Editing
            </button>

            <a href="/" class="text-black ml-4"> Back </a>
        </div>
    </form>
    </x-card>
    </x-layout>
