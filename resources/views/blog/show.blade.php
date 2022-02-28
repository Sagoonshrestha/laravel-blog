<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show Post') }}
        </h2>
    </x-slot>

    <div class="w-4/5 m-auto text-left py-2">
        <div class="py-20">
            <h1 class="text-6xl">
                {{$post->title}}
            </h1>
        </div>
    </div>
    <div class="w-4/5 m-auto pt-10">
        <span class="text-gray-500">
            By <span class="font-bold italic text-gray-800">
                {{$post->user->name}}</span>, Created on{{ date('jS M Y', strtotime($post->updated_at))}}</span>
                </span>
                <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                    {{$post->description}}
                </p>
    </div>
    
</x-app-layout>
