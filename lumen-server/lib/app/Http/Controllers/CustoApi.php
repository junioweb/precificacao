<?php

/**
 * Precificação
 * Essa API auxiliará na formação de preços dos mais variados produtos. Com cálculos de custo, de preço de venda e de margem de lucro.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: fernando.junior@thorgus.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class CustoApi extends Controller
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * Operation custoGet
     *
     * Calcule o Custo Total Unitário do produto..
     *
     *
     * @return Http response
     */
    public function custoGet()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['venda'])) {
            throw new \InvalidArgumentException('Missing the required parameter $venda when calling custoGet');
        }
        $venda = $input['venda'];

        if (!isset($input['encargos'])) {
            throw new \InvalidArgumentException('Missing the required parameter $encargos when calling custoGet');
        }
        $encargos = $input['encargos'];

        if (!isset($input['lucro'])) {
            throw new \InvalidArgumentException('Missing the required parameter $lucro when calling custoGet');
        }
        $lucro = $input['lucro'];

        $valor = round(abs(
          $venda*(1-$encargos)/(1+$lucro)
        ),2);

        $porcentagem = round(abs(
          $valor * 100 / $venda
        ),2);

        return response()->json(['valor' => $valor, 'porcentagem' => $porcentagem]);
    }
}
