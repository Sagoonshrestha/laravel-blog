<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blog') }}
        </h2>
    </x-slot>

    <div class="w-4/5 m-auto text-left py-2">
        <div class="py-15">
            <h1 class="text-6xl">
                Edit Post
            </h1>
        </div>
    </div>
    @if($errors->any())
    <div class="w-4/5 m-auto">
    <ul>
        @foreach($errors->all() as $error)
            <li class="w-1/5 text-gray-50 bg-red-700 rounded-2xl py-4">
                {{$error}}
            </li>
        @endforeach
    </ul>
    </div>
    @endif
   <div class="w-4/5 m-auto pt-20">
       <form action="/blog/{{$post->slug}}" method="POST" enctype="multipart/form-data">
           @csrf
           @method('PUT')
           <input 
           type="text" 
           name="title" 
           value="{{$post->title}}"
           class="bg-transparent block border-0 border-b-2 w-full h-20 text-6xl">
           <textarea 
                name="description" 
                placeholder="Description" 
                class="py-20 bg-transparent block border-0 border-b-2 w-full h-300 text-6xl overflow-hidden"
           >{{$post->description}}</textarea>
        <button
        type="submit"
        class="uppercase mb-4 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl mt-4"
        >
            Submit Form
        </button>
       </form>
   </div>
    
</x-app-layout>
