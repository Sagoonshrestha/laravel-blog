<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="background-image grid grid-cols-1 mb-4">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <!-- <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md-14"> 
                    Do you want to be developer
                </h1>
                <a 
                href="#" 
                class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                Read More
                </a> -->
            </div>
        </div>
    </div>
    <div class="sm:grid grid-cols-2 gap-20 w-25 mx-auto py-15 border-b border-gray-200">
        <div class="mb-4 ">
            <img src="http://localhost:8000/image/images.jpg" alt="" width="700px">
        </div>
        <div class="m-auto sm:m-auto text-left block">
            <h1 class="text-4xl font-extrabold text-gray-600">
                Struggling to be better web designer.
            </h1>
            <p class="font-extrabold text-gray-600 text-l py-9">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt ab tenetur nisi non perspiciatis debitis praesentium, nulla eligendi minima atque repudiandae ex quisquam at voluptates! Minima quia cumque dignissimos omnis.
            </p>
            <a 
            href="#"
            class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl" 
            >
            Find Out More
            </a>
        </div>
    </div>
    <div class="text-center py-8 bg-black text-white">
        <h2 class=" text-2xl py-4  text-l ">
            I'm expert in ....
        </h2>
        <span class="font-extrabold py-1 block text-4xl text-white">
            Ux design
        </span>
        <span class="font-extrabold py-1 block text-4xl text-white">
            Web designer
        </span>
        <span class="font-extrabold py-1 block text-4xl text-white">
            Project management
        </span>
        <span class="font-extrabold py-1 block text-4xl text-white">
            Web Development
        </span>
    </div>
    <div class="text-center py-10">
        <span class="uppercase text-s text-gray-400">
                Blog
        </span>
        <h2 class="text-4xl font-bold py-10">
                Recent Posts
        </h2>
        <p class="m-auto w-4/5 text-gray-500 pb-5">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
        </p>
        <div class="sm:grid grid-cols-2 w-4/5 m-auto">
            <div class="flex bg-yellow-700 text-gray-100 pt-10">
                <div class="m-auto pb-16 sm:m-auto w-4/5 block pt-4">
                    <span class="uppercase text-xs">
                        PHP
                    </span>
                    <h3 class="text-xl font-bold py-10">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur perferendis maxime, iusto corrupti debitis, numquam libero quia porro quae, eos sed sint facere es
                    </h3>
                    <a href="#" 
                    class="upppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold
                    py-3 px-5 rounded-3xl">
                    Find Out More
                    </a>
                </div>
            </div>
            <div>
                <img src="http://localhost:8000/image/images.jpg" alt="" width="700px">
            </div>
        </div>
    </div>
</x-app-layout>
