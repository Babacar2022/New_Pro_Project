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
        margin-top: 10px;
    }
    .font_size
    {
      text-align: center;
      font-size: 40px;
      padding-top: 10px;

    }
    .img_size
    {
        width: 100px;
        height: 100px;
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
                    <h2 class="font_size">Tous les etudiants</h2>
                     <table class="center">
                        <tr class="th_color">
                            <th class="th_deg">Nom</th>
                        <th class="th_deg">Prenom</th>
                        <th class="th_deg">Adresse</th>
                        <th class="th_deg">Matricule</th>
                        <th class="th_deg">Telephone</th>
                        <th class="th_deg">Description</th>
                        <th class="th_deg">Center</th>
                        <th class="th_deg">Fliere</th>
                        <th class="th_deg">Image</th>
                        <th class="th_deg">Supprimer</th>
                        <th class="th_deg">Modifier</th>
                        </tr>
                        @foreach ($student as $student)

                        <tr>
                            <td>{{ $student->nom }}</td>
                            <td>{{ $student->prenom }}</td>
                            <td>{{ $student->adresse }}</td>
                            <td>{{ $student->matricule }}</td>
                            <td>{{ $student->telephone }}</td>
                            <td> {{ $student->description }}</td>
                            <td>{{ $student->center }}</td>
                            <td>{{ $student->fliere }}</td>
                            <td><img class="img_size" src="/student/{{ $student->image}}" alt=""></td>
                            <td>
                                <a class="btn btn-danger" href="{{ url('/delete_student',$student->id) }}">Supprimer</a>
                            </td>
                            <td>
                                <a class="btn btn-success" href="{{ url('/update_student',$student->id) }}">Modifier</a>
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
