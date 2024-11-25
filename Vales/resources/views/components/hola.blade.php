<!-- Cargar formulario de edición si la vista está activa -->
<div x-show="activeView === 'updateVales' && correlativoId">
    <h2 class="text-xl">Editar Correlativo: <span x-text="correlativoId"></span></h2>
    <!-- Aquí va el formulario de edición cargado dinámicamente -->
    @include('components.upgradeVales') <!-- Incluye el formulario si es necesario -->
</div>
