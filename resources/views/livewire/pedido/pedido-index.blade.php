    <div class="card">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">Pedidos</h4>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Quantidade</th>
                        <th>Valor Total</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pedidos as $pedido)
                        <tr>
                            <td>{{ $pedido->produto->nome }}</td>
                            <td>{{ $pedido->quantidade }}</td>
                            <td>R$ {{ number_format($pedido->valor_total, 2, ',', '.') }}</td>
                            <td>
                                <button wire:click="edit({{ $pedido->id }})" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i> Editar
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>