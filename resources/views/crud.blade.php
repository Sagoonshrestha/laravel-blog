<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crud') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <style>
                        td{
                            border: 1px solid 	#000000;
                            padding: 10px;
                        }
                    </style>
                    <table>
                        <thead>
                            <tr border="1px">
                            <td>Id</td>
                            <td>First Name</td>
                            <td>Last Name</td>
                            <td>Address</td>
                            <td>Contact</td>
                            <td>Activity</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($forminfo as $data)
                        <tr border="1px">
                        <td>{{$data->id}}</td>
                        <td>{{$data->first_name}}</td>
                        <td>{{$data->last_name}}</td>
                        <td>{{$data->address}}</td>
                        <td>{{$data->contact}}</td>
                        <td>
                            <a href="{{route('crud.edit',$data->id)}}">Edit</a>
                            <a href="{{route('crud.delete',$data->id)}}">Delete</a>
                        </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>