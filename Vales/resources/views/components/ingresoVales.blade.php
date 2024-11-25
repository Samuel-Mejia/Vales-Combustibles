<div class="mb-2">
    <hr />
</div>
<h2 class="text-center text-white font-bold mb-[1.6rem] mt-[1.6rem] text-[1.2rem]">
    Ingreso de vales de combustible a bodega general
</h2>
<div class="mb-2">
    <hr />
</div>
<form class="p-4 md:p-5" action="{{ route('vales.store') }}" method="POST">
    @csrf
    <div>
        <label class="form-control w-full mb-5">
            <div class="label">
                <span class="label-text text-white">Corr</span>
            </div>
            <input type="text" name="corr" placeholder="Type here"
                class="text-black bg-gray-50 border-gray-300 input input-bordered w-full" value="{{ $ultimoCorr + 1 }}"
                readonly />
        </label>
        @error('corr')
            <span class="text-red-600">{{ $message }}</span>
        @enderror
    </div>

    <!-- Resto de los campos -->
    <div class="grid gap-6 mb-6 grid-cols-1 md:grid-cols-3">
        <div x-data="{ open: false, seleccion: '', opciones: ['ESPECIAL', 'REGULAR', 'DIESEL'] }" class="form-control w-full text-black">
            <div class="label">
                <span class="label-text text-white">Tipo de Combustible</span>
            </div>
            <div class="relative">
                <!-- Campo de entrada -->
                <input type="text" x-model="seleccion" name="tipo_combustible"
                    placeholder="Selecciona o ingresa tipo de combustible" @focus="open = true" @input="open = true"
                    @blur="setTimeout(() => open = false, 150)"
                    class="bg-gray-50 text-black border border-gray-300 rounded-lg w-full px-4 py-2 pr-10 focus:outline-none" />
                <!-- Flecha personalizada -->
                <button type="button" @click="open = !open" class="absolute inset-y-0 right-0 flex items-center px-2">
                    <svg class="w-4 h-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <!-- Menú desplegable de opciones -->
                <ul x-show="open"
                    class="absolute z-10 w-full bg-white border border-gray-300 rounded-lg shadow-lg max-h-48 overflow-y-auto">
                    <template x-for="opcion in opciones" :key="opcion">
                        <li @click="seleccion = opcion; open = false"
                            class="px-4 py-2 cursor-pointer hover:bg-blue-100">
                            <span x-text="opcion"></span>
                        </li>
                    </template>
                </ul>
            </div>
            @error('tipo_combustible')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div x-data="{ open: false, seleccion: '', opciones: ['TESORERIA', 'RECURSOS PROPIOS', 'PROYECTO', 'DONACION', 'FONDO GOES'] }" class="form-control w-full text-black">
            <div class="label">
                <span class="label-text text-white">Tipo de Fondo</span>
            </div>
            <div class="relative">
                <!-- Campo de entrada -->
                <input type="text" x-model="seleccion" name="tipo_fondo"
                    placeholder="Selecciona o ingresa tipo de fondo" @focus="open = true" @input="open = true"
                    @blur="setTimeout(() => open = false, 150)"
                    class="bg-gray-50 text-black border border-gray-300 rounded-lg w-full px-4 py-2 pr-10 focus:outline-none" />
                <!-- Flecha personalizada -->
                <button type="button" @click="open = !open" class="absolute inset-y-0 right-0 flex items-center px-2">
                    <svg class="w-4 h-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <!-- Menú desplegable de opciones -->
                <ul x-show="open"
                    class="absolute z-10 w-full bg-white border border-gray-300 rounded-lg shadow-lg max-h-48 overflow-y-auto">
                    <template x-for="opcion in opciones" :key="opcion">
                        <li @click="seleccion = opcion; open = false"
                            class="px-4 py-2 cursor-pointer hover:bg-blue-100">
                            <span x-text="opcion"></span>
                        </li>
                    </template>
                </ul>
            </div>
            @error('tipo_fondo')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div x-data="{ open: false, seleccion: '', opciones: ['NORMAL', 'SEMANA SANTA', 'FIESTAS AGOSTINAS', 'FIN DE AÑO', 'FINLANDESA'] }" class="form-control w-full text-black">
            <div class="label">
                <span class="label-text text-white">PROGRAMA</span>
            </div>
            <div class="relative">
                <!-- Campo de entrada -->
                <input type="text" x-model="seleccion" name="programa" placeholder="Selecciona o ingresa un programa"
                    @focus="open = true" @input="open = true" @blur="setTimeout(() => open = false, 150)"
                    class="bg-gray-50 text-black border border-gray-300 rounded-lg w-full px-4 py-2 pr-10 focus:outline-none" />
                <!-- Flecha personalizada -->
                <button type="button" @click="open = !open" class="absolute inset-y-0 right-0 flex items-center px-2">
                    <svg class="w-4 h-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <!-- Menú desplegable de opciones -->
                <ul x-show="open"
                    class="absolute z-10 w-full bg-white border border-gray-300 rounded-lg shadow-lg max-h-48 overflow-y-auto">
                    <template x-for="opcion in opciones" :key="opcion">
                        <li @click="seleccion = opcion; open = false"
                            class="px-4 py-2 cursor-pointer hover:bg-blue-100">
                            <span x-text="opcion"></span>
                        </li>
                    </template>
                </ul>
            </div>
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
