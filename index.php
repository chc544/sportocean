<?php include 'includes/top.php';?>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/frontimg1.jpg" class="d-block w-100 front-img" alt="...">
                <div class="carousel-caption d-block">
                    <h1>We care about the ocean</h1>
                    <h5 class="d-md-block d-none">Hope you do too... Check out our "Who are we?" section to see how we got started.</h5>
                    <a href="about.php"><button type="button" class="btn btn-outline-light mt-3">See more</button></a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/frontimg2.jpg" class="d-block w-100 front-img" alt="...">
                <div class="carousel-caption d-block">
                    <h1>New and exciting products</h1>
                    <h5 class="d-md-block d-none">We are adding new products every day! To see all of them go to our shop.</h5>
                    <a href="shop.php"><button type="button" class="btn btn-outline-light mt-3">See more</button></a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
<div class="container">
    <h2 style="text-align: center">Featured items</h2>
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12 gy-4">
            <div class="card" style="width: 100%;">
                <img src="img/dumbbell2.jpg" class="card-img-top" alt="Waterbottle - Navy blue">
                <div class="card-body">
                    <h5 class="card-title">5kg Dumbbell - Navy Blue</h5>
                    <p class="card-text">5kg Dumbbell, with our recognizable logo.</p>

                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item mt-3">14.99 €<br><a href="shop.php" class="btn btn-primary mt-3 mb-2">Go to our shop!</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 gy-4">
            <div class="card" style="width: 100%;">
                <img src="img/yogaball3.jpg" class="card-img-top" alt="Waterbottle - Navy blue">
                <div class="card-body">
                    <h5 class="card-title">Yogaball - Gray</h5>
                    <p class="card-text">High quality yoga ball.</p>

                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item mt-3">19.99 €<br><a href="shop.php" class="btn btn-primary mt-3 mb-2">Go to our shop!</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 gy-4">
            <div class="card" style="width: 100%;">
                <img src="img/vandflaske3.jpg" class="card-img-top" alt="Waterbottle - Navy blue">
                <div class="card-body">
                    <h5 class="card-title">Waterbottle - Navy Blue</h5>
                    <p class="card-text">Waterbottle for all your waterbottle needs!</p>

                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item mt-3">9.99 €<br><a href="shop.php" class="btn btn-primary mt-3 mb-2">Go to our shop!</a></li>
                </ul>
            </div>
        </div>

    </div>

</div>

<?php include 'includes/bottom.php';?>