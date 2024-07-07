<x-layout>
    @if (session()->has('msg'))
        <div class="alert alert-success alert-dismissible fade show w-25 position-fixed bottom-0 end-0" role="alert">
            <strong>{{session('msg')}}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <x-category-cart />

    <div class="container-fluid mb-5">
        <div class="row flex-column flex-column-reverse flex-md-row">
            <div class="col-12 col-md-7">
                <div class="mt-3">
                    <a href="{{ route('home') }}" class="text-muted text-decoration-none p-3"><i
                            class="fa-solid fa-chevron-left me-3"></i> <span class="fs-5">Back</span></a>
                </div>

                <h2 class="fw-bold ms-5 mt-5 mb-3">Add Images</h3>

                    <div class="row justify-content-center">
                        <div class="col-11 p-4 rounded-5 border border-tertiary">
                            <div class="row">
                                <div class="col-12">
                                    <div class="bg-body-tertiary d-flex flex-column justify-content-center align-items-center p-5 rounded-5"
                                        style="height: 500px">
                                        <div class="rounded-circle bg-secondary-subtle p-5">
                                            <i class="fa-solid fa-images display-3"></i>
                                        </div>
                                        <h3 class="mt-3">Insert images</h3>
                                        <input class="form-control w-50" type="file" id="formFile">
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-evenly p-2">
                                <div class="col bg-body-tertiary rounded-4 m-3 ms-0 mb-0" style="height: 100px"></div>
                                <div class="col bg-body-tertiary rounded-4 m-3 mb-0" style="height: 100px"></div>
                                <div class="col bg-body-tertiary rounded-4 m-3 mb-0" style="height: 100px"> </div>
                                <div class="col bg-body-tertiary rounded-4 m-3 me-0 mb-0" style="height: 100px"></div>
                            </div>
                        </div>
                    </div>

            </div>

            <div class="col-12 col-md-5 bg-body-tertiary p-5">
                <h2 class="fw-bold my-5">Insert your announce</h2>
                <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text"
                            class="form-control newsletter w-100 p-2 px-4 @error('title') is-invalid @enderror"
                            id="title" name="title">
                        @error('title')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number"
                            class="form-control newsletter w-100 p-2 px-4 @error('price') is-invalid @enderror"
                            id="price" name="price">
                        @error('price')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="description"
                            class="form-control newsletter w-100 p-2 px-4 rounded-4 @error('description') is-invalid @enderror" cols="30"
                            rows="5"></textarea>
                        @error('description')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select name="category" id="category"
                            class="form-control newsletter w-100 p-2 px-4 @error('category') is-invalid @enderror">
                            <option selected disabled>Select a category</option>
                            <option value="categoria_1">Categoria 1</option>
                            <option value="categoria_2">Categoria 2</option>
                        </select>
                        @error('category')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="condition" class="form-label">Condition</label>
                        <select name="condition" id="condition"
                            class="form-control newsletter w-100 p-2 px-4 @error('condition') is-invalid @enderror">
                            <option selected disabled class="text-muted">Select a Condition</option>
                            <option value="New">New</option>
                            <option value="Used">Used</option>
                        </select>
                        @error('condition')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>



                    <button type="submit" class="btn btn-primary w-100 rounded-5 mt-4" id="liveToastBtn">Insert
                        Announce</button>
                </form>
            </div>
        </div>
    </div>


</x-layout>
