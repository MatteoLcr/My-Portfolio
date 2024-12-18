<x-layout>

    <div class="container-fluid mainCont">

        <div class="row headContent">
            <x-top></x-top>

            <div class="col-12 d-flex justify-content-center w-100" style="height: 80px; width: 400px;">
                @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif
            </div>


            <div class="col-12 txtContainer ms-5">
                <div class="text1 d-flex justify-content-center align-items-center">
                    <h3 class="text1-1 me-5">MATTEO LUCARELLI</h3>
                    <h3 class="text1-2 me-2 fw-bold"> < </h3>
                    <h3 id="element" class="text1-3 me-2"></h3>
                     <!--LOGICA TYPED.JS  -->
                    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
                    <script>
                        var typed = new Typed('#element', {
                            strings: ['web developer &amp; designer'],
                            typeSpeed: 80,
                        });
                    </script>
                    <!-- FINE LOGICA TYPED.JS -->
                    <h3 class="text1-4 fw-bold">/></h3>
                </div>
                <h2 class="text2">PORTFOLIO</h2>
            </div>

        </div>


        <div class="row mt-5">
            <div class="col-12 mt-5">

                <div class="wrapper">
                    <div class="item item1"><img class="" src="{{Storage::url('public/icons/HTML.png')}}" alt=""></div>
                    <div class="item item2"><img class="" src="{{Storage::url('public/icons/CSS.png')}}" alt=""></div>
                    <div class="item item3"><img class="" src="{{Storage::url('public/icons/JS.png')}}" alt=""></div>
                    <div class="item item4"><img class="" src="{{Storage::url('public/icons/LARAVEL.png')}}" alt=""></div>
                    <div class="item item5"><img class="" src="{{Storage::url('public/icons/REACT2.png')}}" alt=""></div>
                    <div class="item item6"><img class="" src="{{Storage::url('public/icons/PS.png')}}" alt=""></div>
                    <div class="item item7"><img class="" src="{{Storage::url('public/icons/AI.png')}}" alt=""></div>
                    <div class="item item8"><img class="" src="{{Storage::url('public/icons/AE.png')}}" alt=""></div>
                </div>

            </div>
        </div>










        <div class="container d-none">
            <div class="row justify-content-center align-items-center cardContainer">

                <div class="col-4 m-2 cardWelcome">
                    <img class="mb-2" src="{{Storage::url('public/immagini/img1.png')}}" alt="">
                    <h5>Presto.it</h5>
                    <p>sito di e-commerce</p>
                    <a href="{{route('show.presto')}}"><button class="cardBtn">Guarda di più</button></a>
                </div>
                <div class="col-4 m-2 cardWelcome">
                    <img class="bg-dark" src="" alt="">
                    <h5>title</h5>
                    <p>description</p>
                    <a href="{{route('show.presto')}}"><button class="cardBtn">Guarda di più</button></a>
                </div>
                <div class="col-4 m-2 cardWelcome">
                    <img class="bg-dark" src="" alt="">
                    <h5>title</h5>
                    <p>description</p>
                    <a href="{{route('show.presto')}}"><button class="cardBtn">Guarda di più</button></a>
                </div>

                <div class="col-4 m-2 cardWelcome">
                    <img class="bg-dark" src="" alt="">
                    <h5>title</h5>
                    <p>description</p>
                    <a href="{{route('show.presto')}}"><button class="cardBtn">Guarda di più</button></a>
                </div>
                <div class="col-4 m-2 cardWelcome">
                    <img class="bg-dark" src="" alt="">
                    <h5>title</h5>
                    <p>description</p>
                    <a href="{{route('show.presto')}}"><button class="cardBtn">Guarda di più</button></a>
                </div>
                <div class="col-4 m-2 cardWelcome">
                    <img class="bg-dark" src="" alt="">
                    <h5>title</h5>
                    <p>description</p>
                    <a href="{{route('show.presto')}}"><button class="cardBtn">Guarda di più</button></a>
                </div>

            </div>
        </div>





    </div>



</x-layout>