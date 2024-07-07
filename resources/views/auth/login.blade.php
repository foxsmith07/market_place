<x-layout>


    <div class="container-fluid min-vh-100">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 shadow mt-5 p-5 rounded-4">
                <h1 class="fw-bold text-center mb-5">Sign-in</h1>
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email">
                        @error('email')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                        @error('password') 
                            <p class="text-danger">{{$message}}</p> 
                        @enderror
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="remember">
                        <label class="form-check-label" for="remember">Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-primary float-end mt-5">Login</button>
                </form>
            </div>
        </div>
    </div>
    
    
</x-layout>