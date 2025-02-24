<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel"
    style="display: flex;justify-content: center;position: relative;background-color: lightpink">
    <div class="carousel-indicators" >
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div style="height:400px; width: 900px " class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('frontend/grapfood-images/slide1.jpeg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{asset('frontend/grapfood-images/slide2.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{asset('frontend/grapfood-images/slide3.png')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{asset('frontend/grapfood-images/slide4.jpg')}}" class="d-block w-100" alt="...">
        </div>
    </div>


    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev"
            style="position: absolute; top: 50%; left:0; transform: translateY(-50%); z-index: 10">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next"
            style="position: absolute; top: 50%; right: 0; transform: translateY(-50%); z-index: 10">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

