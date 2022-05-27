<h1 align="center">Api ViaCep</h1>

   <p>
   
   - [Sobre](#sobre)
   - [Preview](#preview)
   - [Funcionalidades](#Funcionalidades)
   - [Desafios e Aprendizados no Caminho](#desafios-e-aprendizados-no-caminho)
   - [Como Usar](#como-usar)
   - [Como Contribuir](#como-contribuir)
   - [Licença](#licença)

   </p>

---

<h2 align="center">Sobre</h2>

Essa api foi desenvolvida para buscar o cep utilizando o ViaCep.

Documentação no [postman](https://documenter.getpostman.com/view/14026033/Uz5ArJQf)

<a href=""></a>

</p>

---

<h2 align="center">Preview</h2>

   <p align="center">
      <img src="https://i.ibb.co/kXrTPRs/Screenshot-from-2022-05-26-10-07-24.png" width="400" alt="Preview">
   </p>

---

<h2 align="center">Funcionalidades</h2>
   
- Buscar cep e retornar o endereço completo, nessa estrutura
```json
[
  {
    "cep": "17560246",
    "label": "Avenida Paulista, Vera Cruz",
    "logradouro": "Avenida Paulista",
    "complemento": "de 1600/1601 a 1698/1699",
    "bairro": "CECAP",
    "localidade": "Vera Cruz",
    "uf": "SP",
    "ibge": "3556602",
    "gia": "7134",
    "ddd": "14",
    "siafi": "7235"
  }
]
````

---

<h2 align="center">Desafios e Aprendizados no Caminho</h2>

   <p>
    <br>
    <a>Durante a criação do projeto o mais dificil foi inserir label abaixo de cep, para isso tive que entender como estava o array da aplicação, também tive problemas com o versionamento, por algum motivo, ele corrompeu, mas o stackoverflow salvou.</a><br>
    <br>
    <br>
   </p>

---

<h2 align="center">Como Usar</h2>

-   Clone esse repositorio:

```sh
git clone https://github.com/AndreSnow/apiviacep.git
```

-   Entrar no diretorio:

```sh
cd apiviacep
```

-   Instalar as dependências:

```sh
composer install
```

-   Rodar o app:

```sh
php artisan serve
```

-   Teste pelo postman usando a rota:

```sh
api/search/local/a?cep=01001000
```
- É possivel testar diretamente pela aplicação, nos testes do laravel e deve retornar isso
<img src="https://i.ibb.co/3sc1NWS/Screenshot-from-2022-05-25-23-48-33.png" width="400" alt="Teste do laravel">

~~~sh
php artisan test
~~~

- Também acrescentei um teste na qualidade do software
<img src="https://i.ibb.co/tpQRZ3W/Screenshot-from-2022-05-25-23-47-59.png"
 width="400" alt="Qualidade de Software">
~~~sh
./vendor/bin/phpinsights
~~~







---

<h2 align="center">Como Contribuir</h2>

-   De um Fork no projeto.

-   Crie uma nova branch com sua modificações:

```sh
git checkout -b my-feature
```

-   Salve suas configurações e crie um commit dizendo com o que você contribuiu:

```sh
git commit -m "feature: My new feature"
```

-   Nos envie:

```sh
git push origin my-feature
```

---

<h2 align="center">Licença</h2>

<p align="center">
   Este repositório está sob licença MIT. Você pode acessar o arquivo <a href="https://github.com/AndreSnow/apiviacep/blob/develop/LICENSE">LICENSE</a> para mais detalhes. 😉
</p>

---

Esse projeto foi desenvolvido por **[@André Neves](https://www.linkedin.com/in/andré-n-922181a6/)**.

---

Se isso te ajudou, dê uma ⭐, isso vai me ajudar também!
😉

---

   <div align="center">

[![Linkedin Badge](https://img.shields.io/badge/-Andre%20Neves-292929?style=flat-square&logo=Linkedin&logoColor=white&link=https://www.linkedin.com/in/andr%C3%A9-n-922181a6/)](https://www.linkedin.com/in/andré-n-922181a6/)

   </div>
