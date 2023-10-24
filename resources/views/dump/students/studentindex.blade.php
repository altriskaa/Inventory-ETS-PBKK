@extends('students.layout')
@section('content')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="card-header">
                                    <h2>Student CRUD (Create, Read, Update and Delete)</h2>
                                </div>
                                <div class="card-body">
                                    <a href="{{ url('/students/create') }}" class="btn btn  -success btn-sm" title="Add New Student">
                                        Add New
                                    </a>
                                    <br/>
                                    <br/>
                                    
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="relative px-6 py-3">
                                                        #
                                                    </th>
                                                    <th scope="col" class="relative px-6 py-3">
                                                        Name
                                                    </th>
                                                    <th scope="col" class="relative px-6 py-3">
                                                        Address
                                                    </th>
                                                    <th scope="col" class="relative px-6 py-3">
                                                        Mobile
                                                    </th>
                                                    <th scope="col" class="relative px-6 py-3">
                                                        Actions
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200">
                                            @foreach($students as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->address }}</td>
                                                    <td>{{ $item->mobile }}</td>
                                                    <td>
                                                        <a href="{{ url('/students/' . $item->id) }}" title="View Student">
                                                            <button class="btn btn-info btn-sm">
                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                View
                                                            </button>
                                                        </a>
                                                        <a href="{{ url('/students/' . $item->id . '/edit') }}" title="Edit Student">
                                                            <button class="btn btn-primary btn-sm">
                                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> 
                                                                Edit
                                                            </button>
                                                        </a>

                                                        <form method="POST" action="{{ url('/students' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                            {{ method_field('DELETE') }}
                                                            {{ csrf_field() }}
                                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm('Confirm delete?')">
                                                            <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>    
                                    </div>
                                    <div class="mt-4">
                                    {{ $students->links() }}
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
