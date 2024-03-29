<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blog') }}
        </h2>
    </x-slot>

    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-6xl">
                Blog Post
            </h1>
        </div>
    </div>
    @if(session()->has('message'))
    <div class="m-auto w-4/5 mt-10 pl-2">
        <p class="w-1/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
            {{session()->get('message')}}
        </p>
    </div>
    @endif
    @if(Auth::check())
    <div class="pt-10 w-4/5 m-auto">
        <a 
        href="/blog/create"
        class="bg-blue-500 uppercase text-black-100 text-xs font-extrabold px-6 py-4 rounded-3xl"
        >Create Post
        </a>
    </div>
    @endif
    @foreach($posts as $post)
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-10 border-b border-gray-2">
        <div>
            <img src="http://localhost:8000/image/{{$post->image_path}}" alt="" width="700px">
        </div>
        <div>
            <h2 class="text-gray-700 font-bold text-5xl pb-4">{{$post->title}} </h2>
            <span class="text-gray-700">
                By <span class="font-bold italic text-gray-800">
                    {{$post->user->name}}
                </span>, Created on {{ date('jS M Y', strtotime($post->updated_at))}} 
            </span>
            <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                {{$post->description}}
            </p>
            <a href="/blog/{{$post->slug}}" class="uppercase bg-blue-500 text-gray-100 text-lg font-bold py-4 px-8 rounded-3xl">
            Keep Reading
            </a>
            @if(Auth::user()->id && Auth::user()->id==$post->user_id)
            <span class="float-right">
                <a href="/blog/{{$post->slug}}/edit"
                class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2 ">
                    Edit
                </a>
            </span>
            <span class="float-right">
                <form 
                action="/blog/{{$post->slug}}"
                method="POST"
                >
                @csrf
                @method('delete')
                <button
                class="text-red-500 pr-3" type="submit"
                >
                Delete
                </button>
            </form>
            </span>
            @endif
        </div>
    </div>
    @endforeach 
    
</x-app-layout>
