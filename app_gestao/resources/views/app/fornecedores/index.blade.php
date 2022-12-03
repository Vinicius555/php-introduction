<h1>Teste (view)</h1>
    
@isset($fornecedor)
    @forelse ($fornecedor as $indice => $fornecedor)
        Interação atual: {{$loop->iteration}}
        <br>
        Fornecedor:{{ $fornecedor['nome']}}
        <br>
        Status:{{$fornecedor['status']}}
        <br>
        CNPJ:{{$fornecedor['cnpj']}}
        <br>
        Telefone:({{$fornecedor['DDD'] ?? ''}}) {{$fornecedor['telefone'] ?? ''}}
       
        @if ($loop->first)
            <br>
            primeira iteração do Loop
            <br>
            
        @endif
        @if($loop->last)
            <br>
            Última iteração do Loop
            <br>
            Total de registros:{{$loop->count}}
        @endif
        <hr>
    @empty
        não existem fornecedores cadastrados.
    @endforelse
    
@endisset

