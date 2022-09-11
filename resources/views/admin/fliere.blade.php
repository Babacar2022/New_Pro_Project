<!DOCTYPE html>
<html lang="en">

<head>
   @include('admin.css')
   <style type="text/css">
    .div_fliere
    {
        text-align: center;
        padding-top: 40px;
    }
    .h2_font
    {
        font-size: 40px;
        padding-bottom: 40px;
    }
    .iuput_color
    {
        color: black;
    }
    .center
    {
        margin: auto;
        width: 50%;
        text-align: center;
        margin-top: 30px;
        border: 2px solid green;
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
                    <div class="div_fliere">
                        <h2 class="h2_font">Ajouter Fleire</h2>
                        <form action="{{ url('/add_fliere') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input class="iuput_color" type="text" name="fliere" placeholder="Write name fliere">
                            <input type="submit" class="btn btn-primary success" name="submit" value="Add name fliere">
                        </form>
                    </div>
                    <table class="center">
                        <tr>
                            <td>Flieres</td>
                            <td>Action</td>
                        </tr>
                        @foreach ($format as $format )


                        <tr>
                            <td>{{ $format->name }}</td>
                            <td>
                                <a onclick="return confirm('Are Yous Sure To Delete This ?')" class="btn btn-primary danger" href="{{ url('delete_fliere',$format->id) }}">Delete</a>
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
