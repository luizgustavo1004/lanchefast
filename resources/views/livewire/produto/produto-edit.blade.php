<div class="container mt-5">
    <div class="card border-0 shadow-sm">
        <div class="card-header bg-warning text-white">
            <h4 class="mb-0">Editar Produto</h4>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="atualizar" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input type="text" class="form-control" wire:model="nome">
                </div>

                <div class="mb-3">
                    <label class="form-label">Ingredientes</label>
                    <textarea class="form-control" rows="3" wire:model="ingredientes"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Valor (R$)</label>
                    <input type="number" step="0.01" class="form-control" wire:model="valor">
                </div>

                <div class="mb-3">
                    <label class="form-label">Nova Imagem (opcional)</label>
                    <input type="file" class="form-control" wire:model="novaImagem">
                </div>

                @if ($imagem)
                    <div class="mb-3">
                        <label class="form-label">Imagem atual</label>
                        <div>
                            <img src="{{ asset('storage/' . $imagem) }}" alt="Imagem atual" class="img-thumbnail" style="max-width: 200px;">
                        </div>
                    </div>
                @endif

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-warning text-white rounded-pill px-4">Salvar</button>
                    <a href="{{ route('produtos.index') }}" class="btn btn-secondary rounded-pill px-4">Voltar</a>
                </div>
            </form>
        </div>
    </div>
</div>