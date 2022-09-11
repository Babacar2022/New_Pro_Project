<!DOCTYPE html>
<html lang="en">

<head>
   @include('admin.css')
   <style class="text/css">
    .center
    {
        margin: auto;
        width: 50%;
        border: 2px solid white;
        text-align: center;
        margin-top: 40px;
    }
    .font_size
    {
      text-align: center;
      font-size: 40px;
      padding-top: 20px;

    }

    .th_color
    {
        background: skyblue;
    }
    .th_deg
    {
        padding: 10px;
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
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}

                    </div>

                    @endif
                    <h2 class="font_size">Ajouter une information</h2>
                     <table class="center">
                        <tr class="th_color">
                            <th class="th_deg">Nom</th>
                        <th class="th_deg">Description</th>
                        <th class="th_deg">Center</th>
                        <th class="th_deg">Type Info</th>
                        <th class="th_deg">Fliere</th>
                        <th class="th_deg">Supprimer</th>
                        <th class="th_deg">Modifier</th>
                        </tr>
                        @foreach ($information as $information)

                        <tr>
                            <td>{{ $information->nom }}</td>
                            <td> {{ $information->description }}</td>
                            <td>{{ $information->center }}</td>
                            <td>{{ $information->type_info }}</td>
                            <td>{{ $information->fliere }}</td>
                            <td>
                                <a class="btn btn-danger" onclick="return confirm('Are You Sure To Delete This ?')" href="{{ url('delete_information',$information->id) }}">Supprimer</a>
                            </td>
                            <td>
                                <a class="btn btn-success" href="{{ url('edit_information',$information->id) }}">Modifier</a>
                            </td>
                        </tr>
                        @endforeach
                     </table>
                </div>
            </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.js')
    <!-- End custom js for this page -->
</body>

</html>
