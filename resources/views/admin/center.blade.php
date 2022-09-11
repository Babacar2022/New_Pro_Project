<!DOCTYPE html>
<html lang="en">

<head>
   @include('admin.css')
   <style type="text/css">
    .div_center
    {
        text-align: center;
        padding-top: 40px;
    }
    .h1_font
    {
        font-size: 40px;
        padding-bottom: 40px;
    }
    .input_color
    {
        color: black;
    }
    .div_cen
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

                    <div class="div_center">
                        <h1 class="h1_font"> Add Center</h1>
                        <form action="{{ url('/add_center') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input class="input_color" type="text" name="center" placeholder="Write center name">
                            <input type="submit" class="btn btn-primary" name="submit" value="Add center name">
                        </form>
                    </div>

                    <table class="div_cen">
                        <tr>
                            <td>Centers</td>
                            <td>Action</td>
                        </tr>
                        @foreach ($data as $data )

                        <tr>
                            <td>{{ $data->center_name }}</td>
                            <td>
                                <a onclick="return confirm('Are Yous Sure To Delete This ?')" class="btn btn-primary danger" href="{{ url('delete_center',$data->id) }}">Delete</a>
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
