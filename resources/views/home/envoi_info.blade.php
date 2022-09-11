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
   </style>

</head>

<body>
    <div class="container-scroller">

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
                        <h1 class="h1_font"> faire une demande</h1>
                        <form action="{{ url('/add_demande') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="div_design">
                                <label for="">Nom</label>
                                <input class="text_color" type="text" name="nom" placeholder="Write demande nom" required="">
                            </div>
                            <div class="div_design">
                                <label for="">Prenom</label>
                                <input class="text_color" type="text" name="prenom" placeholder="Write demande prenom"required="">
                            </div>
                            <div class="div_design">
                                <label for="">Adresse</label>
                                <input class="text_color" type="text" name="adresse" placeholder="Write demande adresse" required="">
                            </div>
                            <div class="div_design">
                                <label for="">Email</label>
                                <input class="text_color" type="text" name="email" placeholder="Write demande email" required="">
                            </div>
                            <div class="div_design">
                                <label for="">Telephone</label>
                                <input class="text_color" type="number" name="telephone" placeholder="Write demande telephone"required="">
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
                                <label for="">Fliere</label>
                                <select class="text_color" name="fliere" id="">
                                    <option  value=""selected=""required="">Add Fliere</option>
                                    @foreach ($fliere as $fliere)
                                    <option value="{{ $fliere->name }}">{{ $fliere->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="div_design">
                                <label for="">image demande</label>
                                <input type="file" name="image"required="">
                            </div>
                            <div class="div_design">
                                <label for="">Titre</label>
                                <input class="text_color" type="text" name="titre" placeholder="Write demande titre" required="">
                            </div>
                            
                            <textarea style="height: 150px; width: 527px; color:black" name="description" placeholder="text">

                            </textarea>
                            <div>
                                <input type="submit" value="Add demande" class="btn btn-primary" >
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

