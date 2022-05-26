<?php

namespace Tests\Feature;

use Tests\TestCase;

class CepOkTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_cep_ok()
    {
        $this->get('api/search/local/a?cep=01001000')
            ->assertOk()
            ->assertJson([
                "cep" => "01001-000",
                "label" => "Praça da Sé, São Paulo",
                "logradouro" => "Praça da Sé",
                "complemento" => "lado ímpar",
                "bairro" => "Sé",
                "localidade" => "São Paulo",
                "uf" => "SP",
                "ibge" => "3550308",
                "gia" => "1004",
                "ddd" => "11",
                "siafi" => "7107"
            ]);
    }
}
