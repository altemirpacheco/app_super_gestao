<h3>Index do Fornecedor</h3>

{{-- Comentario que não aparece na página blade --}}

@php
    // Código php é interpretado neste bloco
    echo 'Bloco PHP';
@endphp

{{-- @dd($fornecedores) --}}

@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Exitem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Exitem mais de 10 fornecedores cadastrados</h3>
@else
    <h3>Ainda não existem fornecedores cadastrados</h3>
@endif
