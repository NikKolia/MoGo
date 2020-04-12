<?php
/*
Template Name: About
*/
?>
<?php get_header(); ?>

<!-- About us -->
<div class="row justify-content-center align-items-center block">
    <div class="col-md-auto">
        <div class="content">
            <p class="kaush font24 dark center">What we do</p>
            <h2 class="montser bold font30 dark center">Story about us</h2>
            <p>
            <hr class="lines"/>
            </p>
            <p class="aboutText center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor
                incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat.</p>
        </div><!-- /.content -->
    </div><!-- /.col-md -->
</div>
</div><!-- /.container -->
<div class="d-flex flex-wrap justify-content-center aboutImg">
    <div class="aboutImg_high">
        <img src="img/about1.jpg" alt="about us image">
    </div><!-- /.aboutImg_img -->
    <div class="aboutImg_img">
        <img src="img/about2.png" alt="about us image">
    </div><!-- /.aboutImg_img -->
    <div class="aboutImg_img">
        <img src="img/about3.png" alt="about us image">
    </div><!-- /.aboutImg_img -->
</div>

<!-- What we do -->
<div class="container">
    <div class="row justify-content-center align-items-center block">
        <div class="col-md-auto content">
            <p class="kaush font24 dark center">Service</p>
            <h2 class="montser bold font30 dark center">What we do</h2>
            <p>
            <hr class="lines"/>
            </p>
            <p class="aboutText center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor
                incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat.</p>
        </div><!-- /.col-md -->
    </div><!-- /.row -->
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-6 block-service">
            <img src="img/service.png" alt="man with photo">
        </div><!-- /.col-md -->
        <div class="col-lg-6 block-service">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link acc-head" type="button" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Photography
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                         data-parent="#accordionExample">
                        <div class="card-body acc-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                            dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed acc-head" type="button" data-toggle="collapse"
                                    data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                creativity
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                         data-parent="#accordionExample">
                        <div class="card-body acc-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                            dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed acc-head" type="button" data-toggle="collapse"
                                    data-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                web design
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                         data-parent="#accordionExample">
                        <div class="card-body acc-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                            dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- /.col-md -->
    </div><!-- /.row -->
</div><!-- /.container -->

<?php get_footer(); ?>