@extends('index')

<!-- Modal 1 -->
<dialog id="my_modal_update" class="modal" x-data="{ activeView: 'updateVales' }" @click.outside="openModal = false">
    <div class="modal-box max-w-full md:max-w-7xl bg-[#84878d]">
        <!-- Cargar formulario de edición si la vista está activa -->
        <div x-show="activeView === 'updateVales' && correlativoId">
            <h2 class="text-xl" style="color: #fff">Editar Correlativo: <span x-text="correlativoId"></span></h2>
            <!-- Aquí va el formulario de edición cargado dinámicamente -->
            @include('components.upgradeVales') <!-- Incluye el formulario si es necesario -->
        </div>

    </div>

    <!-- Botón para cerrar -->
    <form method="dialog" class="modal-backdrop">
        <button>close</button>
    </form>
</dialog>

<!-- Script para abrir el modal automáticamente -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('my_modal_update').showModal();
    });
</script>