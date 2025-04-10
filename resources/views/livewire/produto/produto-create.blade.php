<div class="container mt-5">
    <div class="card border-0 shadow-sm">
        <div class="card-header bg-warning text-white">
            <h4 class="mb-0"><i class="bi bi-plus-circle"></i> Criar Novo Produto</h4>
        </div>
        <div class="card-body">
            @if (session()->has('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form wire:submit.prevent="store" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input type="text" class="form-control" wire:model="nome">
                    @error('nome') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Ingredientes</label>
                    <textarea class="form-control" wire:model="ingredientes"></textarea>
                    @error('ingredientes') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Valor</label>
                    <input type="number" step="0.01" class="form-control" wire:model="valor">
                    @error('valor') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Imagem (opcional)</label>
                    <input type="file" class="form-control" wire:model="imagem">
                    @error('imagem') <small class="text-danger">{{ $message }}</small> @enderror

                    @if ($imagem)
                        <img src="{{ $imagem->temporaryUrl() }}" class="img-fluid mt-2" width="150">
                    @endif
                </div>

                <button type="submit" class="btn btn-warning text-white rounded-pill px-4">
                    <i class="bi bi-save"></i> Criar Produto
                </button>
            </form>
        </div>
    </div>
</div>