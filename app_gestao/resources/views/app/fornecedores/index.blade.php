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
        <hr>
    @empty
        não existem fornecedores cadastrados.
    @endforelse
    
@endisset