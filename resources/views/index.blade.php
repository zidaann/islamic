<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? config('app.name') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    @vite('resources/css/app.css')

</head>
<body>

    <div class="cover bg-white pb-5">
        <x-navbar></x-navbar>
        <div class="container px-4">

            {{-- hero --}}
            <div class="hero mt-2">
                <div class="screen w-100">
                    <div class="hero-body">
                        <div class="hero-desc col-md-6 ">
                            <h1>Ayo Kita Tingkatkan Keimanan dan Ketaqwaan  Kepada Allah SWT</h1>
                            <p class="mt-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis dolorum facere cumque voluptatem excepturi officia placeat quam minima expedita. </p>
                        </div>    
                    </div>    
                </div>
            </div>


            {{-- pray times --}}
            <div class="prayer ">
                <div class="row">
                    <div class="title">Prayer Timing</div>
                </div>
                <div class="prayer-body">
                    <div class="col-md-6 pt-5 px-5 prayer-masjid">
                        <h2>Welcome to Masjid</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, incidunt labore. Earum, fuga. Officia eius voluptates tenetur aperiam libero accusantium quia voluptatem ullam hic reprehenderit odit, saepe aliquam? Modi, culpa.</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus quae, ut minus asperiores ad sit et veniam reiciendis officiis. Alias!</p>
                        <a href="#" class="btn border-0">Visit Now</a>
                    </div>
                    <div class="col-md px-6 prayer-time">
                        <div class="prayer-desc col-md">
                            <img src="/img/asr.png"  class="img-fluid">
                            <h3>Name Of Sholat</h3>
                            <div class="prayer-detail">Fajr</div>
                            <div class="prayer-detail">Dhuhur</div>
                            <div class="prayer-detail">Fajr</div>
                            <div class="prayer-detail">Dhuhur</div>
                            <div class="prayer-detail">Dhuhur</div>
                        </div>
                        <div class="prayer-desc col-md">
                            <img src="/img/sajadah.png"  class="img-fluid">
                            <h3>Adzan Time</h3>
                            <div class="prayer-detail">04.13 am</div>
                            <div class="prayer-detail">11.30 am</div>
                            <div class="prayer-detail">04.13 am</div>
                            <div class="prayer-detail">11.30 am</div>
                            <div class="prayer-detail">11.30 am</div>

                        </div>
                        <div class="prayer-desc col-md">
                            <img src="/img/shalat.png"  class="img-fluid">
                            <h3>Prayer Time</h3>
                            <div class="prayer-detail">04.13 am</div>
                            <div class="prayer-detail">11.35 am</div>
                            <div class="prayer-detail">04.13 am</div>
                            <div class="prayer-detail">11.35 am</div>
                            <div class="prayer-detail">11.35 am</div>

                        </div>
                    </div>
                </div>
            </div>


            {{-- foryou --}}
            <div class="foryou">
                <div class="row">
                    <div class="title">For you</div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class=" col-md-10 foryou-body">
                        <div class="col-md-2 mx-4 foryou-detail">
                            <a href="#">
                                <div class="card" >
                                    <div class="card-body">
                                        <img src="/img/quran.png" width="50" class="img-fluid">
                                    <h5 >Al-Quran</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2 mx-4 foryou-detail">
                            <a href="#">
                                <div class="card" >
                                    <div class="card-body">
                                        <img src="/img/praying.png" width="50" class="img-fluid">

                                    <h5 >Doa Harian</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2 mx-4 foryou-detail">
                            <a href="#">
                                <div class="card" >
                                    <div class="card-body">
                                        <img src="/img/ruku.png" width="50" class="img-fluid">

                                    <h5 >Bacaan Shalat</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2 mx-4 foryou-detail">
                            <a href="#">
                                <div class="card" >
                                    <div class="card-body">
                                        <img src="/img/hadits.png" width="50" class="img-fluid">

                                    <h5 >Hadits Nabi</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        {{-- contact --}}
        <div class="contact ">
            <div class="contact-body row d-flex justify-content-center ">
                <div class="col-md-5 info">
                    <div class="info-title">Get in touch</div>
                    <div class="info-subtitle">
                        <h4><i class="bi bi-whatsapp"></i> WhatsApp </h4>
                        <h6>082247782725</h6>
                    </div>
                    <div class="info-subtitle">
                        <h4><i class="bi bi-envelope"></i> Email</h4>
                        <h6>zidanzidane339@gmail.com</h6>
                    </div>
                    <div class="info-subtitle">
                        <h4><i class="bi bi-geo-alt"></i> Location</h4>
                        <h6>Pasuruan, Indonesia</h6>
                    </div>
                </div>
                <div class="col-md-5 contact-detail">
                    <div class="contact-title">Contact</div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore, accusantium.</p>
                    <form class="p-3" autocomplete="off">
                        <div class="mb-3">
                          {{-- <label for="name" class="form-label">Name</label> --}}
                          <input type="text" class="form-control" id="name" placeholder="Enter your name" >
                        </div>
                        <div class="mb-3">
                          {{-- <label for="phone" class="form-label">Phone</label> --}}
                          <input type="text" class="form-control" id="phone" placeholder="Enter your phone number">
                        </div>
                        <div class="mb-3">
                          {{-- <label for="message" class="form-label">Message</label> --}}
                          <textarea class="form-control" placeholder="Enter your message..." id="message"></textarea>
                        </div>                     
                        <button type="submit" class="btn-contact">Send</button>
                      </form>
                </div>

                
            </div>
            
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>