@extends('perfil.perfil_adm')
@section('perfilAdm')
    @php
        // Obtendo o administrador autenticado
        $linhasAdm = Auth::user(); // Para usar o guard padrão
        // Use o guard correto para administradores
    @endphp
    <div class="main-content position-relative max-height-vh-100 h-100">
        <div class="card card-body mx-3 mx-md-4 mt-n6">
            <div class="row gx-4 mb-2">

                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            ID administrador: #{{ $linhasAdm->id }}
                        </h5>
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
                                        <h6 class="mb-0">Profile Information</h6>
                                    </div>
                                </div>
                            </div>
                            <hr class="horizontal gray-light my-4">
                            <table>
                                <form action="{{ route('perfil.upd', $linhasAdm->id) }}" method="POST">
                                    @csrf
                                    <ul class="list-group">
                                        <input type="hidden" name="id" value="{{ $linhasAdm->id }}">
                                        <tr>
                                            <td class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                                    class="text-dark">
                                                    <label for="name_adm">NOME:</label>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="name" id="name"
                                                    placeholder="Digite o nome" value="{{ $linhasAdm->name }}" />
                                            </td>
                                        </tr>
                                    </ul>
                                </form>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
