@extends("../layouts/layout");
@section("contenido");

<br>
<br>
<br>
<br>


            <div class="row" style="background-color: #fff;">
            <div class= "col-md-2"></div>
            
                <div class="col-md-8 col-md-offset-2" ">
                    <table class="table table-hover">
                        <thead style="background-color: #ECCEF5;">
                            <tr>
                                <td>ID</td>
                                <td>Nombre</td>
                                <td>Apellido Paterno</td>
                                <td>Apellido Paterno</td>
                                <td>Funciones</td>
                            </tr>
                        </thead>
                        <tbody>                
                        @foreach($clientes as $cliente)
                            <tr>
                                <td>{{$cliente->id}}</td>
                                <td>{{$cliente->Nombre}}</td>
                                <td>{{$cliente->ApellidoP}}</td>
                                <td>{{$cliente->ApellidoM}}</td>
                                <td>{{$cliente->Tipo}}</td>
                                <td>
                                    
                                    <a href= "{{route('clientes.edit', $cliente->id)}}" class="btn btn-outline-primary btn-sm">Editar</a>
                                    
                                    <form method="POST" action="/clientes/{{$cliente->id}}">
                                        {{csrf_field()}}
                                        <input type="hidden" name="_method" value="DELETE" />
                                        <input type="submit" name="btnSubmit" class="btn btn-outline-danger btn-sm" value="Eliminar" />
                                    </form>
                                </td>
                            </tr> 
                        @endforeach
                        </tbody>
                   </table>
                   <a href= "{{route('clientes.create')}}" class="btn btn-outline-success btn-sm">Crear nuevo cliente</a>
                </div>
              
            </div>