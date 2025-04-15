<div class="container mt-4">
    <h4>Criar Pedido</h4>

    <div class="form-group">
        <label>Produtos</label>
        @foreach($produtosPedido as $index => $item)
            <div class="form-row align-items-end mb-2">
                <!-- Select para produto -->
                <div class="col-md-5">
                    <select wire:model="produtosPedido.{{ $index }}.produto_id" class="form-control" wire:change="updatedProdutosPedido">
                        <option value="">Selecione um produto</option>
                        @foreach($produtos as $produto)
                            <option value="{{ $produto->id }}">
                                {{ $produto->nome }} - R$ {{ number_format($produto->valor, 2, ',', '.') }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Quantidade -->
                <div class="col-md-3">
                    <input type="number" min="1" wire:model="produtosPedido.{{ $index }}.quantidade" class="form-control" wire:change="updatedProdutosPedido" placeholder="Quantidade">
                </div>

                <!-- Remover -->
                <div class="col-md-2">
                    <button type="button" wire:click="removeProduto({{ $index }})" class="btn btn-danger btn-sm">Remover</button>
                </div>
            </div>
        @endforeach

        <button type="button" wire:click="addProduto" class="btn btn-secondary btn-sm mt-2">+ Adicionar Produto</button>
    </div>

    <!-- Total -->
    <div class="form-group mt-4">
        <label><strong>Total</strong></label>
        <input type="text" class="form-control" value="R$ {{ number_format($valor_total, 2, ',', '.') }}" readonly>
    </div>
</div>