<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=Lexend+Deca:wght@100..900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @vite('resources/css/app.css', 'resources/js/app.js')
</head>

<body>

    <div class="container-fluid p-0 layoutContainer position-relative">

        <div class="p-3 d-none boxModale" id="modalPresto">
            <button id="closeModalPresto" class="">
                <i class="bi bi-x-square-fill"></i>
            </button>
            <div class="InternoModale">
                <h1 class="text-white">ciao a tutti</h1>
            </div>
        </div>

        <div class="p-3 d-none boxModale1" id="modal-soundstorm">
            <button id="close-modal-soundstorm" class="">
                <i class="bi bi-x-square-fill"></i>
            </button>
        </div>

        <div class="p-3 d-none boxModale" id="modal-maniac">
            <button id="close-modal-maniac" class="">
                <i class="bi bi-x-square-fill"></i>
            </button>
        </div>

        <div class="p-3 d-none boxModale" id="modal-openai">
            <button id="close-modal-openai" class="">
                <i class="bi bi-x-square-fill"></i>
            </button>
        </div>

        <!-- LANDINGPAGE -->
        <div class="p-3 d-none boxModale" id="modal-menu">
            <button id="close-modal-menu" class="">
                <i class="bi bi-x-square-fill"></i>
            </button>
        </div>

        <div class="p-3 d-none boxModale" id="modal-white">
            <button id="close-modal-white" class="">
                <i class="bi bi-x-square-fill"></i>
            </button>
        </div>

        <div class="p-3 d-none boxModale" id="modal-red">
            <button id="close-modal-red" class="">
                <i class="bi bi-x-square-fill"></i>
            </button>
        </div>

        {{ $slot}}


    </div>

    <x-footer></x-footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    <script>
        const openModalBtnPresto = document.querySelector('#openModalPresto');
        const closeModalBtnPresto = document.querySelector('#closeModalPresto');
        const modal = document.querySelector('#modalPresto');

        openModalBtnPresto.addEventListener('click', openModalPresto);
        closeModalBtnPresto.addEventListener('click', closeModalPresto);

        function openModalPresto() {
            console.log('apro modale');
            modal.classList.remove('d-none');
        }

        function closeModalPresto() {
            console.log('chiudo modale');
            modal.classList.add('d-none');
        }


        const openModalBtnSoundstorm = document.querySelector('#open-modal-soundstorm');
        const closeModalBtnSoundstorm = document.querySelector('#close-modal-soundstorm');
        const modalSoundstorm = document.querySelector('#modal-soundstorm');

        openModalBtnSoundstorm.addEventListener('click', openModalSoundstorm);
        closeModalBtnSoundstorm.addEventListener('click', closeModalSoundstorm);

        function openModalSoundstorm() {
            console.log('apro modale');
            modal.classList.remove('d-none');
        }

        function closeModalSoundstorm() {
            console.log('chiudo modale');
            modal.classList.add('d-none');
        }


        const openModalBtnManiac = document.querySelector('#open-modal-maniac');
        const closeModalBtnManiac = document.querySelector('#close-modal-maniac');
        const modalManiac = document.querySelector('#modal-maniac');

        openModalBtnManiac.addEventListener('click', openModal);
        closeModalBtnManiac.addEventListener('click', closeModal);

        function openModal() {
            console.log('apro modale');
            modal.classList.remove('d-none');
        }

        function closeModal() {
            console.log('chiudo modale');
            modal.classList.add('d-none');
        }


        const openModalBtnOpenai = document.querySelector('#open-modal-openai');
        const closeModalBtnOpenai = document.querySelector('#close-modal-openai');
        const modalOpenai = document.querySelector('#modal-openai');

        openModalBtnOpenai.addEventListener('click', openModal);
        closeModalBtnOpenai.addEventListener('click', closeModal);

        function openModal() {
            console.log('apro modale');
            modal.classList.remove('d-none');
        }

        function closeModal() {
            console.log('chiudo modale');
            modal.classList.add('d-none');
        }

        // LANDINGPAGE
        const openModalBtnMenu = document.querySelector('#open-modal-menu');
        const closeModalBtnMenu = document.querySelector('#close-modal-menu');
        const modalMenu = document.querySelector('#modal-menu');

        openModalBtnMenu.addEventListener('click', openModal);
        closeModalBtnMenu.addEventListener('click', closeModal);

        function openModal() {
            console.log('apro modale');
            modal.classList.remove('d-none');
        }

        function closeModal() {
            console.log('chiudo modale');
            modal.classList.add('d-none');
        }


        const openModalBtnWhite = document.querySelector('#open-modal-white');
        const closeModalBtnWhite = document.querySelector('#close-modal-white');
        const modalWhite = document.querySelector('#modal-white');

        openModalBtnWhite.addEventListener('click', openModal);
        closeModalBtnWhite.addEventListener('click', closeModal);

        function openModal() {
            console.log('apro modale');
            modal.classList.remove('d-none');
        }

        function closeModal() {
            console.log('chiudo modale');
            modal.classList.add('d-none');
        }


        const openModalBtnRed = document.querySelector('#open-modal-red');
        const closeModalBtnRed = document.querySelector('#close-modal-red');
        const modalRed = document.querySelector('#modal-red');

        openModalBtnRed.addEventListener('click', openModal);
        closeModalBtnRed.addEventListener('click', closeModal);

        function openModal() {
            console.log('apro modale');
            modal.classList.remove('d-none');
        }

        function closeModal() {
            console.log('chiudo modale');
            modal.classList.add('d-none');
        }
    </script>





</body>

</html>