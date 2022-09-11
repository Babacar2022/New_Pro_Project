
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
      <style type="text/css">
        .text_color
        {
            width: 500%;
            height: 500%;
            padding-right: 2px;
            padding-left: 2px;
            background-color: gainsboro;
        }
        .div_table
        {
            margin: auto;
            width: 1000px;
            text-align: center;
            margin-top: 30px;
            border: 2px solid green;
        }
        .h1_text
        {
            text-align: center;
        }
        .div_dim
        {
            background-color: rgb(148, 125, 125);
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
                   <div style="padding-left: 40px; padding-bottom: 35px;">
                        <form action="{{ url('search') }}" method="get">
                            @csrf
                            <input style="color: black" type="text" name="search" placeholder="Rechercher ici">
                            <input  type="submit" value="Rechercher" class="btn btn-outline-primary">
                        </form>
                    </div>

          @foreach ($information as $informations)
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
                      <th>Center:</th>
                      <th>Type d information:</th>
                      <th>Telecharger PDF:</th>
                   </tr>
                   <tr>
                       <td>{{$informations->center}}</td>
                       <td> {{$informations->type_info}}</td>
                       <td>
                        <a href="{{ url('print_pdf_home',$informations->id) }}" class="btn btn-secondary">Telecharger PDF</a>
                    </td>
                   </tr>


               </table>
               <div  class="div_dim">
                <h1 class="h1_text">
                 Titre :
                 {{ $informations->nom }}
               </h1>
                <p>
                 {{ $informations->description }}
                 </p>
                 </div>
               </div>
              </div>
         </div>
         @endforeach
        
      </div>
   </section>
   <div class="cpy_">
    <p class="mx-auto">© 2021 All Rights Reserved By <a href="home/https://html.design/">Free Html Templates</a><br>

       Distributed By <a href="home/https://themewagon.com/" target="_blank">ThemeWagon</a>

    </p>
 </div>
 <!-- jQery -->
 <script src="{{ asset('home/js/jquery-3.4.1.min.js') }}"></script>
 <!-- popper js -->
 <script src="{{ asset('home/js/popper.min.js') }}"></script>
 <!-- bootstrap js -->
 <script src="{{ asset('home/js/bootstrap.js') }}"></script>
 <!-- custom js -->
 <script src="{{ asset('home/js/custom.js') }}"></script>
</body>
</html>

