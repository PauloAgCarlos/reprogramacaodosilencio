@extends('layouts.app2')

@section('conteudo')

<br>
<center>
    @if (session('erro'))
    {{-- expr --}}
    <div class="alert alert-danger" role="alert">
        {{section('erro')}}
    </div>
    @endif
</center>



<h2 class="content-heading">Listagem dos profissionais</h2>

    <!--All Products Table-->
    <div class="table-responsive">
        <table class="table table-borderless table-striped table-vcenter">
            <thead>
            <tr>
                <th class="text-center" style="width: 100px;">ID</th>
                <th class="d-none d-sm-table-cell text-center">Nome</th>
                <th class="d-none d-sm-table-cell text-center">CEP</th>
                <th class="d-none d-sm-table-cell text-center">Data de Nascimento</th>
                <th class="text-center">Acções</th>
            </tr>
            </thead>
            <tbody>
            
            @foreach($profissionais as $rowProfissionais)

            <tr>
                <td class="d-none d-sm-table-cell text-center fs-sm">
                    <a class="fw-semibold" href="javascript:boid(0)">
                        <strong>{{$rowProfissionais->id}}</strong>
                    </a>
                </td>
                <td class="d-none d-sm-table-cell text-center fs-sm">
                    <a class="fw-semibold" href="javascript:boid(0)">
                        <strong>{{$rowProfissionais->nome}}</strong>
                    </a>
                </td>
                <td class="d-none d-sm-table-cell text-center fs-sm">
                    <a class="fw-semibold" href="javascript:boid(0)">
                        <strong>{{$rowProfissionais->cep}}</strong>
                    </a>
                </td>
                <td class="d-none d-sm-table-cell text-center fs-sm">
                    <a class="fw-semibold" href="javascript:boid(0)">
                        <strong>{{$rowProfissionais->data_nascimento}}</strong>
                    </a>
                </td>
                <td class="text-center fs-sm">
                    <a class="btn btn-sm btn-alt-secondary" href="/visualizar_profissional/{{$rowProfissionais->id}}">
                        <i class="fa fa-fw fa-eye"></i>
                    </a>
                    <a class="btn btn-sm btn-alt-secondary" href="/eliminar_profissional/{{$rowProfissionais->id}}">
                        <i class="fa fa-fw fa-times text-danger"></i>
                    </a>
                </td>
            </tr>

            @endforeach
            </tbody>
        </table>
    </div>


@endsection