<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inscripciones') }}
        </h2>
    </x-slot>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <a href="{{ route('inscripciones.create') }}"
                class="bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded ml-2">Add</a>
                    <table class="table">
                        <thead>
<!--                         id	curso_id	instructor_id	estudiante_id	fecha_inscripción	created_at	updated_at	 -->

                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Curso</th>
                                <th scope="col">Instructor</th>
                                <th scope="col">Estudiante</th>
                                <th scope="col">Fecha Inscripcion</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($inscripciones as $inscripcion)
                                <tr>
                                    <th scope="row">{{ $inscripcion->id }}</th>
                                    <td>{{ $inscripcion->curso_id }}</td>
                                    <td>{{ $inscripcion->instructor_id }}</td>
                                    <td>{{ $inscripcion->estudiante_id }}</td> 
                                    <td>{{ $inscripcion->fecha_inscripción }}</td>
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