<!doctype html>

    <html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>BigStore: Shopping Invoice</title>
    </head>
<body>

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1 class="m-0 text-dark text-center"> Facture n° {{ $id }} du {{ $date }} </h1>
                    </div><!-- /.col -->
                    <div class="dropdown-divider"></div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="container-fluid">
            <div class="container">
                <div class="row center-flex">
                    <div class="col-md-10">
                        <div class="card card-widget widget-user-2">

                            <div class="card-footer p-0">
                                <h2 class="mb-4"> {{ $users->name }}</h2>

                                <table class="table table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th colspan="4">Commande</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($produit as $item)
                                            <tr>
                                                <td>{{ $item->nom }}</td>
                                                <td>@price($item->prix * 100)</td>
                                                <td>{{ $item->quantite }}</td>
                                                <td>@price($item->total * 100)</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <h3>Total : {{ $total }} € </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 </body>
</html>