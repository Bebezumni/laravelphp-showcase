<x-layout>
<x-card class="p-10 rounded max-w-lg mx-auto mt-24">
<header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-1">
        Create a Device
    </h2>
    <p class="mb-4">Post a device on Sounds Bezumni</p>
</header>

<form method="POST" action="/devices" enctype="multipart/form-data">
    @csrf
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
        ></textarea>
        @error('description')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <button
            class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
        >
            Post Device
        </button>

        <a href="/" class="text-black ml-4"> Back </a>
    </div>
</form>
</x-card>
</x-layout>
