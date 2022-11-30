<h1>teste (view)</h1>

{{-- Comentários em blade,para pode usar php puro em arquivos usasse o comando:@php e @endphp --}}
{{-- as {{}} tem a mesma função q a tag curta do php que seria <?= ?>--}}

@php

@endphp


{{--@if(count($fornecedor) > 0 && count($fornecedor) < 10)
    <h3>Existem alguns fornecedores</h3>
@elseif(count($fornecedor)> 10)
    <h3>Existem muitos fornecedores</h3>
@else
    <h3>Ainda não existem fornecedores</h3>
@endif
--Enquanto o @if executa oque for true,o operador @unless executa oque for false

Fornecedor:{{$fornecedor[0]['nome']}}
<br>
Status:{{$fornecedor[0]['status']}}
@if($fornecedor[0]['status'] == 'N')
    <h3>Fornecedor Inativo</h3>
@endif
@unless($fornecedor[0]['status'] == 'S')
    <h3>Fornecedor Inativo</h3>

@endunless

-- O operador @isset retorna true se a variavel estove definida

@isset($fornecedor)
    fornecedor:{{$fornecedor[0]['nome']}}
    <br>
    status:{{$fornecedor[0]['status']}}
    <br>
    @isset($fornecedor[0]['cnpj'])
        CNPJ:{{$fornecedor[0]['cnpj']}}
    @endisset
@endisset

-- o operador @empty verifica se a variavel esta vazia, se estive vazia ele retorna true:
--Exemplos de variaveis vazias:
0,0.0,'',$var,array(),null,false,'0'

@isset($fornecedor)
    fornecedor:{{$fornecedor[0]['nome']}}
    <br>
    status:{{$fornecedor[0]['status']}}
    <br>
    @isset($fornecedor[0]['cnpj'])
        CNPJ:{{$fornecedor[0]['cnpj']}}
        @empty($fornecedor[0]['cnpj'])
            -vazio
        @endempty
    @endisset
@endisset
 
-- Operadores ternários funciona basicamento como if e else,caso seja true executa um intrução caso seja false execulta outra função
-- usado com exemplo nos controller:
 echo isset ($fornecedor[0]['cnpj']) ? 'CNPJ INFORMADO' : 'CNPJ NÃO INFORMADO';

-- O metodo default, ira execultar caso  a variavel passada não tenha sido definida,ou se estiver null

@isset($fornecedor)
    fornecedor:{{$fornecedor[1]['nome']}}
    <br>
    status:{{$fornecedor[1]['status']}}
    <br>
    CNPJ: {{ $fornecedor[1]['cnpj'] ?? 'Dado não preenchido.' }}
@endisset

-- O operado @switch ira fazer uma verificação nos parametros passados,caso seja true faz a execução.Caso não seja ira execultar o @default.

@isset($fornecedor)
    fornecedor:{{$fornecedor[3]['nome']}}
    <br>
    status:{{$fornecedor[3]['status']}}
    <br>
    CNPJ: {{ $fornecedor[3]['cnpj'] ?? 'Dado não preenchido.' }}
    <br>
    Telefone:({{$fornecedor[3]['DDD'] ?? '0' }}) {{$fornecedor[1]['telefone']}}
    @switch($fornecedor[3]['DDD'])
        @case('11')
            SÃO PAULO - SP
            @break
        @case('87')
            PERNAMBUCO - PE
            @break
        @case('85')
            FORTALEZA -CE
            @break
        @default
            Estado não identificado.
    @endswitch
@endisset

-- O operador @for ira fazer um laço de repetição ate que chegue  ao parametro estabelecido.

@isset($fornecedor)
    @for($i = 0;isset($fornecedor[$i]);$i++)
        fornecedor:{{$fornecedor[$i]['nome']}}
        <br>
        status:{{$fornecedor[$i]['status']}}
        <br>
        CNPJ: {{ $fornecedor[$i]['cnpj'] ?? 'Dado não preenchido.' }}
        <br>
        Telefone:({{$fornecedor[$i]['DDD'] ?? '0' }}) {{$fornecedor[$i]['telefone']}}
        <hr>
    @endfor
@endisset

--O operador @while funciona igual ao operador @for porem a variavel de controle tem e deve ser criada antes do laço.

@isset($fornecedor)
        
    @php $i = 0 @endphp
    @while(isset($fornecedor[$i]))
        fornecedor:{{$fornecedor[$i]['nome']}}
        <br>
        status:{{$fornecedor[$i]['status']}}
        <br>
        CNPJ: {{ $fornecedor[$i]['cnpj'] ?? 'Dado não preenchido.' }}
        <br>
        Telefone:({{$fornecedor[$i]['DDD'] ?? '0' }}) {{$fornecedor[$i]['telefone']}}
        <hr>
    @php $i++ @endphp
    @endwhile
    
@endisset

--O operador @foreach vai pecorrer o array, através de um laço de repetição.

@isset($fornecedor)
        
    @foreach ($fornecedor as $indice => $fornecedor )
        fornecedor:{{$fornecedor['nome']}}
        <br>
        status:{{$fornecedor['status']}}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não preenchido.' }}
        <br>
        Telefone:({{$fornecedor['DDD'] ?? '0' }}) {{$fornecedor['telefone']}}
        <hr>
    @endforeach
@endisset

--O operador @forelse vai pecorrer o array,porem se ele estiver vazio vai execultar o @empty

@isset($fornecedores)
        
    @forelse($fornecedores as $indice => $fornecedores)
        fornecedor:{{$fornecedores['nome']}}
        <br>
        status:{{$fornecedores['status']}}
        <br>
        CNPJ: {{ $fornecedores['cnpj'] ?? 'Dado não preenchido.' }}
        <br>
        Telefone:({{$fornecedores['DDD'] ?? '0' }}) {{$fornecedores['telefone']}}
        <hr>
    @empty
        Não tem fornecedores cadastrados.
    @endforelse
@endisset
 
--Para escapar da tag de impressão do blade, usasse @ no começo da {{}} ficando assim @{{}}.

@isset($fornecedor)
        
    @foreach ($fornecedor as $indice => $fornecedor )
        fornecedor:@{{$fornecedor['nome']}}
        <br>
        status:@{{$fornecedor['status']}}
        <br>
        CNPJ: @{{ $fornecedor['cnpj'] ?? 'Dado não preenchido.' }}
        <br>
        Telefone:(@{{$fornecedor['DDD'] ?? '0' }}) @{{$fornecedor['telefone']}}
        <hr>
    @endforeach
@endisset

--}}


@isset($fornecedor)
        
    @foreach ($fornecedor as $indice => $fornecedor )
        fornecedor:@{{$fornecedor['nome']}}
        <br>
        status:@{{$fornecedor['status']}}
        <br>
        CNPJ: @{{ $fornecedor['cnpj'] ?? 'Dado não preenchido.' }}
        <br>
        Telefone:(@{{$fornecedor['DDD'] ?? '0' }}) @{{$fornecedor['telefone']}}
        <hr>
    @endforeach
@endisset
