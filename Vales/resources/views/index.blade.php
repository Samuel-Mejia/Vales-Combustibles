@include('components.navbar')
@include('components.scripts')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vales Combustibles</title>
</head>

<body class="bg-[#30475e]">
<div class="relative flex flex-wrap flex-col  items-center justify-center min-h-screen w-full">
    <div class="flex relative flex-wrap flex-col sm:flex-col md:flex-col lg:flex-col xl:flex-col items-center justify-center pt-7">
    
    @if(session('user') && optional(session('user'))->username === 'admin')
    <!-- Botón para la perspectiva de administrador -->
    <a href="{{ url('/sistema-administracion') }}">
        <button type="button" class="text-white bg-[#30475e] hover:bg-[#465f79] focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 m-2">
            Perspectiva de Administrador
        </button>
    </a>
    @endif
</div>

        <div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-3 gap-y-10 gap-x-12 items-center p-8 max-[1300px]:lg:grid-cols-2">

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
        <form class="p-4 md:p-5">
            <div class="grid gap-6 mb-6 grid-cols-1 md:grid-cols-3">
                <div>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text text-white">Tipo de Combustible</span>
                        </div>
                        <select class="bg-gray-50 border text-gray-500 border-gray-300 select select-bordered w-full">
                            <option>ESPECIAL</option>
                            <option>REGULAR</option>
                            <option>DIESEL</option>
                        </select>
                    </label>
                </div>
                <div>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text text-white">Tipo de Fondo</span>
                        </div>
                        <select class="bg-gray-50 border text-gray-500 border-gray-300 select select-bordered w-full">
                            <option>TESORERIA</option>
                            <option>RECURSOS PROPIOS</option>
                            <option>PROYECTO</option>
                            <option>DONACION</option>
                            <option>FONDO GOES</option>
                        </select>
                    </label>
                </div>
                <div>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text text-white">Programa</span>
                        </div>
                        <select class="bg-white text-gray-500 border-gray-300 select select-bordered w-full">
                            <option>NORMAL</option>
                            <option>SEMANA SANTA</option>
                            <option>FIESTAS AGOSTINAS</option>
                            <option>FIN DE AÑO</option>
                            <option>FINLANDESA</option>
                        </select>
                    </label>
                </div>
            </div>
            <div class="grid gap-6 mb-6 grid-cols-1 md:grid-cols-2">
                <div>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text text-white">Fecha de Compra</span>
                        </div>
                        <input type="date" class="bg-[#7b7f85] border-white text-white input input-bordered w-full" />
                    </label>
                </div>
                <div>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text text-white">#Orden de Compra</span>
                        </div>
                        <input type="text" placeholder="Type here" class="bg-gray-50 border-gray-300 input input-bordered w-full" />
                      
                        
                    </label>
                </div>
            </div>
            <div class="grid gap-6 mb-6 grid-cols-1 md:grid-cols-3">
                <div>
                    <label class="form-control w-full">
                    <div class="label">
                    <span class="label-text text-white">Fecha Vigencia</span>
                        </div>
                       
                        <input type="date" class="bg-[#7b7f85] border-white text-white input input-bordered w-full" />
                    </label>
                </div>
                <div class="hidden md:flex items-center justify-center text-white p-12">Hasta</div>
                <div>
                    <label class="form-control w-full">
                    <div class="label">
                    <span class="label-text text-white">&nbsp;</span>
                        </div>
                    
                        <input type="date" class="bg-[#7b7f85] border-white text-white input input-bordered w-full" />
                    </label>
                </div>
            </div>
            <div class="grid gap-6 mb-6 grid-cols-1 md:grid-cols-3">
            <div>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text text-white">#Factura</span>
                        </div>
                        <input type="text" placeholder="Type here" class="bg-gray-50 border-gray-300 input input-bordered w-full" />
                      
                        
                    </label>
                </div>
                <div>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text text-white">NIT/Proveedor</span>
                        </div>
                        <input type="text" placeholder="Type here" class="bg-gray-50 border-gray-300 input input-bordered w-full" />
                      
                        
                    </label>
                </div>
                <div>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text text-white">Proveedor</span>
                        </div>
                        <input type="text" placeholder="Type here" class="bg-gray-50 border-gray-300 input input-bordered w-full" />
                      
                        
                    </label>
                </div>
            </div>
            <div class="grid gap-6 mb-6 grid-cols-1 md:grid-cols-3">
            <div>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text text-white">Valor de vale</span>
                        </div>
                        <input type="text" placeholder="Type here" class="bg-gray-50 border-gray-300 input input-bordered w-full" />
                      
                        
                    </label>
                </div>
                <div>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text text-white">Precio de Referencia Actual</span>
                        </div>
                        <input type="text" placeholder="Type here" class="bg-gray-50 border-gray-300 input input-bordered w-full" />
                      
                        
                    </label>
                </div>
                <div>
                    <label class="form-control w-full">
                    <div class="label">
                                <span class="label-text text-white">Series de los vales:</span>
                            </div>
                        <input type="text" placeholder="Digite el Cuerpo del #de vale" class="bg-gray-50 border-gray-300 input input-bordered w-full" />
                        <div class="label">
                                <span class="label-text-alt text-white">Ejemplo "03112220836400"</span>
                            </div>
                    </label>
                </div>
            </div>
            
            <!-- Additional inputs -->
            <div class="mb-6">
                <label class="label-text text-white">Observación:</label>
                <textarea class="bg-white text-gray-500 textarea textarea-bordered w-full h-32 mt-1" placeholder=""></textarea>
            </div>
            <div class="w-full flex items-center justify-center">
                    <button type="button"
                        class="btn-block text-white border border-white font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 transition-colors duration-300 ease-in-out  hover:text-black hover:bg-white focus:ring-4 focus:outline-none focus:ring-white dark:border-white dark:text-white dark:hover:text-white dark:hover:bg-white dark:focus:ring-white text-[1.2rem]">
                        Generar
                    </button>
                </div>
        </form>
        <div class="mb-2">
            <hr />
        </div>
        <div class="overflow-x-auto max-w-full" style="max-height: 300px;">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-black bg-gray-50">
                    <tr>
                        <th class="px-6 py-3">Corr</th>
                        <th class="px-6 py-3">Nfactura</th>
                        <th class="px-6 py-3">Ser_vale</th>
                        <th class="px-6 py-3">Nocompra</th>
                        <th class="px-6 py-3">Proveedor</th>
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

    <!-- Model 2 -->
    <dialog id="my_modal_2" class="modal">
    <div class="modal-box max-w-full md:max-w-7xl bg-[#84878d]">
        <h2 class="text-center text-white font-bold mb-[1.6rem] mt-[0.8rem] text-[1.2rem]">
        Entrega de vales para combustible (Disel o gasolina)
        </h2>

        <div class="mb-2">
            <hr />
        </div>
        <form class="p-4 md:p-5">
            <div class="grid gap-6 mb-6 grid-cols-1 md:grid-cols-3">
            <div>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text text-white">Numero Solicitud</span>
                        </div>
                        <input type="text" placeholder="Type here" class="bg-gray-50 border-gray-300 input input-bordered w-full" />
                      
                        
                    </label>
                </div>
                
                <div>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text text-white">Programa</span>
                        </div>
                        <select class="bg-gray-50 border text-gray-500 border-gray-300 select select-bordered w-full">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </label>
                </div>
                <div>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text text-white">Suministra</span>
                        </div>
                        <select class="bg-white text-gray-500 border-gray-300 select select-bordered w-full">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </label>
                </div>
            </div>
            <div class="grid gap-6 mb-6 grid-cols-1 md:grid-cols-3">
                <div>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text text-white">Solicita</span>
                        </div>
                        <input type="text" placeholder="Type here" class="bg-gray-50 border-gray-300 input input-bordered w-full" />
                       </label>
                </div>
                <div>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text text-white">Depto Solicita</span>
                        </div>
                        <input type="text" placeholder="Type here" class="bg-gray-50 border-gray-300 input input-bordered w-full" />
                      
                        
                    </label>
                </div>
                <div>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text  text-white">Mision</span>
                            </div>
                            <textarea class="textarea textarea-ghost bg-gray-50 border border-gray-300 input input-bordered w-full"
                                placeholder="Bio"></textarea>
                        </label>
                    </div>
            </div>
            <div class="grid gap-6 mb-6 grid-cols-1 md:grid-cols-3">
                <div>
                    <label class="form-control w-full">
                    <div class="label">
                    <span class="label-text text-white">Fecha reserva</span>
                        </div>
                       
                        <input type="date" class="bg-[#7b7f85] border-white text-white input input-bordered w-full" />
                    </label>
                </div>
                <div>
                    <label class="form-control w-full">
                    <div class="label">
                    <span class="label-text text-white">Fecha Vence</span>
                        </div>
                       
                        <input type="date" class="bg-[#7b7f85] border-white text-white input input-bordered w-full" />
                    </label>
                </div>
                <div>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text text-white">Destino</span>
                        </div>
                        <input type="text" placeholder="Type here" class="bg-gray-50 border-gray-300 input input-bordered w-full" />
                       </label>
                </div>
            </div>
            <div class="grid gap-6 mb-6 grid-cols-1 md:grid-cols-2">
                <div>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text text-white">Proyecto</span>
                        </div>
                        <input type="text" placeholder="Type here" class="bg-gray-50 border-gray-300 input input-bordered w-full" />
                       </label>
                </div>
                <div>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text text-white">Autoriza</span>
                        </div>
                        <input type="text" placeholder="Type here" class="bg-gray-50 border-gray-300 input input-bordered w-full" />
                      
                        
                    </label>
                </div>
            </div>
            <div class="grid gap-6 mb-6 grid-cols-1 md:grid-cols-1">
            <div class="flex w-full mb-2">
                    <label class="form-control w-full flex-grow mr-4">
                        <div class="label flex-grow">
                            <span class="label-text text-white">Combustible:</span>
                        </div>
                        <select type="text" placeholder="Type here"
                            class="bg-white text-gray-500  border-gray-300 select select-bordered w-full ">
                            <option>*</option>
                            <option>*</option>
                            <option>*</option>
                            <option>*</option>
                            <option>*</option>
                        </select>
                    </label>
                    <label class="form-control flex-grow">
                        <div class="label flex-grow">
                            <span class="label-text flex-grow text-white"></span>
                        </div>
                        <input type="number" placeholder="Type here"
                            class="bg-gray-50 border border-gray-300 input input-bordered flex-grow" />
                    </label>
                </div>
            </div>
            <div class="grid gap-6 mb-6 grid-cols-1 md:grid-cols-2">
                <div>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text text-white">Conversión</span>
                        </div>
                        <input type="text" placeholder="Type here" class="bg-gray-50 border-gray-300 input input-bordered w-full" />
                       </label>
                </div>
                <div>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text text-white">Total de Galones por vale</span>
                        </div>
                        <input type="text" placeholder="Type here" class="bg-gray-50 border-gray-300 input input-bordered w-full" />
                      
                        
                    </label>
                </div>
            </div>
            <div class="grid gap-6 mb-6 grid-cols-1 md:grid-cols-1">
                <div class="flex w-full mb-2">
                    <label class="form-control w-full flex-grow mr-4">
                        <div class="label flex-grow">
                            <span class="label-text text-white">Serie:</span>
                        </div>
                        <select type="text" placeholder="Type here"
                            class="bg-white text-gray-500  border-gray-300 select select-bordered w-full ">
                            <option>*</option>
                            <option>*</option>
                            <option>*</option>
                            <option>*</option>
                            <option>*</option>
                        </select>
                    </label>
                    <label class="form-control flex-grow">
                        <div class="label flex-grow">
                            <span class="label-text flex-grow text-white">No. Requisición</span>
                        </div>
                        <input type="number" placeholder="Type here"
                            class="bg-gray-50 border border-gray-300 input input-bordered flex-grow" />
                    </label>
                </div>
            </div>

            <div class="mb-4">
                    <hr />
                </div>
                <div class=" text-white text-center font-bold mb-4">Precios de referencia</div>
                <div class="grid gap-6 mb-6 grid-cols-1 md:grid-cols-2">
                <div>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text text-white">De Compra</span>
                        </div>
                        <input type="text" placeholder="Type here" class="bg-gray-50 border-gray-300 input input-bordered w-full" />
                       </label>
                </div>
                <div>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text text-white">Actual</span>
                        </div>
                        <input type="text" placeholder="Type here" class="bg-gray-50 border-gray-300 input input-bordered w-full" />
                      
                        
                    </label>
                </div>
            </div>

            <div class="mb-4">
                    <hr />
                </div>
                <div class=" text-white text-center font-bold mb-4">Cantidad de VALES</div>
                <div class="grid gap-6 mb-6 grid-cols-1 md:grid-cols-2">
                <div>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text text-white">Acturizador</span>
                        </div>
                        <input type="text" placeholder="Type here" class="bg-gray-50 border-gray-300 input input-bordered w-full" />
                       </label>
                </div>
                <div>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text text-white">Digitados</span>
                        </div>
                        <input type="text" placeholder="Type here" class="bg-gray-50 border-gray-300 input input-bordered w-full" />
                      
                        
                    </label>
                </div>
            </div>
            <div class="mb-4">
                    <hr />
                </div>
                
                <div class="grid gap-6 mb-6 grid-cols-1 md:grid-cols-1">
                <div>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text text-white">Serie de Vale</span>
                        </div>
                        <input type="text" placeholder="Type here" class="bg-gray-50 border-gray-300 input input-bordered w-full" />
                       </label>
                </div>
            </div>
            <!-- Additional inputs -->
            <div class="w-full flex items-center justify-center">
                    <button type="button"
                        class="btn-block text-white border border-white font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 transition-colors duration-300 ease-in-out  hover:text-black hover:bg-white focus:ring-4 focus:outline-none focus:ring-white dark:border-white dark:text-white dark:hover:text-white dark:hover:bg-white dark:focus:ring-white text-[1.2rem]">
                        Generar
                    </button>
                </div>
        </form>
        <div class="mb-2">
            <hr />
        </div>
        <div class="overflow-x-auto max-w-full" style="max-height: 300px;">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-black bg-gray-50">
                <tr>
                            <th scope="col" class="px-6 py-3">
                                Nsol
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Solicita
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Dept
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Mision
                            </th>
                        </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b">
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
<!-- form real -->

    <dialog id="my_modal_" class="modal ">
        <div class="modal-box max-w-7xl bg-[#84878d]">
            <h2 class="text-center font-bold text-white mb-3">Entrega de vales para combustible (Disel o gasolina) </h2>
            <div class="mb-2">
                <hr />
            </div>
            <form class="p-4 md:p-5 ">

                <div class="grid gap-2 mb-10 md:grid-cols-3">
                    <div>
                        <label class="form-control w-full max-w-xs">
                            <div class="label">
                                <span class="label-text text-white">Numero Solicitud</span>
                            </div>
                            <input type="text" placeholder="Type here"
                                class="bg-gray-50 border border-gray-300 input input-bordered w-full max-w-xs" />
                        </label>
                    </div>
                    <div>
                        <label class="form-control w-full max-w-xs">
                            <div class="label">
                                <span class="label-text text-white">Programa</span>
                            </div>
                            <select type="text" placeholder="Type here"
                                class="bg-gray-50 border border-gray-300 select select-bordered w-full max-w-xs">
                                <option disabled selected>Who shot first?</option>
                                <option>Han Solo</option>
                                <option>Greedo</option>
                            </select>
                        </label>
                    </div>
                    <div>
                        <label class="form-control w-full max-w-xs">
                            <div class="label">
                                <span class="label-text text-white">Suministra</span>
                            </div>
                            <select type="text" placeholder="Type here"
                                class="bg-gray-50 border border-gray-300 select select-bordered w-full max-w-xs">
                                <option disabled selected>Who shot first?</option>
                                <option>Han Solo</option>
                                <option>Greedo</option>
                            </select>
                        </label>
                    </div>

                    <div class="dark:text-black">
                        <label class="form-control w-full max-w-xs">
                            <div class="label">
                                <span class="label-text text-white">Solicita</span>
                            </div>
                            <input type="text" placeholder="Type here"
                                class="bg-gray-50 border border-gray-300 input input-bordered w-full max-w-xs" />
                        </label>
                    </div>
                    <div>
                        <label class="form-control w-full max-w-xs">
                            <div class="label">
                                <span class="label-text text-white">Depto Solicita</span>
                            </div>
                            <input type="text" placeholder="Type here"
                                class="bg-gray-50 border border-gray-300 input input-bordered w-full max-w-xs" />
                        </label>
                    </div>
                    <div>
                        <label class="form-control w-full max-w-xs">
                            <div class="label">
                                <span class="label-text">Mision</span>
                            </div>
                            <textarea class="textarea textarea-ghost bg-gray-50 border border-gray-300"
                                placeholder="Bio"></textarea>
                        </label>
                    </div>
                    <div>
                        <label class="form-control w-full max-w-xs">
                            <div class="label">
                                <span class="label-text text-white">Fecha reserva</span>
                            </div>
                            <input type="date" placeholder="Type here"
                                class="bg-gray-50 border border-gray-300 input input-bordered w-full max-w-xs" />
                        </label>
                    </div>
                    <div>
                        <label class="form-control w-full max-w-xs">
                            <div class="label">
                                <span class="label-text text-white">F Vence</span>
                            </div>
                            <input type="date" placeholder="Type here"
                                class="bg-gray-50 border border-gray-300 input input-bordered w-full max-w-xs" />
                        </label>
                    </div>
                    <div>
                        <label class="form-control w-full max-w-xs">
                            <div class="label">
                                <span class="label-text text-white">Destino</span>
                            </div>
                            <input type="text" placeholder="Type here"
                                class="bg-gray-50 border border-gray-300 input input-bordered w-full max-w-xs" />
                        </label>
                    </div>
                    <div>
                        <label class="form-control w-full max-w-xs">
                            <div class="label">
                                <span class="label-text text-white">Proyecto</span>
                            </div>
                            <input type="text" placeholder="Type here"
                                class="bg-gray-50 border border-gray-300 input input-bordered w-full max-w-xs" />
                        </label>
                    </div>
                    <div>
                        <label class="form-control w-full max-w-xs">
                            <div class="label">
                                <span class="label-text text-white">Autoriza</span>
                            </div>
                            <input type="text" placeholder="Type here"
                                class="bg-gray-50 border border-gray-300 input input-bordered w-full max-w-xs" />
                        </label>
                    </div>

                    <!-- 
                    <div>
                        <label class="form-control w-full max-w-xs">
                            <div class="label">
                                <span class="label-text text-white">Serie</span>
                            </div>
                            <select type="text" placeholder="Type here"
                                class="bg-gray-50 border border-gray-300 select select-bordered w-full max-w-xs">
                                <option disabled selected>Who shot first?</option>
                                <option>...</option>
                                <option>...</option>
                            </select>
                        </label>
                    </div>
                    <div>
                        <label class="form-control w-full max-w-xs">
                            <div class="label">
                                <span class="label-text text-white">Combustible</span>
                            </div>
                            <select type="text" placeholder="Type here"
                                class="bg-gray-50 border border-gray-300 select select-bordered w-full max-w-xs">
                                <option disabled selected>Who shot first?</option>
                                <option>...</option>
                                <option>...</option>
                            </select>
                            <div class="divider divider-error"></div>
                            <input type="number" placeholder="Type here"
                                class="bg-gray-50 border border-gray-300 input input-bordered w-full max-w-xs" />
                        </label>
                    </div>
                    
                    <div>
                        <label class="form-control w-full max-w-xs">
                            <div class="label">
                                <span class="label-text">Convercion</span>
                            </div>
                            <input type="number" placeholder="Type here"
                                class="bg-gray-50 border border-gray-300 input input-bordered w-full max-w-xs" />
                            <div class="divider divider-error">Total galones por VALE</div>
                            <input type="number" placeholder="Type here"
                                class="bg-gray-50 border border-gray-300 input input-bordered w-full max-w-xs" />
                        </label>
                    </div> -->
                    <!-- <div>
                        <label class="form-control w-full max-w-xs">
                            <div class="label">
                                <span class="label-text">No.Requisicion</span>
                            </div>
                            <input type="number" placeholder="Type here"
                                class="bg-gray-50 border border-gray-300 input input-bordered w-full max-w-xs" />
                        </label>
                    </div> -->
                </div>
                <div class="flex w-full mb-10">
                    <label class="form-control w-full flex-grow mr-4">
                        <div class="label flex-grow">
                            <span class="label-text text-white">Combustible:</span>
                        </div>
                        <select type="text" placeholder="Type here"
                            class="bg-white text-gray-500  border-gray-300 select select-bordered w-full ">
                            <option>*</option>
                            <option>*</option>
                            <option>*</option>
                            <option>*</option>
                            <option>*</option>
                        </select>
                    </label>
                    <label class="form-control flex-grow">
                        <div class="label flex-grow">
                            <span class="label-text flex-grow text-white"></span>
                        </div>
                        <input type="number" placeholder="Type here"
                            class="bg-gray-50 border border-gray-300 input input-bordered flex-grow" />
                    </label>
                </div>
                <div class="flex w-full mb-10">
                    <label class="form-control flex-grow mr-4">
                        <div class="label flex-grow">
                            <span class="label-text flex-grow text-white">Conversión</span>
                        </div>
                        <input type="number" placeholder="Type here"
                            class="bg-gray-50 border border-gray-300 input input-bordered flex-grow" />
                    </label>
                    <label class="form-control flex-grow">
                        <div class="label flex-grow">
                            <span class="label-text flex-grow text-white">Total de Galones por Vale</span>
                        </div>
                        <input type="number" placeholder="Type here"
                            class="bg-gray-50 border border-gray-300 input input-bordered flex-grow" />
                    </label>
                </div>
                <div class="flex w-full mb-10">
                    <label class="form-control w-full flex-grow mr-4">
                        <div class="label flex-grow">
                            <span class="label-text text-white">Serie:</span>
                        </div>
                        <select type="text" placeholder="Type here"
                            class="bg-white text-gray-500  border-gray-300 select select-bordered w-full ">
                            <option>*</option>
                            <option>*</option>
                            <option>*</option>
                            <option>*</option>
                            <option>*</option>
                        </select>
                    </label>
                    <label class="form-control flex-grow">
                        <div class="label flex-grow">
                            <span class="label-text flex-grow text-white">No. Requisición</span>
                        </div>
                        <input type="number" placeholder="Type here"
                            class="bg-gray-50 border border-gray-300 input input-bordered flex-grow" />
                    </label>
                </div>
                <div class="mb-2">
                    <hr />
                </div>
                <div class=" text-white text-center font-bold">Precios de referencia</div>
                <div class="flex w-full mb-10">
                    <label class="form-control flex-grow mr-4">
                        <div class="label flex-grow ">
                            <span class="label-text flex-grow text-white ">De Compra</span>
                        </div>
                        <input type="number" placeholder="Type here"
                            class="bg-gray-50 border border-gray-300 input input-bordered flex-grow" />
                    </label>
                    <label class="form-control flex-grow">
                        <div class="label flex-grow">
                            <span class="label-text flex-grow text-white">Actual</span>
                        </div>
                        <input type="number" placeholder="Type here"
                            class="bg-gray-50 border border-gray-300 input input-bordered flex-grow" />
                    </label>
                </div>
                <div class="mb-2">
                    <hr />
                </div>
                <div class=" text-white text-center font-bold">Cantidad de VALES</div>
                <div class="flex w-full mb-10">
                    <label class="form-control flex-grow mr-4">
                        <div class="label flex-grow">
                            <span class="label-text flex-grow text-white">Autorizados</span>
                        </div>
                        <input type="number" placeholder="Type here"
                            class="bg-gray-50 border border-gray-300 input input-bordered flex-grow" />
                    </label>
                    <label class="form-control flex-grow">
                        <div class="label flex-grow">
                            <span class="label-text flex-grow text-white">Digitados</span>
                        </div>
                        <input type="number" placeholder="Type here"
                            class="bg-gray-50 border border-gray-300 input input-bordered flex-grow" />
                    </label>
                </div>
                <div class="mb-2">
                    <hr />
                </div>
                <label class="form-control flex-grow mb-10">
                    <div class="label  flex-grow">
                        <span class="label-text flex-grow text-white">Serie de Vale</span>
                    </div>
                    <input type="number" placeholder="Type here"
                        class="bg-gray-50 border border-gray-300 input input-bordered flex-grow" />
                </label>
                <div class="w-full flex items-center justify-center">
                    <button type="button"
                        class="btn-block text-white border border-white font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 transition-colors duration-300 ease-in-out  hover:text-black hover:bg-white focus:ring-4 focus:outline-none focus:ring-white dark:border-white dark:text-white dark:hover:text-white dark:hover:bg-white dark:focus:ring-white text-[1.2rem]">
                        Generar
                    </button>
                </div>


            </form>

            <div class="mb-2">
                <hr />
            </div>

            <div class="p-4 md:p-5">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nsol
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Solicita
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Dept
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Mision
                            </th>
                        </tr>
                    </thead>
                </table>
                <div class="relative overflow-x-auto shadow-md rounded-b-lg"
                    style="max-width: 1700px; max-height: 300px; overflow: auto;">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope=""
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    ...
                                </th>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope=""
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    ...
                                </th>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope=""
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    ...
                                </th>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope=""
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    ...
                                </th>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope=""
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    ...
                                </th>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope=""
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    ...
                                </th>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope=""
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    ...
                                </th>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope=""
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    ...
                                </th>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>








    <!-- Main modal 2  -->
    <div id="crud-modal2" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">

        <div class="relative max-w-7xl p-4 w-full h-full">
            <!-- Modal content -->
            <br>
            <br>
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Ingreral
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="crud-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->

                <form class="p-4 md:p-5">
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for="first_name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First name</label>
                            <input type="text" id="first_name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="John" required />
                        </div>
                        <div>
                            <label for="last_name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last name</label>
                            <input type="text" id="last_name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Doe" required />
                        </div>
                        <div>
                            <label for="company"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company</label>
                            <input type="text" id="company"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Flowbite" required />
                        </div>
                        <div class="dark:text-black">
                            <input type="text" placeholder="Type here"
                                class="bg-gray-50 border border-gray-300 input input-bordered w-full max-w-xs" />
                        </div>

                    </div>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email
                            address</label>
                        <input type="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="john.doe@company.com" required />
                    </div>


                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>

                <div class="p-4 md:p-5">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg"
                        style="max-width: 1700px; max-height: 300px; overflow: auto;">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Corr
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nfactura
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        ...
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        ...
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        ...
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope=""
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        ...
                                    </th>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope=""
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        ...
                                    </th>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope=""
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        ...
                                    </th>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope=""
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        ...
                                    </th>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope=""
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        ...
                                    </th>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope=""
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        ...
                                    </th>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal 3 -->
    <dialog id="my_modal_3" class="modal ">
        <div class="modal-box max-w-7xl bg-[#84878d]">
            <h2 class="text-center text-white font-bold mb-[1.6rem] mt-[0.8rem] text-[1.2rem]">Liquidación Vales de
                Combustibles
            </h2>

            <div class="mb-2">
                <hr />
            </div>
            <form class="p-4 md:p-5 ">
                <div class="flex w-full mb-10 ">
                    <label class="form-control w-full flex-grow mr-4">
                        <div class="label flex-grow">
                            <span class="label-text text-white">Número de solicitud</span>
                        </div>
                        <input type="text" placeholder="Type here"
                            class="bg-white text-gray-500 input input-bordered w-full " />
                    </label>

                    <label class="form-control w-full flex-grow">
                        <div class="label flex-grow">
                            <span class="label-text text-white">Programa:</span>
                        </div>
                        <select type="text" placeholder="Type here"
                            class="bg-white text-gray-500  border-gray-300 select select-bordered w-full ">
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
                                class="bg-gray-200 text-gray-400 border-gray-300 rounded-md  w-full " disabled />
                        </label>
                    </div>
                    <div class="flex justify-center items-center">
                        <label class="form-control w-full ">
                            <div class="label">
                                <span class="label-text text-white">Depto Solicita:</span>
                            </div>
                            <input type="text" placeholder="Type here"
                                class="bg-gray-200 text-gray-400 border-gray-300 rounded-md  w-full " disabled />
                        </label>
                    </div>
                    <div class="flex justify-center items-center">
                        <label class="form-control w-full ">
                            <div class="label">
                                <span class="label-text text-white">Misión:</span>
                            </div>
                            <input type="text" placeholder="Type here"
                                class="bg-gray-200 text-gray-400 border-gray-300 rounded-md  w-full" disabled />
                        </label>
                    </div>
                    <div class="flex justify-center items-center">
                        <label class="form-control w-full ">
                            <div class="label">
                                <span class="label-text text-white ">Fecha procesada:</span>
                            </div>
                            <input type="date" placeholder="Type here"
                                class="bg-gray-200 text-gray-400 border-gray-300 rounded-md  w-full " disabled />
                        </label>
                    </div>
                    <div class="flex justify-center items-center">
                        <label class="form-control w-full ">
                            <div class="label">
                                <span class="label-text text-white">Destino:</span>
                            </div>
                            <input type="text" placeholder="Type here"
                                class="bg-gray-200 text-gray-400 border-gray-300 rounded-md  w-full" disabled />
                        </label>
                    </div>
                    <div class="flex justify-center items-center">
                        <label class="form-control w-full ">
                            <div class="label">
                                <span class="label-text text-white">Autoriza:</span>
                            </div>
                            <input type="text" placeholder="Type here"
                                class="bg-gray-200 text-gray-400 border-gray-300 rounded-md  w-full" disabled />
                        </label>
                    </div>
                    <div class="flex justify-center items-center">
                        <label class="form-control w-full ">
                            <div class="label">
                                <span class="label-text text-white">Motorista:</span>
                            </div>
                            <input type="text" placeholder="Type here"
                                class="bg-gray-200 text-gray-400 border-gray-300 rounded-md  w-full" disabled />
                        </label>
                    </div>
                    <div class="flex justify-center items-center">
                        <label class="form-control w-full ">
                            <div class="label">
                                <span class="label-text text-white">Carnet:</span>
                            </div>
                            <input type="text" placeholder="Type here"
                                class="bg-gray-200 text-gray-400 border-gray-300 rounded-md  w-full" disabled />
                        </label>
                    </div>
                    <div class="flex justify-center items-center">
                        <label class="form-control w-full ">
                            <div class="label">
                                <span class="label-text text-white">Tipo combustible:</span>
                            </div>
                            <input type="text" placeholder="Type here"
                                class="bg-gray-200 text-gray-400 border-gray-300 rounded-md  w-full" disabled />
                        </label>
                    </div>

                </div>
                <div class="mb-6">
                    <label class="form-control w-full ">
                        <div class="label">
                            <span class="label-text text-white">Estatus:</span>
                        </div>
                        <input type="text" placeholder="Type here"
                            class="bg-white text-gray-500 input input-bordered w-full" />
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
                                class="bg-white text-gray-500 input input-bordered w-full" />
                        </label>
                    </div>
                    <div class="flex items-center justify-center">
                        <label class="form-control w-full ">
                            <div class="label">
                                <span class="label-text text-white">De compra:</span>
                            </div>
                            <input type="text" placeholder="Type here"
                                class="bg-white text-gray-500 input input-bordered w-full" />
                        </label>
                    </div>
                    <div class="flex items-center justify-center">
                        <label class="form-control w-full ">
                            <div class="label">
                                <span class="label-text text-white">Actual:</span>
                            </div>
                            <input type="text" placeholder="Type here"
                                class="bg-white text-gray-500 input input-bordered w-full" />
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
                            class="bg-white text-gray-500 input input-bordered w-full " />
                    </label>

                    <label class="form-control w-full flex-grow mr-4">
                        <div class="label flex-grow">
                            <span class="label-text text-white">Digitados</span>
                        </div>
                        <input type="text" placeholder="Type here"
                            class="bg-white text-gray-500 input input-bordered w-full " />
                    </label>
                </div>
                <div class="mb-6">
                    <label class="form-control w-full ">
                        <div class="label">
                            <span class="label-text text-white">Serie de vale:</span>
                        </div>
                        <input type="text" placeholder="Type here"
                            class="bg-white text-gray-500 input input-bordered w-full" />
                    </label>
                </div>
                <div class="flex w-full mb-10 ">
                    <label class="form-control w-full flex-grow mr-4">
                        <div class="label flex-grow">
                            <span class="label-text text-white">Serie:</span>
                        </div>
                        <select type="text" placeholder="Type here"
                            class="bg-white text-gray-500  border-gray-300 select select-bordered w-full ">
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
                            class="bg-white text-gray-500 input input-bordered w-full " />
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
                                class="bg-white text-gray-500 input input-bordered w-full" min="0" />
                        </label>
                    </div>
                    <div class="flex items-center justify-center">
                        <label class="form-control w-full ">
                            <div class="label">
                                <span class="label-text text-white">Kilom.FIN:</span>
                            </div>
                            <input type="number" placeholder="Type here"
                                class="bg-white text-gray-500 input input-bordered w-full" min="0" />
                        </label>
                    </div>
                    <div class="flex items-center justify-center">
                        <label class="form-control w-full ">
                            <div class="label">
                                <span class="label-text text-white">Factura No.</span>
                            </div>
                            <input type="text" placeholder="Type here"
                                class="bg-white text-gray-500 input input-bordered w-full" />
                        </label>
                    </div>
                    <div class="flex items-center justify-center">
                        <label class="form-control w-full ">
                            <div class="label">
                                <span class="label-text text-white ">Fecha Emisión:</span>
                            </div>
                            <input type="date" placeholder="Type here"
                                class="bg-[#7b7f85] border-white text-white input input-bordered w-full " />
                        </label>
                    </div>
                    <div class="flex items-center justify-center">
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text text-white">Tipo de Combustible</span>
                            </div>
                            <select type="text" placeholder="Type here"
                                class="bg-gray-50 border text-gray-500 border-gray-300 select select-bordered w-full ">
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
                                class="bg-white text-gray-500 input input-bordered w-full" min="0" />
                        </label>
                    </div>
                    <div class="flex items-center justify-center">
                        <label class="form-control w-full ">
                            <div class="label">
                                <span class="label-text text-white">Total Galones</span>
                            </div>
                            <input type="number" placeholder="Type here"
                                class="bg-white text-gray-500 input input-bordered w-full" min="0" />
                        </label>
                    </div>
                    <div class="flex items-center justify-center">
                        <label class="form-control w-full ">
                            <div class="label">
                                <span class="label-text text-white">No. Placa</span>
                            </div>
                            <input type="text" placeholder="Type here"
                                class="bg-white text-gray-500 input input-bordered w-full" />
                        </label>
                    </div>
                    <div class="flex items-center justify-center">
                        <label class="form-control w-full ">
                            <div class="label">
                                <span class="label-text text-white">Liquidado</span>
                            </div>
                            <input type="text" placeholder="Type here"
                                class="bg-white text-gray-500 input input-bordered w-full" />
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
