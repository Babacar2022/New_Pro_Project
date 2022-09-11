<!DOCTYPE html>
<html lang="en">

<head>
   @include('admin.css')
   <style type="text/css">
    .font_size
    {
        text-align: center;
        font-size: 25px;
        font-weight: bold;
        padding-bottom: 40px;
    }
    .table_dig
    {

        width: 100%;
        margin: auto;
        text-align: center;

    }
    .th_border
    {
        border: 2px solid green;
    }
    .th_deg
    {
        background-color: skyblue;
    }
    .img_size
    {
        width: 100%;
        height: 90px;
    }

    .dim_deg
    {
        width: 100px;
        text-align: center;
    }
    .h1_text
    {
        text-align: center;
    }
    .div_dim
    {
        background-color: rgb(148, 125, 125);
    }
   </style>
</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_sidebar.html -->
       @include('admin.sidebar')
        <!-- partial -->
        @include('admin.header')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <h2 class="font_size">Toutes les demandes</h2>
                    <div style="padding-left: 400px; padding-bottom: 35px;">
                        <form action="{{ url('search') }}" method="get">
                            @csrf
                            <input style="color: black" type="text" name="search" placeholder="search for something">
                            <input  type="submit" value="search" class="btn btn-outline-primary">
                        </form>
                    </div>
                    @foreach ($demandeInfo as $demandeInfo)
                    <table class="table_dig table table-bordered table-condensed table-striped">

                        <tr class="th_deg">
                            <th class="th_border" style="padding: 10px;">Nom</th>
                            <th class="th_border" style="padding: 10px;">Prenom</th>
                            <th class="th_border" style="padding: 10px;">Adresse</th>
                            <th class="th_border" style="padding: 10px;">Email</th>
                            <th class="th_border" style="padding: 10px;">Telephone</th>
                            <th class="th_border" style="padding: 10px;">Center</th>
                            <th class="th_border" style="padding: 10px;">Fliere</th>
                            <th class="th_border" style="padding: 10px;">Image</th>
                            <th class="th_border" style="padding: 10px;">Telecharger PDF</th>
                            <th class="th_border" style="padding: 10px;">Envoi Email</th>
                        </tr>



                        <tr class="th_border">
                            <td>{{ $demandeInfo->nom }}</td>
                            <td>{{ $demandeInfo->prenom }}</td>
                            <td>{{ $demandeInfo->adresse }}</td>
                            <td>{{ $demandeInfo->email }}</td>
                            <td>{{ $demandeInfo->telephone }}</td>
                            <td>{{ $demandeInfo->center }}</td>
                            <td>{{ $demandeInfo->fliere }}</td>

                            <td>
                                <img class="img_size" src="/demandeInfo/{{ $demandeInfo->image }}" alt="">
                            </td>
                            <td>
                                <a href="{{ url('print_pdf',$demandeInfo->id) }}" class="btn btn-secondary">Print PDF</a>
                            </td>
                            <td>
                                <a href="{{ url('envoi_email',$demandeInfo->id) }}" class="btn btn-info">Envoi Email</a>
                            </td>
                        </tr>
                    </table>
                    <div  class="div_dim">
                       <h1 class="h1_text">
                        Titre : <br>
                        {{ $demandeInfo->titre }}
                      </h1>
                       <p>
                        {{ $demandeInfo->description }}
                        </p>
                        </div>
                    @endforeach

                </div>
            </div>


    <!-- plugins:js -->
    @include('admin.js')
    <!-- End custom js for this page -->
</body>

</html>
