<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Persona AMSS</title>
    <link rel="stylesheet" href="/css/app.css"/>
    <STYLE TYPE="text/css">
    .titulopersona {
      font-size: 40px;
    }

    .titulopersona:hover {
      text-align: center;
      box-shadow:  5px 10px 8px 10px #888888
    }

    body    {
    color: 	#000000;
    padding: 25px;
    font: 14px Arial, Tahoma;
    background-image: url("grid.jpg");
    }
    .prueba{
      text-decoration: underline;
    }
    td{
      border-width: 0.5px;
      border-style: solid;
    }
    .iidd{
      padding-left: 5px;
      font: 20px Arial;
    }
    .cabeza{
      font: 25px Arial;
    }
  </STYLE>
</head>
<body>
    <div class="container">
        <h1 class="titulopersona">Persona AMSS</h1>
        @if(session('estado'))
            <div class="alert alert-success">
                {{session('estado')}}
            </div>
        @endif

                <table class="table">
                    <thead class="cabeza">
                        <tr class="prueba">
                          <th>Id persona</th>
                          <th>Nombres</th>
                          <th>Apellidos</th>
                          <th>DUI</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($datos as $dato)
                          @foreach($dato as $persona)
                          <tr>
                            <td class="iidd">{!! $persona->id !!}</td>
                            <td>{!! $persona->nombre !!}</td>
                            <td>{!! $persona->apellido !!}</td>
                            <td>{!! $persona->dui !!}</td>
                          </tr>
                          @endforeach
                      @endforeach

                    </tbody>
                </table>
        </div>
    </div>
</body>
</html>
