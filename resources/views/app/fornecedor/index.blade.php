<h3>Index do Fornecedor</h3>

{{-- Comentario que não aparece na página blade --}}

@php
    // Código php é interpretado neste bloco
    echo 'Bloco PHP';
@endphp

{{-- @dd($fornecedores) --}}

{{--  Teste com a condição if --}}

@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Exitem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Exitem mais de 10 fornecedores cadastrados</h3>
@else
    <h3>Ainda não existem fornecedores cadastrados</h3>
@endif


{{--  @unless - Testa se o retorno da condição é falso --}}

{{-- @dd($testeUnless) --}}

@unless ($testeUnless[0]['status'] == 'S')
    <h3>Status Inativo</h3>
@endunless


{{--  Teste se uma variável ou Array existe --}}

@isset($testeSeVariavelExiste)
    // entra se for verdadeiro:

     {{ $testeSeVariavelExiste }}

@endisset


{{--  Testa para saber se uma variável ou array está vazio
   É vazio nos seguintes casos:

   - ''
   - 0
   - 0.0
   - '0'
   - null
   - false
   - array()  - Array vazio
   - $var - variavel com valor não atribuido
--}}

@empty($testeUnless[0]['cnpj'])
    <br>
    O Valor está vazio.
@endempty
