<x-layout>
    <x-top></x-top>
    <div class="container-fluid showContainer">
        <div class="row d-flex justify-content-evenly">

            <div class="col-2 d-flex flex-column justify-content-evenly align-items-center softwareBoxShow">
                <img class="" src="{{Storage::url('public/icons/HTML.png')}}" alt="">
                <img class="" src="{{Storage::url('public/icons/HTML.png')}}" alt="">
                <img class="" src="{{Storage::url('public/icons/HTML.png')}}" alt="">
            </div>

            <div class="col-8 mt-5 d-flex flex-column justify-content-center align-items-center showCard">

                <div class="video mb-3 bg-dark">
                    <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{Storage::url('public/immagini/presto_screen1.png')}}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{Storage::url('public/immagini/presto_screen2.png')}}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{Storage::url('public/immagini/presto_screen4.png')}}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{Storage::url('public/immagini/presto_screen3.png')}}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                <div class="d-flex">
                    <div class="textShow p-3 text-white">
                        <h5>Descrizione</h5>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus, laudantium maiores nostrum, et quos quas repellendus velit voluptatibus culpa in deserunt, unde ad consequuntur quia! Reiciendis minima asperiores natus eaque?</p>
                    </div>
                </div>
            </div>

            <div class="col-2 d-flex flex-column justify-content-center align-items-center socialBoxShow">
                <a href="https://github.com/MatteoLcr" class="font-white"><i class="bi bi-github"></i></a>
                <a href="https://www.linkedin.com/in/matteo-lucarelli-full-stack-web-developer/" class="font-white"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </div>



</x-layout>