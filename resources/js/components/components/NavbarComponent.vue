<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-lg">
        <div class="container-fluid">

            
           
           <img class="navbar-brand shadow-sm bg-white p-2 px-3 rounded border-1 border-secondary" width="70px" src="/storage/logo.png">

            <!-- This content will be hidden on small screens, visible on md and up -->
            <div class="d-none d-md-block">
                <h5 class="fw-bolder text-dark mb-0 mt-3"><b>HIRE ME!</b></h5>
                <p>Explore and Learn about myself</p>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav text-center mx-auto ">
                    
                    

                   
                </ul>

                <div class=" m-1  mt-3 mt-md-0 mt-lg-0">
                        <router-link to="/example" class="btn btn-danger container d-inline-block" active-class="active-link">
                            <a>Contact Me</a>
                        </router-link>
                </div>
            </div>
        </div>
    </nav>
</template>
