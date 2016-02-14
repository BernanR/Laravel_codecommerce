@extends('app')
@section('content')
    <section class="container">
        <div class="content">
            <article>
                <header>
                    <h1>Categorias</h1>
                </header>

                <table>
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Criado Em:</th>
                        <th>Atualizado Em:</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categorias as $categoria)
                        <tr>
                            <td>{{ $categoria->id }}</td>
                            <td>{{ $categoria->nome }}</td>
                            <td>{{ str_limit($categoria->descricao, $limit = 15, $end = '...') }}</td>
                            <td>{{ date('d F, Y', strtotime($categoria->created_at)) }}</td>

                            <td>{{ date('d/m/ Y', strtotime($categoria->updated_at)) }}</td>
                            <td><a href="" title="Visualizar" class="btn btn-success" >Visualizar</a></td>
                            <td><a href="" title="api" class="btn btn-default" >API</a></td>
                            <td><a href="}" title="editar" class="btn btn-info" >Editar</a></td>
                            <td><a href="" title="delete" class="btn btn-danger" >Delete</a></td>


                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </article>
        </div>
    </section>
@stop
