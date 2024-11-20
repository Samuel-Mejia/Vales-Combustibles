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