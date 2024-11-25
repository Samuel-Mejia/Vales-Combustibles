<form class="p-4 md:p-5" action="{{ route('vales.update', $correlativo->corr)}}" method="POST">
    @csrf
    <div>
        <label class="form-control w-full">
            <div class="label">
                <span class="label-text text-white">Corr</span>
            </div>
            <input type="text" name="corr" value="{{ old('corr', $correlativo->corr) }}" placeholder="Type here"
                class="text-black bg-gray-50 border-gray-300 input input-bordered w-full" readonly />
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
                    <option value="ESPECIAL" {{ $correlativo->tipo_combustible == 'ESPECIAL' ? 'selected' : '' }}>ESPECIAL</option>
                    <option value="REGULAR" {{ $correlativo->tipo_combustible == 'REGULAR' ? 'selected' : '' }}>REGULAR</option>
                    <option value="DIESEL" {{ $correlativo->tipo_combustible == 'DIESEL' ? 'selected' : '' }}>DIESEL</option>
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
                    <option value="TESORERIA" {{ $correlativo->tipo_fondo == 'TESORERIA' ? 'selected' : '' }}>TESORERIA</option>
                    <option value="RECURSOS PROPIOS" {{ $correlativo->tipo_fondo == 'RECURSOS PROPIOS' ? 'selected' : '' }}>RECURSOS PROPIOS</option>
                    <option value="PROYECTO" {{ $correlativo->tipo_fondo == 'PROYECTO' ? 'selected' : '' }}>PROYECTO</option>
                    <option value="DONACION" {{ $correlativo->tipo_fondo == 'DONACION' ? 'selected' : '' }}>DONACION</option>
                    <option value="FONDO GOES" {{ $correlativo->tipo_fondo == 'FONDO GOES' ? 'selected' : '' }}>FONDO GOES</option>
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
                    <option value="NORMAL" {{ $correlativo->programa == 'NORMAL' ? 'selected' : '' }}>NORMAL</option>
                    <option value="SEMANA SANTA" {{ $correlativo->programa == 'SEMANA SANTA' ? 'selected' : '' }}>SEMANA SANTA</option>
                    <option value="FIESTAS AGOSTINAS" {{ $correlativo->programa == 'FIESTAS AGOSTINAS' ? 'selected' : '' }}>FIESTAS AGOSTINAS</option>
                    <option value="FIN DE AÑO" {{ $correlativo->programa == 'FIN DE AÑO' ? 'selected' : '' }}>FIN DE AÑO</option>
                    <option value="FINLANDESA" {{ $correlativo->programa == 'FINLANDESA' ? 'selected' : '' }}>FINLANDESA</option>
                </select>
            </label>
            @error('programa')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label class="form-control w-full">
                <div class="label">
                    <span class="label-text text-white">Valor de vale</span>
                </div>
                <input type="text" name="valorvale" placeholder="Type here"
                    class="text-black bg-gray-50 border-gray-300 input input-bordered w-full"  value="{{ old('corr', $correlativo->valorvale) }}" />
            </label>
            @error('valorvale')
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
                <input type="date" name="fecha_fac" value="{{ old('fecha_fac', $correlativo->fecha_fac) }}"
                    class="bg-[#7b7f85] border-white text-white input input-bordered w-full" />
            </label>
            @error('fecha_fac')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label class="form-control w-full">
                <div class="label">
                    <span class="label-text text-white">Precio de Referencia Actual</span>
                </div>
                <input type="text" name="precio_referencia" value="{{ old('fecha_fac', $correlativo->precio_referencia) }}" placeholder="Type here"
                    class="text-black bg-gray-50 border-gray-300 input input-bordered w-full" />
            </label>
            @error('precio_referencia')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label class="form-control w-full">
                <div class="label">
                    <span class="label-text text-white">#Orden de Compra</span>
                </div>
                <input type="number" name="nocompra" value="{{ old('nocompra', $correlativo->nocompra) }}" placeholder="Type here"
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
                <input type="date" name="feini" value="{{ old('feini', $correlativo->feini) }}"
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
                <input type="date" name="fefin" value="{{ old('fefin', $correlativo->fefin) }}"
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
                <input type="number" name="nfactura" value="{{ old('nfactura', $correlativo->nfactura) }}" placeholder="Type here"
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
                <input type="text" name="proveedor" value="{{ old('proveedor', $correlativo->proveedor) }}" placeholder="Type here"
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
                <input type="text" name="proveedor" value="{{ old('proveedor', $correlativo->proveedor) }}" placeholder="Type here"
                    class="text-black bg-gray-50 border-gray-300 input input-bordered w-full" />
            </label>
            @error('proveedor')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="flex gap-6">
        <button type="submit" class="btn bg-blue-500 hover:bg-blue-700 text-white">Guardar</button>
    </div>
</form>