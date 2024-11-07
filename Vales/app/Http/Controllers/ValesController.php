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
            'corr' => 'required|string',
            'tipo_combustible' => 'required|string',
            'tipo_fondo' => 'required|string',
            'programa' => 'required|string',
            'fecha_fac' => 'required|date',
            'nocompra' => 'required|string',
            'feini' => 'required|date',
            'fefin' => 'required|date',
            'nfactura' => 'required|string',
            'proveedor' => 'required|string',
            'valorvale' => 'required|string',
            'precio_referencia' => 'required|string',
            'serie_vale' => 'required|string',
            'correlativo_inicial' => 'required|integer',
            'correlativo_final' => 'required|integer',
            'observacion' => 'nullable|string',
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
