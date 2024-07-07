<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 px-5">
                <div class="my-3">
                    <a href="{{ route('home') }}" class="text-muted text-decoration-none p-3"><i class="fa-solid fa-chevron-left me-3"></i> <span class="fs-5">Back</span></a>
                </div>

                <h2 class="fw-bold mb-2">Cart Overview</h2>

                <div class="border rounded-4 p-4 d-flex my-3">
                    <img src="https://picsum.photos/150/100" class="rounded-4 me-4" alt="">
                    <div>
                        <p class="fw-bold">Vestito corto colorato</p>
                        <p class="text-muted m-0">Size: M</p>
                        <p class="text-muted m-0">Material: 100% Cotton</p>
                        <p class="text-muted m-0">Condition: Used</p>
                    </div>
    
                    <div class="ms-auto">
                        <i class="fa-solid fa-trash-can"></i>
                        <p class="fw-bold mt-5 fs-5">30 €</p>
                    </div>
                </div>
                
                <div class="border rounded-4 p-4 d-flex my-3">
                    <img src="https://picsum.photos/150/101" class="rounded-4 me-4" alt="">
                    <div>
                        <p class="fw-bold">Zaino Nero per PC</p>
                        <p class="text-muted m-0">Size: 38x21x12</p>
                        <p class="text-muted m-0">Material: Poliester</p>
                        <p class="text-muted m-0">Condition: New</p>
                    </div>
    
                    <div class="ms-auto">
                        <i class="fa-solid fa-trash-can"></i>
                        <p class="fw-bold mt-5 fs-5">10 €</p>
                    </div>
                </div>

                <div class="border rounded-4 p-4 d-flex my-3">
                    <input type="checkbox" class="form-check-input me-3" id="shipping">
                    <label class="form-check-label" for="shipping">
                        <i class="fa-solid fa-truck-fast me-2"></i> Standard Shipping (2-3 business days)
                    </label>
                    <span class="ms-auto fw-bold">10 €</span>
                </div>

                <p class="fw-bold fs-5">Voucher & gift cards</p>

                <div class="border rounded-4 p-4 d-flex my-3">
                    <input type="checkbox" class="form-check-input me-3" id="shipping">
                    <label class="form-check-label" for="shipping">
                        <i class="fa-solid fa-ticket me-2"></i> Apply voucher: <span class="text-body-tertiary ms-3">XXXX-8888-4444-0000</span>
                    </label>
                    <span class="ms-auto fw-bold">10 €</span>
                </div>
                
                <div class="border rounded-4 p-4 d-flex my-3">
                    <input type="checkbox" class="form-check-input me-3" id="shipping" disabled>
                    <label class="form-check-label" for="shipping">
                        <i class="fa-solid fa-ticket me-2"></i> Apply gift card
                    </label>
                </div>

            </div>
            <div class="col-12 col-md-6 bg-body-tertiary p-5">
                <h2 class="fw-bold">Payment details</h2>
                <p class="text-muted mb-5">Fill in your payment details and complete the order.</p>

                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Cardholder name *</label>
                        <input type="text" class="form-control newsletter w-100 py-2 px-3" id="name" placeholder="Name Surname">
                    </div>
                    <div class="mb-3">
                        <label for="card-number" class="form-label">Card number *</label>
                        <input type="number" class="form-control newsletter w-100 py-2 px-3" id="card-number" placeholder="**** **** **** ****">
                    </div>
                    <div class="d-flex">
                        <div class="mb-3 w-50 me-4">
                            <label for="expitarion-date" class="form-label">Expiration date*</label>
                            <input type="number" class="form-control newsletter w-100 py-2 px-3" id="expitarion-date" placeholder="MM/YY">
                        </div>
                        <div class="mb-3 w-50 ms-4">
                            <label for="cvv" class="form-label">CVV *</label>
                            <input type="number" class="form-control newsletter w-100 py-2 px-3" id="cvv" placeholder="***">
                        </div>
                    </div>

                    <h4 class="fw-bold mt-5 mb-3">Summary</h4>
                    <p class="text-muted">Cart <span class=" float-end">40 €</span></p>
                    <p class="text-muted">Standard Shipping <span class=" float-end">10 €</span></p>
                    <p class="text-muted">Voucher <span class="text-danger float-end">- 30 €</span></p>
                    <hr>
                    <p class="fw-bold">Total <span class="float-end">20 €</span></p>

                    <button type="submit" class="btn btn-info bg-info text-white fw-bold fs-4 w-100 newsletter mt-5">Pay 39.00 €</button>
                </form>

            </div>
        </div>
    </div>
</x-layout>
