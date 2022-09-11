<!DOCTYPE html>
<html lang="en">

<head>
   @include('admin.css')
   <base href="/public">
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
                        <h1 class="h1_font"> Update Etudiant</h1>
                        <form action="{{ url('/update_student_confirm',$student->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="div_design">
                                <label for="">Nom</label>
                                <input class="text_color" type="text" name="nom" placeholder="Write student nom" required="" value="{{$student->nom}}">
                            </div>
                            <div class="div_design">
                                <label for="">Prenom</label>
                                <input class="text_color" type="text" name="prenom" placeholder="Write student prenom"required="" value="{{$student->prenom}}">
                            </div>
                            <div class="div_design">
                                <label for="">Adresse</label>
                                <input class="text_color" type="text" name="adresse" placeholder="Write student adresse" required="" value="{{$student->adresse}}">
                            </div>
                            <div class="div_design">
                                <label for="">Matricule</label>
                                <input class="text_color" type="text" name="matricule" placeholder="Write student matricule"required="" value="{{$student->matricule}}">
                            </div>

                            <div class="div_design">
                                <label for="">Telephone</label>
                                <input class="text_color" type="number" name="telephone" placeholder="Write student telephone"required="" value="{{$student->telephone}}">
                            </div>
                            <div class="div_design">
                                <label for="">Description</label>
                                <input class="text_color" type="text" name="description" placeholder="Write student description"required="" value="{{$student->description}}">
                            </div>
                            <div class="div_design">
                                <label for="">Center</label>
                                <select class="text_color" name="center" id="">
                                    <option  value="{{$student->center}}"selected=""required="" >{{$student->center}}</option>
                                    @foreach ($center as $center)
                                    <option value="{{ $center->center_name }}">{{ $center->center_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="div_design">
                                <label for="">Fliere</label>
                                <select class="text_color" name="fliere" id="">
                                    <option  value="{{$student->fliere}}"selected=""required="" >{{$student->fliere}}</option>
                                    @foreach ($fliere as $fliere)
                                    <option value="{{ $fliere->name }}">{{ $fliere->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="div_design">
                                <label for="">current image Student</label>
                                <img style="margin: auto"; height="100" width="100" src="/student/{{ $student->image }}" alt="">
                            </div>

                            <div class="div_design">
                                <label for="">changer image Student</label>
                                <input type="file" name="image"required="" value="{{$student->image}}">
                            </div>
                            <div>
                                <input type="submit" value="Update Student" class="btn btn-primary" >
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
