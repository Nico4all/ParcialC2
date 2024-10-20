<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Instructor') }}
        </h2>
    </x-slot>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('instructores.store') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="id" class="form-label">Code</label>
                            <input type="text" class="form-control" id="id" name="id" disabled="disabled">
                            <div id="idHelp" class="form-text">Instructor code</div>
                        </div>
                        <!-- id	nombre	apellido	especialidad	biografía	created_at	updated_at -->	
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" required class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                        </div>

                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="text" required class="form-control" id="apellido" name="apellido" placeholder="Apellido">
                        </div>

                        <div class="mb-3">
                            <label for="especialidad" class="form-label">Especialidad</label>
                            <input type="text" required class="form-control" id="especialidad" name="especialidad" placeholder="Especialidad">
                        </div>

                        <div class="mb-3">
                            <label for="biografía" class="form-label">Biografia</label>
                            <input type="text" required class="form-control" id="biografía" name="biografía" placeholder="Biografia">
                        </div>

                        <div class="mt-3">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save</button>
                            <a href="{{ route('instructores.index') }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded ml-2">Cancel</a>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>