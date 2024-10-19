<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cursos') }}
        </h2>
    </x-slot>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table">
                        <thead>
<!--                         id	título	descripción	duración	precio	categoría	created_at	updated_at	 -->

                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Titulo</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Duracion</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Categoria</th>                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cursos as $curso)
                                <tr>
                                    <th scope="row">{{ $curso->id }}</th>
                                    <td>{{ $curso->título }}</td> 
                                    <td>{{ $curso->descripción }}</td>
                                    <td>{{ $curso->duración }}</td>
                                    <td>{{ $curso->precio }}</td>
                                    <td>{{ $curso->categoría }}</td>
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