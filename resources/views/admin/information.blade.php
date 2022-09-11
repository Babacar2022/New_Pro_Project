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
        padding-bottom: 20px;
    }
    .text_color
    {
        color: black;
        padding-bottom: 20px;
    }
.text2_color
{
    color: black;
    padding-bottom: 20px;
    width: 100%;
   height: 200px;
}
    label
    {
        display:inline-block ;
        width: 200px;
    }
    .div_design
    {
        margin: auto;
        width: 50%;
        text-align: center;
        margin-top: 30px;
        border: 2px solid green;
    }
    .form
    {
        border: 2px solid rgb(229, 235, 229);
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
                        <h1 class="h1_font"> Ajouter Information</h1>
                        <form class="form" action="{{ url('/add_information') }}" method="POST" enctype="multipart/form-data">
                            @csrf


                            <div class="div_design">
                                <label for="">Titre</label>
                                <input class="text_color" type="text" name="nom" placeholder="Write information Titre" required="">
                            </div>


                            <div class="div_design">
                                <label for="">Center</label>
                                <select class="text_color" name="center" id="">
                                    <option  value=""selected=""required="">Add Center</option>
                                    @foreach ($center as $center)
                                    <option value="{{ $center->center_name }}">{{ $center->center_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="div_design">
                                <label for="">Type Info</label>
                                <select class="text_color" name="type_info" id="">
                                    <option  value=""selected=""required="">Add Type Info</option>
                                    @foreach ($type_info as $type_info)
                                    <option value="{{ $type_info->name }}">{{ $type_info->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="div_design">
                                <label for="">Fliere</label>
                                <select class="text_color" name="fliere" id="">
                                    <option  value=""selected=""required="">Add Fliere</option>
                                    @foreach ($fliere as $fliere)
                                    <option value="{{ $fliere->name }}">{{ $fliere->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="div_design">
                                <label for="">Description</label><br>
                                <input class="text2_color" type="textarea" name="description"required="">
                                 @error('description') <small class="text-danger">{{$message }}</small>@enderror
                            </div>

                            <div>
                                <input type="submit" value="Ajouter Information" class="btn btn-primary" >
                            </div>

                           </form>
                    </div>

                </div>
            </div>
        <!-- container-scroller -->
         <!-- plugins:js -->
        @include('admin.js')
    <!-- End custom js for this page -->
</body>

</html>
