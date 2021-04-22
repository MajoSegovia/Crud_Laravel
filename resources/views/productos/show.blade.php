@extends("../layouts/layout");


@section("contenido");
<style>
            body{
            background: -webkit-linear-gradient(left, #F2F5A9 ,   #ECCEF5  );
        }
        .contact-form{
            background: #fff;
            margin-top: 10%;
            margin-bottom: 5%;
            width: 70%;
        }
        .contact-form .form-control{
            border-radius:1rem;
        }
        .contact-image{
            text-align: center;
        }
        .contact-image img{
            border-radius: 6rem;
            width: 11%;
            margin-top: -3%;
            transform: rotate(29deg);
        }
        .contact-form form{
            padding: 14%;
        }
        .contact-form form .row{
            margin-bottom: -7%;
        }
        .contact-form h3{
            margin-bottom: 8%;
            margin-top: -10%;
            text-align: center;
            color: #b7ce00;
        }
        .contact-form .btnContact {
            width: 50%;
            border: none;
            border-radius: 1rem;
            padding: 1.5%;
            background: #b7ce00;
            font-weight: 600;
            color: #fff;
            cursor: pointer;
        }
        .btnContactSubmit
        {
            width: 50%;
            border-radius: 1rem;
            padding: 1.5%;
            color: #fff;
            background-color: #b7ce00;
            border: none;
            cursor: pointer;
        }
</style>
<br>
<br>
<br>
<br>

<section id="gallery">
    <div class="container">
       <div class="row">
           
          <div class="col-lg-4 mb-4">
             <div class="card">
                <img src="/img/{{$producto->Nombre}}.png" alt="" class="card-img-top">
                <div class="card-body">
                   <h5 class="card-title">{{$producto->Nombre}}</h5>
                   <p class="card-text">{{$producto->Descripcion}}</p>
                   <a href="" class="btn btn-outline-danger btn-sm">{{$producto->Precio}}</a>
                   <a href="" class="btn btn-outline-success btn-sm">{{$producto->Contenido}}</a>
                   <a href= "{{route('productos.edit', $producto->id)}}" class="btn btn-outline-primary btn-sm">Actualizar</a>
                   
                   <form method="POST" action="/productos/{{$producto->id}}">
                   {{csrf_field()}}
                   <input type="hidden" name="_method" value="DELETE" />
                   <input type="submit" name="btnSubmit" class="btnContact" value="Eliminar" />
                   </form>
                   
                </div>
             </div>
          </div>
         
       </div>
    </div>
 </section>