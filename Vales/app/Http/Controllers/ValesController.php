<?php

// app/Http/Controllers/ValesController.php

namespace App\Http\Controllers;

use App\Models\Vale;
use Illuminate\Http\Request;

class ValesController extends Controller
{

    public function index()
    {
        $vales = Vale::all(); // Obtener todos los vales generados
        return view('index', compact('vales')); // Pasar los vales a la vista
    }
    public function store(Request $request)
    {
        // Validación de los datos
        $request->validate([
            'corr' => 'required|string|unique:vales,corr',
            'tipo_combustible' => 'required|string|in:ESPECIAL,REGULAR,DIESEL',
            'tipo_fondo' => 'required|string|in:TESORERIA,RECURSOS PROPIOS,PROYECTO,DONACION,FONDO GOES',
            'programa' => 'required|string|in:NORMAL,SEMANA SANTA,FIESTAS AGOSTINAS,FIN DE AÑO,FINLANDESA',
            'fecha_fac' => 'required|date',
            'nocompra' => 'required|numeric',
            'feini' => 'required|date|before_or_equal:fefin',
            'fefin' => 'required|date|after_or_equal:feini',
            'nfactura' => 'required|numeric',
            'proveedor' => 'required|string|max:255',
            'valorvale' => 'required|numeric',
            'precio_referencia' => 'required|numeric',
            'serie_vale' => 'required|string|max:255',
            'correlativo_inicial' => 'required|numeric|lt:correlativo_final',
            'correlativo_final' => 'required|numeric|gt:correlativo_inicial',
            'observacion' => 'nullable|string|max:500',
        ], [
            'corr.required' => 'El campo "Corr" es obligatorio.',
            'corr.unique' => 'Este número de correlativo ya ha sido registrado. Por favor, ingresa otro.',
            'tipo_combustible.required' => 'El tipo de combustible es obligatorio.',
            'tipo_fondo.required' => 'El tipo de fondo es obligatorio.',
            'programa.required' => 'El programa es obligatorio.',
            'fecha_fac.required' => 'La fecha de compra es obligatoria.',
            'nocompra.required' => 'El número de orden de compra es obligatorio.',
            'feini.required' => 'La fecha de inicio es obligatoria.',
            'fefin.required' => 'La fecha de fin es obligatoria.',
            'nfactura.required' => 'El número de factura es obligatorio.',
            'proveedor.required' => 'El nombre del proveedor es obligatorio.',
            'valorvale.required' => 'El valor del vale es obligatorio.',
            'precio_referencia.required' => 'El precio de referencia es obligatorio.',
            'serie_vale.required' => 'La serie del vale es obligatoria.',
            'correlativo_inicial.required' => 'El correlativo inicial es obligatorio.',
            'correlativo_final.required' => 'El correlativo final es obligatorio.',
            'observacion.max' => 'La observación no puede tener más de 500 caracteres.',
            'correlativo_inicial.lt' => 'El correlativo inicial debe ser menor que el correlativo final.',
            'correlativo_final.gt' => 'El correlativo final debe ser mayor que el correlativo inicial.',
            'feini.before_or_equal' => 'La fecha de inicio no puede ser posterior a la fecha de fin.',
            'fefin.after_or_equal' => 'La fecha de fin no puede ser anterior a la fecha de inicio.',
        ]);

        // Extraer datos del request
        $correlativoInicial = $request->correlativo_inicial;
        $correlativoFinal = $request->correlativo_final;

        // Lógica para generar los vales
        for ($i = $correlativoInicial; $i <= $correlativoFinal; $i++) {
            
            Vale::create([
                'corr' => $request->corr,
                'tipo_combustible' => $request->tipo_combustible,
                'tipo_fondo' => $request->tipo_fondo,
                'programa' => $request->programa,
                'fecha_fac' => $request->fecha_fac,
                'nocompra' => $request->nocompra,
                'feini' => $request->feini,
                'fefin' => $request->fefin,
                'nfactura' => $request->nfactura,
                'proveedor' => $request->proveedor,
                'valorvale' => $request->valorvale,
                'precio_referencia' => $request->precio_referencia,
                'serie_vale' => $request->serie_vale . '-' . str_pad($i, 6, '0', STR_PAD_LEFT),
                'observacion' => $request->observacion,
            ]);
        }
        

        return redirect()->back()->with('success', 'Vales generados exitosamente.');
    }
}
