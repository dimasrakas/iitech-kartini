<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>

<style>
    @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

    .font-montserrat {
        font-family: "Montserrat", sans-serif;
    }

    :root {
        --dark-1: #08090d;
        --dark-2: #101010;
        --champ-yellow: #fecf00;
    }

    .bg-custom {
        background-color: #291586;
    }

    .bg-dark-1 {
        background-color: var(--dark-1);
    }

    .bg-champ-yellow {
        background-color: var(--champ-yellow);
    }

    .bg-tile-grey {
        background-color: var(--tile-grey);
    }

    .text-dark-1 {
        color: var(--dark-1);
    }

    .text-dark-2 {
        color: var(--dark-2);
    }

    .text-tile-grey {
        color: var(--tile-grey);
    }

    .text-soft-grey {
        color: var(--soft-grey);
    }


    .content-2-1 .btn-outline {
        border: 1px solid #979797;
        color: #979797;
        transition: 0.2s;
    }

    .content-2-1 .btn-outline:hover {
        border: 1px solid #ff7c57;
        color: #ff7c57;
        transition: 0.2s;
    }

    .content-2-1 .btn-fill {
        background-color: #ff7c57;
        border: 1px solid #ff7c57;
        transition: 0.2s;
    }

    .content-2-1 .card-header {
        background-color: #fff7f4;
        border: 1px solid #ff7c57;
    }

    .content-2-1 .text-medium-black {
        color: #121212;
    }

    .content-2-1 .text-gray {
        color: #565656;
    }

</style>
