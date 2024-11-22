<div class="mb-2">
    <hr />
</div>
<h2 class="text-center text-white font-bold mb-[1.6rem] mt-[1.6rem] text-[1.2rem]">
    Actualización de vales hacia bodega general
</h2>
<div class="mb-2">
    <hr />
</div>
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold text-center text-white mb-6">Lista de Correlativos</h1>

    @if ($correlativos->isEmpty())
        <p class="text-center text-white">No hay correlativos disponibles.</p>
    @else
        <table class="table-auto w-full text-white">
            <thead>
                <tr>
                    <th class="px-4 py-2 border">Correlativo</th>
                    <th class="px-4 py-2 border">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($correlativos as $correlativo)
                    <tr>
                        <td class="px-4 py-2 border">{{ $correlativo->corr }}</td>
                        <td class="px-4 py-2 border">
                            <!-- Aquí puedes agregar botones para actualizar, ver detalles, etc. -->
                            <a href="{{ route('vales.edit', $correlativo->corr) }}" class="text-gray-50 hover:underline">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

</div>
