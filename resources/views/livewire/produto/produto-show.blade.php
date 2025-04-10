<div class="container mt-5">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-warning text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0"><i class="bi bi-eye"></i> Detalhes do Produto</h4>
            <a href="{{ route('produtos.index') }}" class="btn btn-warning text-white rounded-pill px-3">
                <i class="bi bi-arrow-left"></i> Voltar
            </a>
        </div>

        <div class="card-body">
            {{-- Aqui a imagem do produto --}}
            @if ($produto->imagem)
                <div class="text-center mb-4">
                    <img src="{{ asset('storage/' . $produto->imagem) }}" 
                         class="img-fluid rounded shadow" 
                         alt="Imagem do Produto" 
                         style="max-width: 300px;">
                </div>
            @endif

            {{-- Resto das informações --}}
            <div class="card mb-3 border-0 bg-light">
                <div class="card-body">
                    <h5 class="card-title text-muted">Nome</h5>
                    <p class="card-text fw-bold">{{ $produto->nome }}</p>
                </div>
            </div>

            <div class="card mb-3 border-0 bg-light">
                <div class="card-body">
                    <h5 class="card-title text-muted">Ingredientes</h5>
                    <p class="card-text">{{ $produto->ingredientes }}</p>
                </div>
            </div>

            <div class="card mb-3 border-0 bg-light">
                <div class="card-body">
                    <h5 class="card-title text-muted">Valor</h5>
                    <p class="card-text fw-bold">R$ {{ number_format($produto->valor, 2, ',', '.') }}</p>
                </div>
            </div>
        </div>
    </div>  
</div>