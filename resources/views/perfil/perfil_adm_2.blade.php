@extends('perfil.perfil_adm')

@section('perfilAdm')
    @php
        // Obtendo o administrador autenticado
        $linhasAdm = Auth::user(); // Para usar o guard padrão
; // Use o guard correto para administradores
    @endphp

    @if ($linhasAdm)
        <div class="card card-body mx-3 mx-md-4 mt-n6">
            <div class="row gx-4 mb-2">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="/assets/img/bruce-mars.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>

                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            {{ $linhasAdm->name  }}
                        </h5>
                        <p class="mb-0 font-weight-normal text-sm">
                            {{ $linhasAdm->id }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="row">
                    <div class="col-12 col-xl-4">
                        <div class="card card-plain h-100">
                            <div class="card-header pb-0 p-3">
                                <div class="row">
                                    <div class="col-md-8 d-flex align-items-center">
                                        <h6 class="mb-0">Informações da conta</h6>
                                    </div>
                                    <div class="col-md-4 text-end">
                                        <a href="{{ route('perfil_upd', ['id' => $linhasAdm->id]) }}">
                                            <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Editar conta"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <ul class="list-group">
                                    <li class="list-group-item border-0 ps-0 pt-0 text-sm">
                                        <strong class="text-dark">Nome Completo:</strong> &nbsp;
                                        {{ $linhasAdm->name }}
                                    </li>
                                    <li class="list-group-item border-0 ps-0 text-sm">
                                        <strong class="text-dark">Email:</strong> &nbsp;
                                        {{ $linhasAdm->email }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <p>Nenhum administrador logado. Por favor, faça login.</p>
    @endif
@endsection
