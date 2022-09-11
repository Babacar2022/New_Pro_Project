<!DOCTYPE html>
<html lang="en">

<head>
   @include('admin.css')
   <style type="text/css">
    .div_info
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
                    <div class="div_info">
                        <h2 class="h2_font">Ajouter Type Information</h2>
                        <form action="{{ url('/add_type_info') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input class="iuput_color" type="text" name="type_info" placeholder="Write Type Info">
                            <input type="submit" class="btn btn-primary success" name="submit" value="Add Type Info">
                        </form>
                    </div>
                    <table class="center">
                        <tr>
                            <td>Type Information</td>
                            <td>Action</td>
                        </tr>
                        @foreach ($form as $form )


                        <tr>
                            <td>{{ $form->name }}</td>
                            <td>
                                <a onclick="return confirm('Are Yous Sure To Delete This ?')" class="btn btn-primary danger" href="{{ url('delete_type_info',$form->id) }}">Supprimer</a>
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
