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
    <dialog id="my_modal_1" class="modal">
        <div class="modal-box max-w-full md:max-w-7xl bg-[#84878d]">
            <h2 class="text-center text-white font-bold mb-[1.6rem] mt-[0.8rem] text-[1.2rem]">
                Ingreso de vales de combustible a bodega general
            </h2>

            <div class="mb-2">
                <hr />
            </div>
            <form class="p-4 md:p-5" action="{{ route('vales.store') }}" method="POST">
                @csrf
                <div>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text text-white">Corr</span>
                        </div>
                        <input type="text" name="corr" placeholder="Type here"
                            class="text-black bg-gray-50 border-gray-300 input input-bordered w-full" />
                    </label>
                    @error('corr')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Resto de los campos -->
                <div class="grid gap-6 mb-6 grid-cols-1 md:grid-cols-3">
                    <div>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text text-white">Tipo de Combustible</span>
                            </div>
                            <select name="tipo_combustible"
                                class="bg-gray-50 text-black border border-gray-300 select select-bordered w-full">
                                <option value="ESPECIAL">ESPECIAL</option>
                                <option value="REGULAR">REGULAR</option>
                                <option value="DIESEL">DIESEL</option>
                            </select>
                        </label>
                        @error('tipo_combustible')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text text-white">Tipo de Fondo</span>
                            </div>
                            <select name="tipo_fondo"
                                class="bg-gray-50 border text-black border-gray-300 select select-bordered w-full">
                                <option value="TESORERIA">TESORERIA</option>
                                <option value="RECURSOS PROPIOS">RECURSOS PROPIOS</option>
                                <option value="PROYECTO">PROYECTO</option>
                                <option value="DONACION">DONACION</option>
                                <option value="FONDO GOES">FONDO GOES</option>
                            </select>
                        </label>
                        @error('tipo_fondo')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text text-white">Programa</span>
                            </div>
                            <select name="programa"
                                class="bg-white text-black border-gray-300 select select-bordered w-full">
                                <option value="NORMAL">NORMAL</option>
                                <option value="SEMANA SANTA">SEMANA SANTA</option>
                                <option value="FIESTAS AGOSTINAS">FIESTAS AGOSTINAS</option>
                                <option value="FIN DE AÑO">FIN DE AÑO</option>
                                <option value="FINLANDESA">FINLANDESA</option>
                            </select>
                        </label>
                        @error('programa')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Resto de los campos -->
                <div class="grid gap-6 mb-6 grid-cols-1 md:grid-cols-2">
                    <div>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text text-white">Fecha de Compra</span>
                            </div>
                            <input type="date" name="fecha_fac"
                                class="bg-[#7b7f85] border-white text-white input input-bordered w-full" />
                        </label>
                        @error('fecha_fac')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text text-white">#Orden de Compra</span>
                            </div>
                            <input type="number" name="nocompra" placeholder="Type here"
                                class="text-black bg-gray-50 border-gray-300 input input-bordered w-full" />
                        </label>
                        @error('nocompra')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                </div>


                <div class="grid gap-6 mb-6 grid-cols-1 md:grid-cols-3">
                    <div>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text text-white">Fecha Vigencia</span>
                            </div>
                            <input type="date" name="feini"
                                class="bg-[#7b7f85] border-white text-white input input-bordered w-full" />
                        </label>
                        @error('feini')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="hidden md:flex items-center justify-center text-white p-12">Hasta</div>
                    <div>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text text-white">&nbsp;</span>
                            </div>
                            <input type="date" name="fefin"
                                class="bg-[#7b7f85] border-white text-white input input-bordered w-full" />
                        </label>
                        @error('fefin')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                </div>

                <!-- Resto de los campos -->
                <div class="grid gap-6 mb-6 grid-cols-1 md:grid-cols-3">
                    <div>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text text-white">#Factura</span>
                            </div>
                            <input type="number" name="nfactura" placeholder="Type here"
                                class="text-black bg-gray-50 border-gray-300 input input-bordered w-full" />
                        </label>
                        @error('nfactura')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text text-white">NIT/Proveedor</span>
                            </div>
                            <input type="text" name="proveedor" placeholder="Type here"
                                class="text-black bg-gray-50 border-gray-300 input input-bordered w-full" />
                        </label>
                        @error('proveedor')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text text-white">Proveedor</span>
                            </div>
                            <input type="text" name="proveedor" placeholder="Type here"
                                class="text-black bg-gray-50 border-gray-300 input input-bordered w-full" />
                        </label>
                        @error('proveedor')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Resto de los campos -->
                <div class="grid gap-6 mb-6 grid-cols-1 md:grid-cols-3">
                    <div>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text text-white">Valor de vale</span>
                            </div>
                            <input type="text" name="valorvale" placeholder="Type here"
                                class="text-black bg-gray-50 border-gray-300 input input-bordered w-full" />
                        </label>
                        @error('valorvale')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text text-white">Precio de Referencia Actual</span>
                            </div>
                            <input type="text" name="precio_referencia" placeholder="Type here"
                                class="text-black bg-gray-50 border-gray-300 input input-bordered w-full" />
                        </label>
                        @error('precio_referencia')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text text-white">Series de los vales</span>
                            </div>
                            <input type="text" name="serie_vale" placeholder="Digite el Cuerpo del #de vale"
                                class="bg-gray-50 text-black border-gray-300 input input-bordered w-full" />
                            <div class="label">
                                <span class="label-text-alt text-black">Ejemplo "03112220836400"</span>
                            </div>
                        </label>
                        @error('serie_vale')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Correlativo -->
                <div class="mb-2">
                    <hr />
                </div>
                <h2 class="text-center text-white font-bold mb-2 mt-[0.8rem] text-[1.2rem]">Digite el correlativo</h2>
                <div class="grid gap-6 mb-6 grid-cols-1 md:grid-cols-2">
                    <div>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text text-white">Inicial</span>
                            </div>
                            <input type="number" name="correlativo_inicial" placeholder="Type here"
                                class="text-black bg-gray-50 border-gray-300 input input-bordered w-full" />
                        </label>
                        @error('correlativo_inicial')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text text-white">Final</span>
                            </div>
                            <input type="number" name="correlativo_final" placeholder="Type here"
                                class="text-black bg-gray-50 border-gray-300 input input-bordered w-full" />
                        </label>
                        @error('correlativo_final')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Observación -->
                <div class="mb-6">
                    <label class="label-text text-white">Observación:</label>
                    <textarea name="observacion" class="bg-white text-black textarea textarea-bordered w-full h-32 mt-1" placeholder=""></textarea>
                    @error('observacion')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Botón de envío -->
                <div class="w-full flex items-center justify-center">
                    <button type="submit"
                        class="btn-block text-white border border-white font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 transition-colors duration-300 ease-in-out hover:text-black hover:bg-white focus:ring-4 focus:outline-none focus:ring-white dark:border-white dark:text-white dark:hover:text-white dark:hover:bg-white dark:focus:ring-white text-[1.2rem]">
                        Generar
                    </button>
                </div>
            </form>

            <div class="mb-2">
                <hr />
            </div>
            <div class="overflow-x-auto max-w-full" style="max-height: 300px;">
                <table class="w-full border border-black text-sm text-left text-gray-500">
                    <thead class="text-xs text-black bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 border border-black text-center">Correlativo</th>
                            <th class="px-6 py-3 border border-black text-center">#Factura</th>
                            <th class="px-6 py-3 border border-black text-center">N°Compra</th>
                            <th class="px-6 py-3 border border-black text-center">Valor Vale</th>
                            <th class="px-6 py-3 border border-black text-center">Tipo de Combustible</th>
                            <th class="px-6 py-3 border border-black text-center">Tipo de Fondo</th>
                            <th class="px-6 py-3 border border-black text-center">Programa</th>
                            <th class="px-6 py-3 border border-black text-center">Fecha Factura</th>
                            <th class="px-6 py-3 border border-black text-center">Fecha Inicio</th>
                            <th class="px-6 py-3 border border-black text-center">Fecha Fin</th>
                            <th class="px-6 py-3 border border-black text-centertext-center">Serie de Vale</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vales as $vale)
                            <tr class="bg-white border-b">
                                <td class="px-6 py-4 border border-black text-center">{{ $vale->corr }}</td>
                                <td class="px-6 py-4 border border-black text-center">{{ $vale->nfactura }}</td>
                                <td class="px-6 py-4 border border-black text-center">{{ $vale->nocompra }}</td>
                                <td class="px-6 py-4 border border-black text-center">{{ $vale->valorvale }}</td>
                                <td class="px-6 py-4 border border-black text-center">{{ $vale->tipo_combustible }}
                                </td>
                                <td class="px-6 py-4 border border-black text-center">{{ $vale->tipo_fondo }}</td>
                                <td class="px-6 py-4 border border-black text-center">{{ $vale->programa }}</td>
                                <td class="px-6 py-4 border border-black text-center">{{ $vale->fecha_fac }}</td>
                                <td class="px-6 py-4 border border-black text-center">{{ $vale->feini }}</td>
                                <td class="px-6 py-4 border border-black text-center">{{ $vale->fefin }}</td>
                                <td class="px-6 py-4 border border-black text-center">{{ $vale->serie_vale }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>


            </div>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>

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
