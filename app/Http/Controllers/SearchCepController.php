<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchCepRequest;

/**
 * Class SearchCepController
 * Busca o CEP informado e retorna o endereço completo.
 * @package App\Http\Controllers
 */
class SearchCepController extends Controller
{
    public function searchCep(SearchCepRequest $request)
    {
        $cep = $request->input('cep');
        $cep = str_replace('-', '', $cep);
        $cep = str_replace('.', '', $cep);
        $cep = str_replace(' ', '', $cep);

        $url = env("SEARCH_CEP_URL") . $cep . "/json/";

        $result = json_decode(file_get_contents($url), true);

        $label = ['label' => $result['logradouro'] . ', ' . $result['localidade']];

        $searchIndex = array_search('cep', array_keys($result));
        $result = array_merge(array_slice($result, 0, $searchIndex + 1), $label, array_slice($result, $searchIndex + 1));

        return response()->json($result);
    }
}
