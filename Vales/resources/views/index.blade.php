@include('components.navbar')
@include('components.scripts')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.min.js" defer></script>
    <title>Vales Combustibles</title>
</head>

<body class="bg-[#30475e]">
    <div class="relative flex flex-wrap flex-col  items-center justify-center min-h-screen w-full">
        <div
            class="flex relative flex-wrap flex-col sm:flex-col md:flex-col lg:flex-col xl:flex-col items-center justify-center pt-7">

            @if (session('user') && optional(session('user'))->username === 'admin')
                <!-- Botón para la perspectiva de administrador -->
                <a href="{{ url('/sistema-administracion') }}">
                    <button type="button"
                        class="text-white bg-[#30475e] hover:bg-[#465f79] focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 m-2">
                        Perspectiva de Administrador
                    </button>
                </a>
            @endif
        </div>
        @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded-lg mb-4">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="bg-red-500 text-white p-4 rounded-lg mb-4">
                {{ session('error') }}
            </div>
        @endif

        <div
            class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-3 gap-y-10 gap-x-12 items-center p-8 max-[1300px]:lg:grid-cols-2">

            <a href="#" onclick="my_modal_1.showModal()">
                {{-- button 1 --}}
                <div class="card card-compact bg-base-100 w-full sm:w-80 md:w-96 shadow-xl button-start">
                    <figure class="img-icon-container">
                        <img src="{{ asset('img/gas-station.png') }}" alt="gas-station" />
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title">Ingreso de vales de combustible</h2>
                        <p>&nbsp; Bodega general</p>
                    </div>
                </div>
                {{-- button 1 end --}}
            </a>

            <a href="#" onclick="my_modal_2.showModal()">
                {{-- button 2 --}}
                <div class="card card-compact bg-base-100 w-full sm:w-80 md:w-96 shadow-xl button-start">
                    <figure class="img-icon-container">
                        <img src="{{ asset('img/warehouse-icon-2.png') }}" alt="vouchers" />
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title">Entrega de vales para combustible</h2>
                        <p>&nbsp; (Diesel o gasolina)</p>
                    </div>
                </div>
                {{-- button 2 end --}}
            </a>

            <a href="#" onclick="my_modal_3.showModal()">
                {{-- button 3 --}}
                <div class="card card-compact bg-base-100 w-full sm:w-80 md:w-96 shadow-xl button-start">
                    <figure class="img-icon-container">
                        <img src="{{ asset('img/proyecto-de-ley.png') }}" alt="vouchers" />
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title">Liquidación de vales en bodega general</h2>
                    </div>
                </div>
                {{-- button 3 end --}}
            </a>
        </div>

    </div>

    <!-- Modal 1 -->
    <dialog id="my_modal_1" class="modal" x-data="{ activeView: 'ingresoVales' }" @click.outside="openModal = false">
        <div class="modal-box max-w-full md:max-w-7xl bg-[#84878d]">
            <!-- Botones para seleccionar el contenido -->
            <div style="width: 100%; display: flex; justify-content: center; margin-bottom: 10px;">
                <button class="mr-4 btn btn-accent" @click="activeView = 'ingresoVales'">
                    Ingreso de Vales
                </button>
                <button class="ml-4 btn btn-accent" @click="activeView = 'updateVales'">
                    Actualización de Vales
                </button>
            </div>

            <!-- Contenido dinámico -->
            <div x-show="activeView === 'ingresoVales'">
                @include('components.ingresoVales')
            </div>

            <div x-show="activeView === 'updateVales'">
                @include('components.updateVales')
            </div>

            @yield('hola')

        </div>

        <!-- Botón para cerrar -->
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>

    <!-- Script para abrir el modal -->
    <script>
        document.querySelector('.open-modal-1').addEventListener('click', function() {
            document.getElementById('my_modal_1').showModal();
        });
    </script>


    <!-- Model 2 -->
    <dialog id="my_modal_2" class="modal " x-data="{ openModal: false, activeTab: 'tabla1' }" @click.outside="openModal = false">
        <div class="modal-box max-w-full md:max-w-7xl bg-[#84878d]">


            <div style="width: 100%; display: flex; justify-content: center; margin: 0px 0px 10px 0px;">
                <button class="mr-4 btn btn-accent" @click="activeTab = 'tabla1'"
                    :class="{ 'btn-accent': activeTab === 'tabla1' }">Tabla 1</button>
                <button class="ml-4 btn btn-accent" @click="activeTab = 'tabla2'"
                    :class="{ 'btn-accent': activeTab === 'tabla2' }">Tabla 2</button>
            </div>
            <form class="p-4 md:p-5" method="POST">

                <div class="mb-2">
                    <hr />
                </div>
                <div x-show="activeTab === 'tabla1'">
                    @include('components.tabla-1')
                </div>

                <div x-show="activeTab === 'tabla2'">
                    @include('components.tabla-2')
                </div>


            </form>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>

    <script>
        document.querySelector('[onclick="document.getElementById(\'my_modal_2\').showModal()"]').addEventListener('click',
            function() {
                document.getElementById('my_modal_2').showModal();
            });
    </script>


    <!-- Modal 3 -->
    <dialog id="my_modal_3" class="modal ">
        <div class="modal-box max-w-7xl bg-[#84878d]">
            <h2 class="text-center text-white font-bold mb-[1.6rem] mt-[0.8rem] text-[1.2rem]">Liquidación Vales de
                Combustibles
            </h2>

            <div class="mb-2">
                <hr />
            </div>
            <form class="p-4 md:p-5 " method="POST">
                <div class="flex w-full mb-10 ">
                    <label class="form-control w-full flex-grow mr-4">
                        <div class="label flex-grow">
                            <span class="label-text text-white">Número de solicitud</span>
                        </div>
                        <input type="text" placeholder="Type here"
                            class="text-black bg-white input input-bordered w-full " />
                    </label>

                    <label class="form-control w-full flex-grow">
                        <div class="label flex-grow">
                            <span class="label-text text-white">Programa:</span>
                        </div>
                        <select type="text" placeholder="Type here"
                            class="text-gray-400 bg-white  border-gray-300 select select-bordered w-full ">
                            <option>NORMAL</option>
                            <option>SEMANA SANTA</option>
                            <option>FIESTAS AGOSTINAS</option>
                            <option>FIN DE AÑO</option>
                            <option>FINLANDESA</option>
                        </select>
                    </label>
                </div>
                <div class="grid gap-6 mb-6 md:grid-cols-3 w-full">

                    <div class="flex justify-center items-center">
                        <label class="form-control w-full ">
                            <div class="label">
                                <span class="label-text text-white ">Solicita:</span>
                            </div>
                            <input type="text" placeholder="Type here"
                                class=" bg-gray-200 text-gray-400 border-gray-300 rounded-md  w-full " disabled />
                        </label>
                    </div>
                    <div class="flex justify-center items-center">
                        <label class="form-control w-full ">
                            <div class="label">
                                <span class="label-text text-white">Depto Solicita:</span>
                            </div>
                            <input type="text" placeholder="Type here"
                                class=" bg-gray-200 text-gray-400 border-gray-300 rounded-md  w-full " disabled />
                        </label>
                    </div>
                    <div class="flex justify-center items-center">
                        <label class="form-control w-full ">
                            <div class="label">
                                <span class="label-text text-white">Misión:</span>
                            </div>
                            <input type="text" placeholder="Type here"
                                class=" bg-gray-200 text-gray-400 border-gray-300 rounded-md  w-full" disabled />
                        </label>
                    </div>
                    <div class="flex justify-center items-center">
                        <label class="form-control w-full ">
                            <div class="label">
                                <span class="label-text text-white ">Fecha procesada:</span>
                            </div>
                            <input type="date" placeholder="Type here"
                                class=" bg-gray-200 text-gray-400 border-gray-300 rounded-md  w-full " disabled />
                        </label>
                    </div>
                    <div class="flex justify-center items-center">
                        <label class="form-control w-full ">
                            <div class="label">
                                <span class="label-text text-white">Destino:</span>
                            </div>
                            <input type="text" placeholder="Type here"
                                class=" bg-gray-200 text-gray-400 border-gray-300 rounded-md  w-full" disabled />
                        </label>
                    </div>
                    <div class="flex justify-center items-center">
                        <label class="form-control w-full ">
                            <div class="label">
                                <span class="label-text text-white">Autoriza:</span>
                            </div>
                            <input type="text" placeholder="Type here"
                                class=" bg-gray-200 text-gray-400 border-gray-300 rounded-md  w-full" disabled />
                        </label>
                    </div>
                    <div class="flex justify-center items-center">
                        <label class="form-control w-full ">
                            <div class="label">
                                <span class="label-text text-white">Motorista:</span>
                            </div>
                            <input type="text" placeholder="Type here"
                                class=" bg-gray-200 text-gray-400 border-gray-300 rounded-md  w-full" disabled />
                        </label>
                    </div>
                    <div class="flex justify-center items-center">
                        <label class="form-control w-full ">
                            <div class="label">
                                <span class="label-text text-white">Carnet:</span>
                            </div>
                            <input type="text" placeholder="Type here"
                                class=" bg-gray-200 text-gray-400 border-gray-300 rounded-md  w-full" disabled />
                        </label>
                    </div>
                    <div class="flex justify-center items-center">
                        <label class="form-control w-full ">
                            <div class="label">
                                <span class="label-text text-white">Tipo combustible:</span>
                            </div>
                            <input type="text" placeholder="Type here"
                                class=" bg-gray-200 text-gray-400 border-gray-300 rounded-md  w-full" disabled />
                        </label>
                    </div>

                </div>
                <div class="mb-6">
                    <label class="form-control w-full ">
                        <div class="label">
                            <span class="label-text text-white">Estatus:</span>
                        </div>
                        <input type="text" placeholder="Type here"
                            class="text-black bg-white input input-bordered w-full" />
                    </label>
                </div>


                <div class="mb-2">
                    <hr />
                </div>
                <h2 class="text-center text-white font-bold mb-2 mt-[0.8rem] text-[1.2rem]">Precios de Referencia</h2>
                <div class="grid gap-6 mb-6 md:grid-cols-3 w-full">

                    <div class="flex items-center justify-center">
                        <label class="form-control w-full ">
                            <div class="label">
                                <span class="label-text text-white">Placa:</span>
                            </div>
                            <input type="text" placeholder="Type here"
                                class="text-black bg-white input input-bordered w-full" />
                        </label>
                    </div>
                    <div class="flex items-center justify-center">
                        <label class="form-control w-full ">
                            <div class="label">
                                <span class="label-text text-white">De compra:</span>
                            </div>
                            <input type="text" placeholder="Type here"
                                class="text-black bg-white input input-bordered w-full" />
                        </label>
                    </div>
                    <div class="flex items-center justify-center">
                        <label class="form-control w-full ">
                            <div class="label">
                                <span class="label-text text-white">Actual:</span>
                            </div>
                            <input type="text" placeholder="Type here"
                                class="text-black bg-white input input-bordered w-full" />
                        </label>
                    </div>
                </div>
                <div class="mb-2">
                    <hr />
                </div>
                <h2 class="text-center text-white font-bold mb-2 mt-[0.8rem] text-[1.2rem]">Cantidad de vales</h2>
                <div class="flex w-full mb-10 ">
                    <label class="form-control w-full flex-grow mr-4">
                        <div class="label flex-grow">
                            <span class="label-text text-white">Solicitados</span>
                        </div>
                        <input type="text" placeholder="Type here"
                            class="text-black bg-white input input-bordered w-full " />
                    </label>

                    <label class="form-control w-full flex-grow mr-4">
                        <div class="label flex-grow">
                            <span class="label-text text-white">Digitados</span>
                        </div>
                        <input type="text" placeholder="Type here"
                            class="text-black bg-white input input-bordered w-full " />
                    </label>
                </div>
                <div class="mb-6">
                    <label class="form-control w-full ">
                        <div class="label">
                            <span class="label-text text-white">Serie de vale:</span>
                        </div>
                        <input type="text" placeholder="Type here"
                            class="text-black bg-white input input-bordered w-full" />
                    </label>
                </div>
                <div class="flex w-full mb-10 ">
                    <label class="form-control w-full flex-grow mr-4">
                        <div class="label flex-grow">
                            <span class="label-text text-white">Serie:</span>
                        </div>
                        <select type="text" placeholder="Type here"
                            class="text-black bg-white  border-gray-300 select select-bordered w-full ">
                            <option>*</option>
                            <option>*</option>
                            <option>*</option>
                            <option>*</option>
                            <option>*</option>
                        </select>
                    </label>
                    <label class="form-control w-full flex-grow ">
                        <div class="label flex-grow">
                            <span class="label-text text-white">Requisicion</span>
                        </div>
                        <input type="text" placeholder="Type here"
                            class="text-black bg-white input input-bordered w-full " />
                    </label>
                </div>
                <div class="mb-2">
                    <hr />
                </div>
                <h2 class="text-center text-white font-bold mb-2 mt-[0.8rem] text-[1.2rem]">Datos para liquidación</h2>
                <div class="grid gap-6 mb-6 md:grid-cols-3 w-full">

                    <div class="flex items-center justify-center">
                        <label class="form-control w-full ">
                            <div class="label">
                                <span class="label-text text-white">Kilom.INI:</span>
                            </div>
                            <input type="number" placeholder="Type here"
                                class="text-black bg-white input input-bordered w-full" min="0" />
                        </label>
                    </div>
                    <div class="flex items-center justify-center">
                        <label class="form-control w-full ">
                            <div class="label">
                                <span class="label-text text-white">Kilom.FIN:</span>
                            </div>
                            <input type="number" placeholder="Type here"
                                class="text-black bg-white input input-bordered w-full" min="0" />
                        </label>
                    </div>
                    <div class="flex items-center justify-center">
                        <label class="form-control w-full ">
                            <div class="label">
                                <span class="label-text text-white">Factura No.</span>
                            </div>
                            <input type="text" placeholder="Type here"
                                class="text-black bg-white input input-bordered w-full" />
                        </label>
                    </div>
                    <div class="flex items-center justify-center">
                        <label class="form-control w-full ">
                            <div class="label">
                                <span class="label-text text-white ">Fecha Emisión:</span>
                            </div>
                            <input type="date" placeholder="Type here"
                                class=" bg-[#7b7f85] border-white text-white input input-bordered w-full " />
                        </label>
                    </div>
                    <div class="flex items-center justify-center">
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text text-white">Tipo de Combustible</span>
                            </div>
                            <select type="text" placeholder="Type here"
                                class="text-black bg-gray-50 border border-gray-300 select select-bordered w-full ">
                                <option>ESPECIAL</option>
                                <option>REGULAR</option>
                                <option>DIESEL</option>
                            </select>
                        </label>
                    </div>
                    <div class="flex items-center justify-center">
                        <label class="form-control w-full ">
                            <div class="label">
                                <span class="label-text text-white">Valor total $</span>
                            </div>
                            <input type="number" placeholder="Type here"
                                class="text-black bg-white input input-bordered w-full" min="0" />
                        </label>
                    </div>
                    <div class="flex items-center justify-center">
                        <label class="form-control w-full ">
                            <div class="label">
                                <span class="label-text text-white">Total Galones</span>
                            </div>
                            <input type="number" placeholder="Type here"
                                class="text-black bg-white input input-bordered w-full" min="0" />
                        </label>
                    </div>
                    <div class="flex items-center justify-center">
                        <label class="form-control w-full ">
                            <div class="label">
                                <span class="label-text text-white">No. Placa</span>
                            </div>
                            <input type="text" placeholder="Type here"
                                class="text-black bg-white input input-bordered w-full" />
                        </label>
                    </div>
                    <div class="flex items-center justify-center">
                        <label class="form-control w-full ">
                            <div class="label">
                                <span class="label-text text-white">Liquidado</span>
                            </div>
                            <input type="text" placeholder="Type here"
                                class="text-black bg-white input input-bordered w-full" />
                        </label>
                    </div>
                </div>
                <div class="flex w-full mb-10 ">
                    <div class="form-control w-full border border-white rounded-lg mr-4">
                        <label class="label cursor-pointer ">
                            <span class="label-text text-white">Solicitud</span>
                            <input type="radio" name="radio-10" class="radio checked:bg-white checked:border-white"
                                checked="checked" />
                        </label>
                    </div>
                    <div class="form-control w-full border border-white rounded-lg">
                        <label class="label cursor-pointer">
                            <span class="label-text text-white">X Vale</span>
                            <input type="radio" name="radio-10" class="radio checked:bg-white checked:border-white"
                                checked="" />
                        </label>
                    </div>
                </div>

            </form>

            <div class="mb-2">
                <hr />
            </div>

            <div class="overflow-x-auto max-w-full" style="max-height: 300px;">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-black bg-gray-50">
                        <tr>
                            <th class="px-6 py-3">Nsolicitud</th>
                            <th class="px-6 py-3">Deptosoli</th>
                            <th class="px-6 py-3">Serie de vale</th>
                            <th class="px-6 py-3">Autoriza</th>
                            <th class="px-6 py-3">Motorista</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">...</td>
                            <td class="px-6 py-4">...</td>
                            <td class="px-6 py-4">...</td>
                            <td class="px-6 py-4">...</td>
                            <td class="px-6 py-4">...</td>
                        </tr>
                        <!-- Additional rows -->
                    </tbody>
                </table>
            </div>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>

</body>

</html>
