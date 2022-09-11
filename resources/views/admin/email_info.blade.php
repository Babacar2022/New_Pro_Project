<!DOCTYPE html>
<html lang="en">

<head>
   @include('admin.css')
   <style type="text/css">
      label
      {
        display: inline-block;
        width: 200px;
        font-size: 15px;
        font-weight: bold;
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
                    <h2 style="text-align: center; font-size: 25px;">Envoi Email à {{ $demandeInfo->email }}</h2>
                <form action="{{ url('envoi_user_email',$demandeInfo->id) }}" method="POST">
                    @csrf
                    <div style="padding-left: 35%; padding-top: 30px;">
                    <label for="">Email Salutation</label>
                    <input style="color: black;"  type="text" name="greeting" id="">
                  </div>

                  <div style="padding-left: 35%; padding-top: 30px;">
                    <label for="">Email Nom utilisateur</label>
                    <input style="color: black;" type="text" name="firstline" id="">
                  </div>

                  <div style="padding-left: 35%; padding-top: 30px;">
                    <label for="">Email text </label>
                    <input style="color: black;" type="text" name="body" id="">
                  </div>

                  <div style="padding-left: 35%; padding-top: 30px;">
                    <label for="">Email Button  </label>
                    <input style="color: black;" type="text" name="button" id="">
                  </div>
                  <div style="padding-left: 35%; padding-top: 30px;">
                    <label for="">Email Url </label>
                    <input style="color: black;" type="text" name="url" id="">
                  </div>
                  <div style="padding-left: 35%; padding-top: 30px;">
                    <label for="">Email Last Line </label>
                    <input style="color: black;" type="text" name="lastline" id="">
                  </div>
                  <div style="padding-left: 35%; padding-top: 30px;">
                    <input type="submit" value="envoi Email" class="btn btn-primary">
                  </div>
                </form>
                </div>
            </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.js')
    <!-- End custom js for this page -->
</body>

</html>
