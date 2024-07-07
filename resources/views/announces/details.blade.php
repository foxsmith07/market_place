<x-layout>

    <x-category-cart />

    <div class="container-fluid">
        <div class="mt-3">
            <a href="{{ route('home') }}" class="text-muted text-decoration-none p-3"><i class="fa-solid fa-chevron-left me-3"></i> <span class="fs-5">Back</span></a>
        </div>
        <div class="row">
            <div class="col-12 col-md-7">
                <div class="row d-flex justify-content-evenly align-items-center">
                    <div class="col-3 d-flex flex-column justify-content-around p-2">
                        <img src="http://picsum.photos/100" class="img-fluid rounded-5 m-4 me-0" alt="">
                        <img src="http://picsum.photos/101" class="img-fluid rounded-5 m-4 me-0" alt="">
                        <img src="http://picsum.photos/102" class="img-fluid rounded-5 m-4 me-0" alt="">
                    </div>
                    <div class="col-9 d-flex justify-content-center align-items-center">
                        <img src="http://picsum.photos/400/404" class="img-fluid rounded-5 m-0 w-100" alt="">
                    </div>
                </div>
                
            </div>

            <div class="col-12 col-md-5 px-5">
                <div class="d-flex align-items-center my-5">
                    <h2 class="fw-bold me-5">{{$announce->title}}</h2>
                    <p class="btn btn-info rounded-5 fw-bold text-white fs-3 px-4 m-0">{{$announce->price}}€ </p>
                </div>

                <div class="d-flex align-items-center">
                    <div class="bg-secondary-subtle rounded-5 p-3 me-3">
                        <i class="fa-solid fa-user fs-3"></i>
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                        <p class="text-uppercase m-0">{{$announce->user->name}} </p>
                        <p class="text-muted">{{$announce->user->email}} </p>
                    </div>
                </div>

                <p class="mt-5 fw-bold">Description:</p>
                <p class="mb-5">{{$announce->description}} </p>

                <p class="m-0">Condition: {{$announce->condition}}</p>
                <p>Category: <a href="">{{$announce->category}}</a></p>

                <button class="btn btn-dark rounded-5 px-5 py-2 fs-5 my-4 w-50">Add to cart</button>

            </div>
        </div>
    </div>

</x-layout>