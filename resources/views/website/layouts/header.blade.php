
@if(auth()->user())
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <img style="height: 100px;width: 150px" src="{{asset('frontend/grapfood-images/logo.jpeg')}}" alt="">
            </a>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
                <li><a href="#" class="nav-link px-2 link-secondary">Account</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Checkout</a></li>
                <li><a href="#" class="nav-link px-2 link-dark ">Cart</a></li>
            </ul>

            <div class="col-md-3 text-end">
                <a href="{{route('user.logout')}}">
                    <button type="button" class="btn btn-outline-primary me-2">LogOut</button>
                </a>

                <a href="">
                    <button type="button" class="btn btn-primary">MY ACCOUNT</button>
                </a>
            </div>
        </header>
    </div>


@endif

@if(!auth()->user())
<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <img style="height: 100px;width: 150px" src="{{asset('frontend/grapfood-images/logo.jpeg')}}" alt="">
        </a>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="#" class="nav-link px-2 link-dark ">Log in for more information !!!</a></li>
        </ul>

        <div class="col-md-3 text-end">
            <a href="{{route('option.login')}}">
                <button type="button" class="btn btn-outline-primary me-2">Login</button>
            </a>

            <a href="{{route('option.register')}}">
                <button type="button" class="btn btn-primary">Sign-up</button>
            </a>
        </div>
    </header>
</div>
    @endif
