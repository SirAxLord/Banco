<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cuentas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Contenido de la página de Cuentas -->
                    <h1 class="text-2xl font-bold mb-4">Cuentas</h1>
                    <a href="{{ route('empleado.cuentas.create') }}" class="mb-4 inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Crear Nueva Cuenta</a>
                    <table class="min-w-full bg-white dark:bg-gray-700">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 border-b">ID</th>
                                <th class="py-2 px-4 border-b">Tipo</th>
                                <th class="py-2 px-4 border-b">Saldo</th>
                                <th class="py-2 px-4 border-b">Cliente ID</th>
                                <th class="py-2 px-4 border-b">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cuentas as $cuenta)
                                <tr>
                                    <td class="py-2 px-4 border-b">{{ $cuenta->id }}</td>
                                    <td class="py-2 px-4 border-b">{{ $cuenta->tipo }}</td>
                                    <td class="py-2 px-4 border-b">{{ $cuenta->saldo }}</td>
                                    <td class="py-2 px-4 border-b">{{ $cuenta->cliente_id }}</td>
                                    <td class="py-2 px-4 border-b">
                                        <a href="{{ route('empleado.cuentas.edit', $cuenta->id) }}" class="text-blue-500 hover:underline">Editar</a>
                                        <form action="{{ route('empleado.cuentas.destroy', $cuenta->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:underline" onclick="return confirm('¿Estás seguro de que deseas eliminar esta cuenta?')">Eliminar</button>
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
</x-layouts.app>