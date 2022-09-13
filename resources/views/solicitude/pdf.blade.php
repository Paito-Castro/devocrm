
<!DOCTYPE html>
<html lang="en" style="background: rgb(2,0,36); background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(121,9,118,1) 35%, rgba(0,212,255,1) 100%);">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DeVo CRM | Client Relationship Management</title>

    <link href="{{ public_path('css/app.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito?family=Orbitron:wght@500;700" rel="stylesheet"> 
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>


<body>


<div class="col-12">
<h1 style="margin-left:100px; text-center font-family: 'Orbitron', sans-serif;">DeVo</h1>
</div>




<div class="container mt-5">
<div class="col-12 text-center">
    <h3 style="color:#000; font-weight:bold; font-size:30px; font-family: 'Orbitron', sans-serif;">Reporte de Solicitudes</h3>
</div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card" style="background-color:#ffffff; color:#000;">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped text-left text-wrap" style="background-color:transparent; color:#000; font-family: 'Orbitron', sans-serif; font-size:8x; word-wrap: break-word;">
                                <thead class="thead-dark text-center" style="font-family: 'Orbitron', sans-serif;">
                                    <tr>
                                        <th>No</th>
                                        <th>Fecha</th>
                                        <th>Estado</th>
										<th>Cliente</th>
										<th>Servicio</th>
										<th>Ejecutivo</th>
                                       
                                    </tr>
                                </thead>
                                <tbody style="word-wrap: break-word;">
                                    @foreach ($solicitudes as $solicitude)
                                        <tr>
                                            <td>{{ $solicitude->id }}</td>
                                            <td>{{ $solicitude->datepicker }}</td>
                                            <td>{{ $solicitude->estado->nombreestado }}</td>
											<td>{{ $solicitude->cliente->empresa }}</td>
											<td>{{ $solicitude->servicio->nombreservicio }}</td>
											<td>{{ $solicitude->empleado->Nombre }}</td>
                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                               
                            </table>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
</div>
</body>

</html>