<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Instructores') }}
        </h2>
    </x-slot>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table">
                        <thead>
                        <!-- id	nombre	apellido	especialidad	biografía	created_at	updated_at	 -->
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Especialidad</th>
                                <th scope="col">Biografia</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($instructores as $instructor)
                                <tr>
                                    <th scope="row">{{ $instructor->id }}</th>
                                    <td>{{ $instructor->nombre }}</td>
                                    <td>{{ $instructor->apellido }}</td>
                                    <td>{{ $instructor->especialidad }}</td> 
                                    <td>{{ $instructor->biografia }}</td> 
                                    <td>
                                    
                                    </form>

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