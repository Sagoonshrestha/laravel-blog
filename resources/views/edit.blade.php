<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Contactus') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <form action="{{ route('crud.update',$formedit->id)}}" method="post">
                    @csrf
                    
                    <x-label>Firstname</x-label>
                    <x-input type="text" name="first_name" :value="$formedit->first_name"></x-input>
                    <x-label>Lastname</x-label>
                    <x-input type="text" name="last_name" :value="$formedit->last_name"></x-input>
                    <x-label>Address</x-label>
                    <x-input type="text" name="address" :value="$formedit->address"></x-input>
                    <x-label>Contact</x-label>
                    <x-input type="text" name="contact" :value="$formedit->contact"></x-input>
                    <br><br>
                    <x-button type="submit">insert</x-button>
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>