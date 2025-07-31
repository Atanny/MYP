<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Portfolio') }}</title>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue-router@3.5.3/dist/vue-router.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios@0.21.1/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>
    <div id="app" class="">
        <Navbar-component></Navbar-component>
        <router-view class=""></router-view>
        <!-- Scroll to Top Button -->
        <button id="scrollTopBtn" onclick="scrollToTop()" title="Go to top">
            <i class="fas fa-chevron-up"></i>
        </button>

    </div>
</body>
<style>
    #scrollTopBtn {
        position: fixed;
        bottom: 40px;
        right: 30px;
        z-index: 999;
        font-size: 18px;
        border: none;
        outline: none;
        background-color: #343a40;
        color: white;
        cursor: pointer;
        padding: 12px 16px;
        border-radius: 50%;
        display: none;
        transition: opacity 0.3s;
    }

    #scrollTopBtn:hover {
        background-color: #212529;
    }
</style>
<script>
    // Show button when scrolling down
    window.onscroll = function() {
        const btn = document.getElementById("scrollTopBtn");
        if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
            btn.style.display = "block";
        } else {
            btn.style.display = "none";
        }
    };

    // Smooth scroll to top
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
</script>

</html>
