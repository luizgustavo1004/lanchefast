<div class="container mt-5">
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-header bg-primary text-white rounded-top-4">
            <h3 class="mb-0"><i class="bi bi-person-vcard-fill"></i> Detalhes do Cliente</h3>
        </div>

        <div class="card-body">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card text-center shadow-sm border-0 h-100">
                        <div class="card-body">
                            <i class="bi bi-person fs-2 text-primary"></i>
                            <h5 class="card-title mt-2">Nome</h5>
                            <p class="card-text">{{ $cliente->nome }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card text-center shadow-sm border-0 h-100">
                        <div class="card-body">
                            <i class="bi bi-envelope fs-2 text-success"></i>
                            <h5 class="card-title mt-2">Email</h5>
                            <p class="card-text">{{ $cliente->email }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card text-center shadow-sm border-0 h-100">
                        <div class="card-body">
                            <i class="bi bi-card-text fs-2 text-info"></i>
                            <h5 class="card-title mt-2">CPF</h5>
                            <p class="card-text">{{ $cliente->cpf }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card text-center shadow-sm border-0 h-100">
                        <div class="card-body">
                            <i class="bi bi-telephone fs-2 text-warning"></i>
                            <h5 class="card-title mt-2">Telefone</h5>
                            <p class="card-text">{{ $cliente->telefone }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="card text-center shadow-sm border-0 h-100">
                        <div class="card-body">
                            <i class="bi bi-house-door fs-2 text-danger"></i>
                            <h5 class="card-title mt-2">Endereço</h5>
                            <p class="card-text">{{ $cliente->endereco }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-footer text-end bg-light rounded-bottom-4">
            <a href="{{ route('clientes.index') }}" class="btn btn-outline-secondary">
                <i class="bi bi-arrow-left-circle"></i> Voltar para Lista
            </a>
        </div>
    </div>
</div>