<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blog') }}
        </h2>
    </x-slot>

    <div class="w-4/5 m-auto text-left py-2">
        <div class="py-15">
            <h1 class="text-6xl">
                Create Post
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
       <form action="/blog" method="POST" enctype="multipart/form-data">
           @csrf
           
           <input 
           type="text" 
           name="title" 
           placeholder="Title....." 
           class="bg-transparent block border-0 border-b-2 w-full h-20 text-6xl">
           <textarea 
                name="description" 
                placeholder="Description" 
                class="py-20 bg-transparent block border-0 border-b-2 w-full h-300 text-6xl overflow-hidden"
           ></textarea>
        <div class="bg-grey-lighter py-10">
            <label class="w-44 flex flex-col items-center px-2 py-3 bg-white rounded-lg shadow-lg
             tracking-wide uppercase border border-blue cursor-pointer">
                <span class="mt-2 text-base leading-normal">
                    Select a file
                </span>
                <input type="file" name="image" class="hidden">
            </label>
        </div>
        <button
        type="submit"
        class="uppercase mb-4 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl"
        >
            Submit Form
        </button>
       </form>
   </div>
    
</x-app-layout>
