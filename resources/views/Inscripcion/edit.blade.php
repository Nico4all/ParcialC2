<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Inscripciones') }}
        </h2>
    </x-slot>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('inscripciones.update', $inscripcion->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="id" class="form-label">Code</label>
                            <input type="text" class="form-control" id="id" name="id" disabled value="{{$inscripcion->id}}">
                            <div id="idHelp" class="form-text">Inscripciones code</div>
                        </div>

                        <div class="mb-3">
                            <label for="nombre" class="form-label">Id Curso</label>
                            <input type="text" required class="form-control" id="curso_id" name="curso_id" placeholder="Id Curso" value="{{$inscripcion->curso_id}}"> 
                        </div>
                        
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Id Instructor</label>
                            <input type="text" required class="form-control" id="instructor_id" name="instructor_id" placeholder="Id Instructor" value="{{$inscripcion->instructor_id}}"> 
                        </div>

                        <div class="mb-3">
                            <label for="nombre" class="form-label">Id estudiante</label>
                            <input type="text" required class="form-control" id="estudiante_id" name="estudiante_id" placeholder="Id Estudiante" value="{{$inscripcion->estudiante_id}}"> 
                        </div>

                        <div class="mb-3">
                            <label for="nombre" class="form-label">Fecha de inscripcion</label>
                            <input type="text" required class="form-control" id="fecha_inscripción" name="fecha_inscripción" placeholder="Fecha de inscripcion" value="{{$inscripcion->fecha_inscripción}}"> 
                        </div>

                        <div class="mt-3">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save</button>
                            <a href="{{ route('inscripciones.index') }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded ml-2">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>