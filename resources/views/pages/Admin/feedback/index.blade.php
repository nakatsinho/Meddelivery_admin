@extends('layouts.master')
@section('title2', 'Feedback')
@section('subtitle', 'Sugestões')

@section('content')
<section class="related-product-area section_gap_bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="section-title"> <br><br><br> 
                    <h3 style="color:#ffc107">Feedback</h3>  <hr>
                </div>
            </div>
        </div>
        <div class="box"> 
            <div class="box-body">
                <div class="table-responsive">
                    <div class=" ">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr> 
                                        <th>Usuario</th> 
                                        <th>Mensagem</th>
                                        <th>Data de Publicação</th>  
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($feed as $row)
                                    <tr>
                                        <td>{{ $row->user_id }}</td>  
                                        <td> {{ $row->body }} </td>   
                                        <td> {{ $row->created_at }} </td>    
                                    </tr> 
                                    @empty
                                        <td colspan="7"> 
                                            <div class="alert alert-info alert-block text-center">
                                                <strong>Opss!! Sem Mensagem/Sugestões pra mostrar...</strong>
                                            </div> 
                                        </td>
                                    @endforelse
                                </tbody>
                            </table> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End related-product Area -->
@endsection