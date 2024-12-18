<div class="col-12 d-flex justify-content-center align-items-center linksContainer">

    <button class="topBtn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">WORKS</button>
    <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
        <div class="offcanvas-header">
            <!-- <h5 class="offcanvas-title" id="offcanvasTopLabel">Offcanvas top</h5> -->
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body mt-4 d-flex justify-content-center ">

            <div class="Box1">
                <h3>E-commerce</h3>
                <div class="d-flex flex-column justify-content-center align-items-start itemBox1">

                    <button id="open-modal-soundstorm" class="btnItemBox d-flex justify-content-center align-items-center">
                        <h5 class="ms-1 mt-2">SoundStorm</h5>
                    </button>

                    <button id="openModalPresto" class="btnItemBox d-flex justify-content-center align-items-center">
                        <h5 class="ms-1">Presto</h5>
                    </button>

                    <button id="open-modal-maniac" class="btnItemBox d-flex justify-content-center align-items-center">
                        <h5 class="ms-1">Maniac</h5>
                    </button>

                    <button id="open-modal-openai" class="btnItemBox d-flex justify-content-center align-items-center">
                        <h5 class="ms-1">Open-Ai</h5>
                    </button>

                </div>
            </div>

            <div class="Box2">
                <h3>Landingpage</h3>
                <div class="d-flex flex-column justify-content-evenly align-items-start itemBox2">

                    <button id="open-modal-menu" class="btnItemBox d-flex justify-content-center align-items-center">
                        <h5 class="ms-1 mt-2">Yococho Menù</h5>
                    </button>

                    <button id="open-modal-white" class="btnItemBox d-flex justify-content-center align-items-center">
                        <h5 class="ms-1 mt-2">White</h5>
                    </button>

                    <button id="open-modal-red" class="btnItemBox d-flex justify-content-center align-items-center">
                        <h5 class="ms-1 mt-2">Red</h5>
                    </button>

                </div>
            </div>

            <div class="Box3">
                <h3>Arcade</h3>
                <div class="d-flex flex-column justify-content-evenly align-items-start itemBox3">
                    <a href="">
                        <h5 class="ms-3 mt-2">Sasso Carta Forbice</h5>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <button class="topBtn2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop1" aria-controls="offcanvasTop">CONTACTS </button>
    <div class="offcanvas offcanvas-top " tabindex="-1" id="offcanvasTop1" aria-labelledby="offcanvasTopLabel">
        <div class="offcanvas-header">
            <!-- <h5 class="offcanvas-title" id="offcanvasTopLabel">Offcanvas top</h5> -->
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body d-flex justify-content-center align-items-center">

            <div class="mailBoxContainer d-flex flex-column me-5">
                <form method="POST" action="{{route('send_email')}}">
                    @csrf
                    <div class="d-flex">
                        <div class="me-3 mb-2">
                            <label for="name" class="form-label formTxt">Name</label>
                            <input type="text" name="name" class="form-control" id="mail">
                        </div>
                        <div>
                            <label for="email" class="form-label formTxt">E-mail</label>
                            <input type="email" name="email" class="form-control" id="userEmail">
                        </div>
                    </div>
                    <div>
                        <label for="userText" class="form-label formTxt">Message</label>
                        <textarea name="message" class="form-control mb-3" cols="30" rows="2" id=""></textarea>
                    </div>
                    <button type="submit" class="cardBtn">Send</button>
                </form>
            </div>

            <div class="socialBoxContainer ms-5 bg-">
                <div class="dflex flex-column ms-5">
                    <h5 class="text-white">Social</h5>
                    <a href="https://github.com/MatteoLcr" class="font-white me-3"><i class="bi bi-github"></i></a>
                    <a href="https://www.linkedin.com/in/matteo-lucarelli-full-stack-web-developer/" class="font-white "><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

        </div>
    </div>


    



</div>