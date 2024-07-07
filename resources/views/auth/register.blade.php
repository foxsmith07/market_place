<x-layout>


    <div class="container-fluid min-vh-100">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 shadow mt-5 p-5 rounded-4">
                <h1 class="fw-bold text-center mb-5">Sign-up</h1>
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Username</label>
                        <input type="name" class="form-control @error('name') is-invalid @enderror" id="name" name="name">
                        @error('name')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
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
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation">
                        @error('password_confirmation') 
                            <p class="text-danger">{{$message}}</p> 
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-warning float-end mt-5">Register</button>
                </form>
            </div>
        </div>
    </div>
    
    
</x-layout>