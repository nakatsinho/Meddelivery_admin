@extends('layouts.master') 

@section('content')
<div class="padding">
    <div class="box">
        <div class="box-header">
            <span class="label danger pull-right">{{ $usersT }}</span>
            <h3>Usuários (Compradores/clientes)</h3>
        </div>
        <div class="table-responsive padding"> 
                <table class="table table-hover table-striped">
                    <thead style=" background-color:#b8b8bb" >
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Contacto/Celular</th>
                            <th>Nascimento</th>
                            <th>Profissão</th>
                            <th>Pais</th>
                            <th>Provincia</th>
                            <th>Data de Criação</th>  
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $row)
                        <tr> 
                            <td>{{ $row->name }}</td> 
                            <td>{{ $row->email }}</td>  
                            <td>{{ $row->number }}</td> 
                            <td>{{ $row->nascimento  }}</td> 
                            <td>{{ $row->profissao }}</td> 
                            @if ($row->pais_id == '')
                                <td></td>
                            @else
                                <td>{{ $row->pais->nome}}</td> 
                            @endif

                            @if ($row->provincia == '')
                                <td></td>
                            @else
                                <td>{{ $row->provincia->nome  }}</td>  
                            @endif
                            <td> {{ $row->created_at }} </td> 
                            
                        </tr> 
                        @empty
                            <td colspan="9"> 
                                <div class="alert alert-info alert-block text-center">
                                    <strong>Opss!! Sem dados por mostrar...</strong>
                                </div> 
                            </td>
                        @endforelse
                    </tbody>
                </table>  
                <div class="text-center"> 
                    {{ $users->links() }}
                </div>
        </div>
    </div>
</div>
           
@endsection