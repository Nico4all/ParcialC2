<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit estudiantes') }}
        </h2>
    </x-slot>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('estudiantes.update', $estudiante->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="id" class="form-label">Code</label>
                            <input type="text" class="form-control" id="id" name="id" disabled value="{{ $estudiante->id }}">
                            <div id="idHelp" class="form-text">Estudiante code</div>
                        </div>
                        <!-- id	nombre	apellido	email	nivel_educativo	created_at	updated_at	 -->
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" required class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="{{ $estudiante-> nombre}}">
                        </div>

                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="text" required class="form-control" id="apellido" name="apellido" placeholder="Apellido" value="{{ $estudiante-> apellido}}">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" required class="form-control" id="email" name="email" placeholder="Email" value="{{ $estudiante-> email}}">
                        </div>

                        <div class="mb-3">
                            <label for="nivel_educativo" class="form-label">Grado</label>
                            <input type="text" required class="form-control" id="nivel_educativo" name="nivel_educativo" placeholder="Grado" value="{{ $estudiante-> nivel_educativo}}">
                        </div>

                        <div class="mt-3">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save</button>
                            <a href="{{ route('estudiantes.index') }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded ml-2">Cancel</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>