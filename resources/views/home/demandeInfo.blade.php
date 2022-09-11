
<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="{{ asset('home/home/images/favicon.png') }}" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('home/css/bootstrap.css') }}" />
      <!-- font awesome style -->
      <link href="{{ asset('home/css/font-awesome.min.css') }}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{ asset('home/css/style.css') }}" rel="stylesheet" />
      <!-- responsive style -->
       <link href="{{ asset('home/css/responsive.css') }}" rel="stylesheet" />
       <style class="text/css">

        .div_table
        {
            margin: auto;
            width: 50%;
            text-align: center;
            margin-top: 30px;
            border: 9px solid green;

        }
        #text_color
        {
            width: 100px;
            height: 50%;
            padding-right: 2px;
            padding-left: 0px;
            background-color: rgb(255, 255, 255);
        }
      </style>
    </head>
   <body>

    <section class="inner_page_head">
      <a class="btn btn-success" href="{{ url('envoi_info') }}">Demander info</a>

        <div class="container_fuild">
           <div class="row">
              <div class="col-md-12">
                 <div class="full">
                    <h3>List d infos</h3>
                 </div>
              </div>
           </div>
        </div>
     </section>

<section class="client_section layout_padding">
    <div class="container">
       <div class="heading_container heading_center">
          <h2>
             Center des informations
          </h2>
       </div>
       <div id="carouselExample3Controls" class="carousel slide" data-ride="carousel">


        @foreach ($information as $information)


        <div class="carousel-inner">

             <div class="carousel-item active">



             </div>
             <div class="box col-lg-10 mx-auto">
                <div class="img_container">
                   <div class="img-box">
                      <div class="img_box-inner">
                         <img src="home/images/logo_ucab.jpg" alt="">
                      </div>
                   </div>
                </div>
                <div>
                <table class="div_table">
                 <tr>
                    <th>Titre:</th>
                    <th>Center:</th>
                    <th>Type d info:</th>
                 </tr>
                 <tr>
                     <td>{{$information->nom}}</td>
                     <td>{{$information->center}}</td>
                     <td> {{$information->type_info}}</td>
                 </tr>


             </table>
             <textarea class="text_color" name="description" id="text_color" cols="300" rows="10">
                 {{$information->description}}
               </textarea>
             </div>
            </div>
       </div>
       @endforeach
       <span style="padding-top: 20px;">
       {!!$information->WithQueryString()->links('pagination::bootstrap-4')!!}
    </span>
    </div>
 </section>

 <script src="{{ asset('home/js/jquery-3.4.1.min.js') }}"></script>
 <!-- popper js -->
 <script src="{{ asset('home/js/popper.min.js') }}"></script>
 <!-- bootstrap js -->
 <script src="{{ asset('home/js/bootstrap.js') }}"></script>
 <!-- custom js -->
 <script src="{{ asset('home/js/custom.js') }}"></script>
</body>
</html>
