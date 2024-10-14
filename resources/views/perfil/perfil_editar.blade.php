@extends('perfil.perfil_adm')
@section('perfilAdm')
    <div class="main-content position-relative max-height-vh-100 h-100">
        <div class="container-fluid px-2 px-md-4">
            <div class="page-header min-height-300 border-radius-xl mt-4"
                style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
                <span class="mask  bg-gradient-primary  opacity-6"></span>
            </div>
            <div class="card card-body mx-3 mx-md-4 mt-n6">
                <div class="row gx-4 mb-2">
                    <div class="col-auto">
                        <div class="avatar avatar-xl position-relative">
                            <img src="/assets/img/bruce-mars.jpg" alt="profile_image"
                                class="w-100 border-radius-lg shadow-sm">
                        </div>
                    </div>

                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h5 class="mb-1">
                                ID administrador: {{ $administrador->id }}
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
                                    <form action="{{ route('perfil.upd', $administrador->id) }}" method="POST">
                                        @csrf
                                        <ul class="list-group">
                                            <input type="hidden" name="id" value="{{ $administrador->id }}">
                                            <tr>
                                                <td class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                                        class="text-dark">
                                                        <label for="name_adm">NOME</label>

                                                </td>

                                                <td>
                                                    <input type="text" class="form-control" name="name_adm"
                                                        id="name_adm" placeholder="Digite o nome"
                                                        value="{{ $administrador->name_adm }}" />
                                                </td>
                                            </tr>

                                            <li class="list-group-item border-0 ps-0 text-sm"><strong
                                                    class="text-dark">Mobile:</strong>
                                                &nbsp; (44) 123 1234 123</li>
                                            <li class="list-group-item border-0 ps-0 text-sm"><strong
                                                    class="text-dark">Email:</strong>
                                                &nbsp; alecthompson@mail.com</li>
                                            <li class="list-group-item border-0 ps-0 text-sm"><strong
                                                    class="text-dark">Location:</strong> &nbsp; USA</li>
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
