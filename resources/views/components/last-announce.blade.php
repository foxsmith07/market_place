<div class="container-fluid my-5">
    <h4 class="fw-bold text-center fs-2">Last Announces</h4>
    <div class="row">

        @forelse ($announces as $announce)
            <a href="{{route('show', compact('announce'))}}" class="col-2 m-4 text-decoration-none">
                <div class="card border-0 p-0" style="width: 18rem;">
                    <img src="https://picsum.photos/200/40{{$loop->iteration}}" class="card-img-top rounded-4" height="350" alt="...">
                    <div class="card-body">
                        <p class="card-text text-muted">{{$announce->title}}</p>
                        <p class="card-text fw-bold">{{$announce->price}}€</p>
                    </div>
                </div>
            </a>
            
        @empty
            <h5>Nessun Articolo al momento...</h5>
        @endforelse

    </div>
</div>
