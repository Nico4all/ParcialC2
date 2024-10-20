<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit cursos') }}
        </h2>
    </x-slot>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('cursos.update', $curso->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="id" class="form-label">Code</label>
                            <input type="text" class="form-control" id="id" name="id" disabled value="{{ $curso->id }}">
                            <div id="idHelp" class="form-text">Curso code</div>
                        </div>

                        <div class="mb-3">
                            <label for="titulo" class="form-label">Titulo</label>
                            <input type="text" required class="form-control" id="título" name="título" placeholder="título" value="{{ $curso->título }}">
                        </div>

                        <div class="mb-3">
                            <label for="descripción" class="form-label">Descripción</label>
                            <input type="text" required class="form-control" id="descripción" name="descripción" placeholder="descripción" value="{{ $curso->descripción }}">
                        </div>

                        <div class="mb-3">
                            <label for="duración" class="form-label">Duración</label>
                            <input type="text" required class="form-control" id="duración" name="duración" placeholder="duración" value="{{ $curso->duración }}">
                        </div>

                        <div class="mb-3">
                            <label for="precio" class="form-label">Precio</label>
                            <input type="text" required class="form-control" id="precio" name="precio" placeholder="precio" value="{{ $curso->precio }}">
                        </div>

                        <div class="mb-3">
                            <label for="categoría" class="form-label">Categoría</label>
                            <input type="text" required class="form-control" id="categoría" name="categoría" placeholder="categoría" value="{{ $curso->categoría }}">
                        </div>

                        <div class="mt-3">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save</button>
                            <a href="{{ route('cursos.index') }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded ml-2">Cancel</a>
                        </div>
                </div>
            </div>
        </div>
</x-app-layout>