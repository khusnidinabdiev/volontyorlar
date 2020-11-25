<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Volontyorlar Maktabi</title>
    <link href="/img/logo final.png" rel="icon">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="sass/style.scss"> -->

</head>
<body>
        <!-- -------------------------------------------------------------------------------------------------------------------- -->
        <!-- -------------------------------------------------------------------------------------------------------------------- -->
        <!-- ----------------------                     MAIN PART                    ----------------------------------------------->
        <!-- -------------------------------------------------------------------------------------------------------------------- -->
        <!-- -------------------------------------------------------------------------------------------------------------------- -->
   <section  class="min-vh-100 bg-light" id="main-part">
            <header  class="fixed-top">
                  <nav class="navbar navbar-expand-lg navbar-dark">
                        <img class="ml-1" style="width: 3rem; height: 3rem;" src="/img/logo final.png" alt="">
                        <a class="navbar-brand text-dark ml-3" style="font-family: arial, cursive; font-size: 1.5rem;" href="/">Volontyorlar maktabi</a>
                        <a class="navbar-brand text-dark ml-3" style="font-family: arial, cursive; font-size: 1.5rem;" href="/home/add">Ro'yxatdan o'tish</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                  
                        <div class="collapse navbar-collapse  justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav ">
                              <li class="nav-item active">
                                    <a class="nav-link text-dark" href="/">Yangiliklar<span class="sr-only">(current)</span></a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link text-dark" href="/home">Contact us</a>
                              </li>
                              <li class="nav-item dropdown">
                                    <!-- <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Sign up
                                    </a>
                                  
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown"> -->
                                    <!-- <div class="flex-center position-ref full-height mb-2">
                                    @if (Route::has('login'))
                                        <div class="top-right links">
                                            @auth
                                                <a href="{{ url('/home') }}" class="nav-link text-dark">Home</a>
                                            @else
                                                <a href="{{ route('login') }}"class="btn btn-outline-success nav-link text-dark">Login</a><br>

                                                @if (Route::has('register'))
                                                    <a href="{{ route('register') }}"class="btn btn-outline-success nav-link text-dark">Register</a>
                                                @endif
                                            @endauth
                                        </div>
                                    @endif
                                    </div> -->
                                    <div class="dropdown">
                                          <button class="btn btn-white dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Sign up
                                          </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    @if (Route::has('login'))
                                        <div class="top-right links">
                                            @auth
                                                <a href="{{ url('/home') }}" class="nav-link text-dark">Home</a>
                                            @else
                                                <a href="{{ route('login') }}"class="btn btn-outline-success nav-link text-dark">Login</a><br>

                                                @if (Route::has('register'))
                                                    <a href="{{ route('register') }}"class="btn btn-outline-success nav-link text-dark">Register</a>
                                                @endif
                                            @endauth
                                        </div>
                                    @endif
                                    </div>
                                    </div> 
                              </li>
                        </ul>
                        
                        </div>
                  </nav>
            </header>
            <div style="width: 50rem; margin-top: 4rem;" id="carouselExampleCaptions" class="carousel slide  w-100" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner justify-content-center">
                    <div  style="height: 90vh; width: 50rem; margin-left: -1rem; margin-right: -5rem;" class="col-lg-12 carousel-item active w-100">
                      <img style="width: 85rem;"  id="carousel-header" src="https://www.ochec.org/wp-content/uploads/2019/10/ochec-volunteer.jpg" class="d-block" alt="...">
                      <div class="text-center carousel-caption d-none d-md-block jus">
                        <h5>Volontiyor bo'lishni hohlaysizmi</h5>
                        <p >Hoziroq biz bilan bog'laning</p>
                      </div>
                    </div>
                    <div  style="height: 90vh; width: 50rem;  margin-left: -1rem; margin-right: -5rem;"  class="carousel-item">
                      <img style="width: 85rem;" id="carousel-header" src="https://www.caringseniorservice.com/hubfs/Group%20of%20young%20adults%20wearing%20volunteer%20shirts.jpeg" class="d-block" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <h5 style="margin-right: -36rem;">Volontiyor bo'lishni hohlaysizmi</h5>
                        <p style="margin-right: -36rem;">Hoziroq biz bilan bog'laning</p>
                      </div>
                    </div>
                    <div  style="height: 90vh; width: 50rem;  margin-left: -1rem; margin-right: -5rem;" class="carousel-item">
                      <img style="width: 85rem;" id="carousel-header" src="/img/jump one.jpg" class="d-block" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <h5 style="margin-right: -36rem;">Volontiyor bo'lishni hohlaysizmi</h5>
                        <p style="margin-right: -36rem;">Hoziroq biz bilan bog'laning</p>
                      </div>
                    </div>
                  </div>
                  <a style="color: black;" class="carousel-control-prev text-dark" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon text-dark" aria-hidden="true"></span>
                    <span class="sr-only text-dark">Previous</span>
                  </a>
                  <a class="carousel-control-next text-dark" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only text-dark">Next</span>
                  </a>
                </div>
           
   </section>
        <!-- -------------------------------------------------------------------------------------------------------------------- -->
        <!-- -------------------------------------------------------------------------------------------------------------------- -->
        <!-- ----------------------                     ABOUT ME                      ----------------------------------------------->
        <!-- -------------------------------------------------------------------------------------------------------------------- -->
        <!-- -------------------------------------------------------------------------------------------------------------------- -->
    <!-- <section class="min-vh-100 text-center container p-5">
        <h2>Yaqin oradagi <span class="text-danger">tadbirlar</span></h3>
           
                
              
       
     </section>  -->
    <section class="p-1" id="volunteer-place">
      <h2 style="margin-top: ;" class="text-center mt-5">Volontyorlik yo'nalishlarini <span class="text-danger">tanlang</span></h2>
        
            <div class="d-flex justify-content-center mt-5 mb-5">
                  <div>
                        <div class="card m-3 shadow " style="width: 22rem;">
                              <img style="height: 12rem;" src="https://www.tripsavvy.com/thmb/r2W5Z2TN_PEBOsyyQOIQ5uBcBSc=/1500x1000/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-622300588-5935271b5f9b589eb4946f58.jpg" class="card-img-top" alt="...">
                              <div class="card-body bg-light justify-content-center text-center bg-light">
                                <h3 class="card-title">Keksalarga g'amxo'rlik</h3>
                                <p class="card-text">Keksalarni e'zozlash, g'amxo'rlik va e'tibor ko'rsatish</p>
                                <a href="/home" class="btn btn-outline-primary mt-3">Read more</a>
                              </div>
                        </div>
                        <div class="card m-3 shadow " style="width: 22rem;">
                              <img style="height: 12rem;" src="/img/nur.jpg" class="card-img-top" alt="...">
                              <div class="card-body bg-light justify-content-center text-center">
                              <h3>Tibbiy volontiyorlar</h3>  
                              <h3 class="card-title">Covid-19</h3>
                                <p class="card-text">Pandemiya sharoiti</p>
                                <a href="/home" class="btn btn-outline-primary mt-3">Read more</a>
                              </div>
                        </div>
                  </div>
                  <div>
                        <div class="card m-3 shadow " style="width: 22rem;">
                              <img style="height: 12rem;" src="http://eshche.ru/upload/iblock/ed0/ed0b88133dad4f820908d047969c20a7.jpg" class="card-img-top" alt="...">
                              <div class="card-body bg-light justify-content-center text-center">
                                <h3 class="card-title">Sport & Forumlar</h3>
                                <p class="card-text">Festival, Forum va turli tadbirlardagi tashkilotchi volontiyorlar</p>
                                <a href="/home" class="btn btn-outline-primary mt-3">Read more</a>
                              </div>
                        </div>
                        <div class="card m-3 shadow " style="width: 22rem;">
                              <img style="height: 12rem;" src="https://s3-us-west-2.amazonaws.com/csbc.com/images/Business-Services/compliance-volunteer-or-employee.jpg"
                               class="card-img-top" alt="...">
                              <div class="card-body bg-light justify-content-center text-center">
                                <h3 class="card-title">Mehrli qo'llar</h3>
                                <p>ila</p>
                                <p class="card-text">Mehr ulashamiz</p>
                                <a href="/home" class="btn btn-outline-primary mt-3">Read more</a>
                              </div>
                        </div>
      
                  </div>
            </div>
    </section>
     
      </section>
        <!-- ----------------------                     CHECK MY WORKS               ----------------------------------------------->

      <section id="check-my-works" class=" text-center p-5">
         <div class="container">
            <div>
                  <h1 class="text-dark">Check the works of <span class="text-danger">our volunteers</span> </h2>
             </div>
             <div class="row mt-5">
                <div class="shadow col-lg-4 col-md-6 col-sm-12 img-div mt-5">
                        <img src="https://pbs.twimg.com/media/C77u28DXQAQG_TV.jpg"  alt="" style="width: 100%;  height: 95%; height:100%; border-radius: 15px;" class=" mt-5 img-thumbnail" >
                        <div class="hover flex-column">
                              <div>
                                    <i class="fas fa-feather-alt mb-2"><br>#memory</i> <br>
                              </div>
                              <div class="row mt-2">
                                    <a href="#"><i class="fas fa-link"></i></a>
                                          <button type="button" class="btn mb-5" data-toggle="modal" data-target="#exampleModal">
                                                <i class="fas fa-arrows-alt "></i>
                                          </button>
                                    <a href="#"> <i class="fas fa-share-alt"></i></a>
                              </div>
                        </div>
                </div>
                <div class="shadow col-lg-4 col-md-6 col-sm-12 img-div mt-5">
                  <img src="https://pbs.twimg.com/media/DWqpNxYVMAACgjR.jpg"  alt="" style="width: 100%; min-height: 95%; height:100%; border-radius: 15px;" class=" mt-5 img-thumbnail" >
                  <div class="hover flex-column">
                        <div>
                              <i class="fas fa-feather-alt mb-2"><br>#memory</i> <br>
                        </div>
                        <div class="row mt-2">
                              <a href="#"><i class="fas fa-link"></i></a>
                                    <button type="button" class="btn mb-5" data-toggle="modal" data-target="#exampleModal">
                                          <i class="fas fa-arrows-alt "></i>
                                    </button>
                              <a href="#"> <i class="fas fa-share-alt"></i></a>
                        </div>
                  </div>
                </div>
                <div class="shadow col-lg-4 col-md-6 col-sm-12 img-div mt-5">
                  <img src="https://nevadahumanesociety.org/wp-content/uploads/2018/08/Nevada-Humane-Society-Meet-Our-Staff-1024x729.jpg"  alt="" style="width: 100%; height: 95%; height:100%; border-radius: 15px;" class=" mt-5 img-thumbnail" >
                  <div class="hover flex-column">
                        <div>
                              <i class="fas fa-feather-alt mb-2"><br>#memory</i> <br>
                        </div>
                        <div class="row mt-2">
                              <a href="#"><i class="fas fa-link"></i></a>
                                    <button type="button" class="btn mb-5" data-toggle="modal" data-target="#exampleModal">
                                          <i class="fas fa-arrows-alt "></i>
                                    </button>
                              <a href="#"> <i class="fas fa-share-alt"></i></a>
                        </div>
                  </div>
                </div>
                <div class="shadow col-lg-4 col-md-6 col-sm-12 img-div mt-5">
                  <img src="https://tbdnc.com/wp-content/uploads/IMG_2559.jpg"  alt="" style="width: 100%; height:100%; border-radius: 15px;" class=" mt-5 img-thumbnail" >
                  <div class="hover flex-column">
                        <div>
                              <i class="fas fa-feather-alt mb-2"><br>#memory</i> <br>
                        </div>
                        <div class="row mt-2">
                              <a href="#"><i class="fas fa-link"></i></a>
                                    <button type="button" class="btn mb-5" data-toggle="modal" data-target="#exampleModal">
                                          <i class="fas fa-arrows-alt "></i>
                                    </button>
                              <a href="#"> <i class="fas fa-share-alt"></i></a>
                        </div>
                  </div>
                </div>
                <div class="shadow col-lg-4 col-md-6 col-sm-12 img-div mt-5">
                  <img src="https://tia-ostrova.ru/images/news/c33512e85cb7.jpg"  alt="" style="width: 100%; height:100%; border-radius: 15px;" class=" mt-5 img-thumbnail" >
                  <div class="hover flex-column">
                        <div>
                              <i class="fas fa-feather-alt mb-2"><br>#memory</i> <br>
                        </div>
                        <div class="row mt-2">
                              <a href="#"><i class="fas fa-link"></i></a>
                                    <button type="button" class="btn mb-5" data-toggle="modal" data-target="#exampleModal">
                                          <i class="fas fa-arrows-alt "></i>
                                    </button>
                              <a href="#"> <i class="fas fa-share-alt"></i></a>
                        </div>
                  </div>
                </div>
                <div class="shadow col-lg-4 col-md-6 col-sm-12 img-div mt-5">
                  <img src="https://pbs.twimg.com/media/DtfZs5SWoAAQo_0.jpg:large"  alt="" style="width: 100%; height:100%; border-radius: 15px;" class=" mt-5 img-thumbnail" >
                  <div class="hover flex-column">
                        <div>
                              <i class="fas fa-feather-alt mb-2"><br>#memory</i> <br>
                        </div>
                        <div class="row mt-2">
                              <a href="#"><i class="fas fa-link"></i></a>
                                    <button type="button" class="btn mb-5" data-toggle="modal" data-target="#exampleModal">
                                          <i class="fas fa-arrows-alt "></i>
                                    </button>
                              <a href="#"> <i class="fas fa-share-alt"></i></a>
                        </div>
                  </div>
                </div>
                <div class="shadow col-lg-4 col-md-6 col-sm-12 img-div mt-5">
                  <img src="http://www.ekburg.ru/UserFiles/Storage/ContentPhoto/0/5/84/58466_original.jpg"  alt="" style="width: 100%; height:100%; border-radius: 15px;" class=" mt-5 img-thumbnail" >
                  <div class="hover flex-column">
                        <div>
                              <i class="fas fa-feather-alt mb-2"><br>#memory</i> <br>
                        </div>
                        <div class="row mt-2">
                              <a href="#"><i class="fas fa-link"></i></a>
                                    <button type="button" class="btn mb-5" data-toggle="modal" data-target="#exampleModal">
                                          <i class="fas fa-arrows-alt "></i>
                                    </button>
                              <a href="#"> <i class="fas fa-share-alt"></i></a>
                        </div>
                  </div>
                </div>
                <div class="shadow col-lg-4 col-md-6 col-sm-12 img-div mt-5">
                  <img src="https://avatars.mds.yandex.net/get-znatoki/1540166/2a0000016cc09ca6f7d1f0a07ec0be7cf2d1/w1200"  alt="" style="width: 100%; height:100%; border-radius: 15px;" class=" mt-5 img-thumbnail" >
                  <div class="hover flex-column">
                        <div>
                              <i class="fas fa-feather-alt mb-2"><br>#memory</i> <br>
                        </div>
                        <div class="row mt-2">
                              <a href="#"><i class="fas fa-link"></i></a>
                                    <button type="button" class="btn mb-5" data-toggle="modal" data-target="#exampleModal">
                                          <i class="fas fa-arrows-alt "></i>
                                    </button>
                              <a href="#"> <i class="fas fa-share-alt"></i></a>
                        </div>
                  </div>
                </div>
                <div class="shadow col-lg-4 col-md-6 col-sm-12 img-div mt-5">
                  <img src="https://c0.wallpaperflare.com/preview/491/123/680/crowd-of-people-parading-in-street.jpg"  alt="" style="width: 100%; height:100%; border-radius: 15px;" class=" mt-5 img-thumbnail" >
                  <div class="hover flex-column">
                        <div>
                              <i class="fas fa-feather-alt mb-2"><br>#memory</i> <br>
                        </div>
                        <div class="row mt-2">
                              <a href="#"><i class="fas fa-link"></i></a>
                                    <button type="button" class="btn mb-5" data-toggle="modal" data-target="#exampleModal">
                                          <i class="fas fa-arrows-alt "></i>
                                    </button>
                              <a href="#"> <i class="fas fa-share-alt"></i></a>
                        </div>
                  </div>
                </div>
                <div class="shadow col-lg-4 col-md-6 col-sm-12 img-div mb-5 mt-5">
                  <img src="http://in-dmitrov.ru/upload/resizeproxy/720_/511fb3b3fe774741102e7a5109656d51.jpg?1503060488"  alt="" style="width: 100%; height:100%; border-radius: 15px;" class=" mt-5 img-thumbnail" >
                  <div class="hover flex-column">
                        <div>
                              <i class="fas fa-feather-alt mb-2"><br>#memory</i> <br>
                        </div>
                        <div class="row mt-2">
                              <a href="#"><i class="fas fa-link"></i></a>
                                    <button type="button" class="btn mb-5" data-toggle="modal" data-target="#exampleModal">
                                          <i class="fas fa-arrows-alt "></i>
                                    </button>
                              <a href="#"> <i class="fas fa-share-alt"></i></a>
                        </div>
                  </div>
                </div>
                <div class="shadow col-lg-4 col-md-6 col-sm-12 img-div mb-5 mt-5">
                  <img src="https://ic.pics.livejournal.com/artem_samsonov/28327463/866122/866122_1000.jpg"  alt="" style="width: 100%; height:100%; border-radius: 15px;" class=" mt-5 img-thumbnail" >
                  <div class="hover flex-column">
                        <div>
                              <i class="fas fa-feather-alt mb-2"><br>#memory</i> <br>
                        </div>
                        <div class="row mt-2">
                              <a href="#"><i class="fas fa-link"></i></a>
                                    <button type="button" class="btn mb-5" data-toggle="modal" data-target="#exampleModal">
                                          <i class="fas fa-arrows-alt "></i>
                                    </button>
                              <a href="#"> <i class="fas fa-share-alt"></i></a>
                        </div>
                  </div>
                </div>
                <div class="shadow col-lg-4 col-md-6 col-sm-12 img-div mb-5 mt-5">
                  <img src="https://avatars.mds.yandex.net/get-zen_doc/1874839/pub_5de8cb6a34808223c3a5da41_5de8cbbe5ba2b500adf0b8ad/scale_1200"  alt="" style="width: 100%; height:100%; border-radius: 15px;" class=" mt-5 img-thumbnail" >
                  <div class="hover flex-column">
                        <div>
                              <i class="fas fa-feather-alt mb-2"><br>#memory</i> <br>
                        </div>
                        <div class="row mt-2">
                              <a href="#"><i class="fas fa-link"></i></a>
                                    <button type="button" class="btn mb-5" data-toggle="modal" data-target="#exampleModal">
                                          <i class="fas fa-arrows-alt "></i>
                                    </button>
                              <a href="#"> <i class="fas fa-share-alt"></i></a>
                        </div>
                  </div>
                </div>
               
                </div>
                
              
               
                 
             </div>
         </div>
           <!-- Button trigger modal -->

    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center justify-content-center">
            <h5 class="modal-title text-center" id="exampleModalLabel"><a href="#"><span class="text-danger">#Flowers</span></a></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
             <img class="col-lg-10" src="img/photo-1.jpg" alt="">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Comment <i class="far fa-comments"></i></button>
            <button type="button" class="btn btn-primary">Download <i class="fas fa-arrow-down"></i></button>
          </div>
        </div>
      </div>
    </div>
      </section>
        <!-- ----------------------                    TALK TO ME                    ----------------------------------------------->
      <section class="p-5" id="talk-to-me">
                  <div class="container shadow py-5 px-5">
                        <h2 class="text-center">Talk to <span class="text-danger">us</span></h2>
                        <div class="d-flex justify-content-center align-items-center mx-auto flex-column col-lg-3">
                            <form action="/" method="post" anctype="multipart/form-data">
                            @csrf
                              <input name="name" type="text" class="border-0 bg-light m-2 py-2" style=" padding-left: 3rem; border-radius: 15px; padding-right: 7rem;" placeholder="Full Name ">
                              <input name="phone" type="number" class="border-0 bg-light m-2 py-2" style=" padding-left: 3rem; border-radius: 15px; padding-right: 7rem;" placeholder="Phone Number ">
                              <input name="gmail" type="text" class="border-0 bg-light m-2 py-2" style=" padding-left: 3rem; border-radius: 15px; padding-right: 7rem;" placeholder="Email ">
                              <input name="text" type="text" class="border-0 bg-light m-2" style=" padding-left: 3rem; border-radius: 15px; padding-right: 7rem; padding-bottom: 5rem;" placeholder="Type here">
                              <button class="btn btn-danger px-5 mt-3">Send</button>
                            </form>
                        </div>
                  </div>
      </section>
      


        <!-- ----------------------                JAVASCRIPT LINKS                  ----------------------------------------------->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html> 

