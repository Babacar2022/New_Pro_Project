<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
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
                        <h1 class="h1_font"> Update Information</h1>
                        <form class="form" action="{{ url('/update_information_confirm',$information->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="div_design">
                                <label for="">Nom</label>
                                <input class="text_color" type="text" name="nom" placeholder="Write information nom" required="" value="{{ $information->nom }}">
                            </div>

                            <div class="div_design">
                                <label for="">Description</label>
                                <input class="text_color" type="text" name="description" placeholder="Write information description"required=""value="{{ $information->description }}">
                            </div>
                            <div class="div_design">
                                <label for="">Center</label>
                                <select class="text_color" name="center" id="">
                                    <option  value="{{ $information->center }}"selected=""required="">{{ $information->center }}</option>
                                    @foreach ($center as $center)
                                    <option value="{{ $center->center_name }}">{{ $center->center_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="div_design">
                                <label for="">Type Info</label>
                                <select class="text_color" name="type_info" id="">
                                    <option  value="{{ $information->type_info }}"selected=""required="">{{ $information->type_info }}</option>
                                    @foreach ($type_info as $type_info)
                                    <option value="{{ $type_info->name }}">{{ $type_info->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="div_design">
                                <label for="">Fliere</label>
                                <select class="text_color" name="fliere" id="">
                                    <option  value="{{ $information->fliere }}"selected=""required="">{{ $information->fliere }}</option>
                                    @foreach ($fliere as $fliere)
                                    <option value="{{ $fliere->name }}">{{ $fliere->name }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div>
                                <input type="submit" value="Update Information" class="btn btn-primary" >
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
