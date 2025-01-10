@include('website.includes.head')
@include('website.includes.header')

<div class="container mt-4">
    <div class="row">
        <div class="col-md-12 text-center mb-md-4 mb-2">
            <h2>Order Details</h2>
        </div>
        <div class="col-md-6 mb-2">
            <div class="p-md-5 p-2 bg-white" style="border-radius: 14px">
                <!-- Product Image -->
                {{-- <img src="{{ asset('uploads/product/images/' . ) }}" --}}
                <img src="{{env('main_url')}}/uploads/product/images/{{$product->product_picture}}"

                    class="img-fluid rounded shadow-sm mb-4"
                    alt="{{ $product->product_picture ? 'Image of ' . $product->keyword : 'Default Product Image' }}">

                <!-- Product Details -->
                <div class="product-details">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th class="text-primary fw-bold">Product Keyword</th>
                                <td  class="text-dark text-truncate" style="max-width: 175px;">{{ $product->keyword }}</td>
                            </tr>
                            <tr>
                                <th class="text-primary fw-bold">Brand Name</th>
                                <td class="text-dark">{{ $product->brand_name }}</td>
                            </tr>
                            <tr>
                                <th class="text-primary fw-bold">Sold By</th>
                                <td class="text-dark">{{ $product->amazon_seller_name }}</td>
                            </tr>
                            <tr>
                                <th class="text-primary fw-bold">Market</th>
                                <td class="text-dark">{{ $product->market->title }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-2">
            <div class="p-md-5 p-2 bg-white" style="border-radius: 14px">
                <form action="{{ url('make-order') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $productId }}">
                    <input type="hidden" name="marketer_id" value="{{ $marketerId }}">
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="name" name="buyer_profile"
                            value="{{ old('buyer_profile') }}" required>
                        @error('buyer_profile')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <!-- Amazon order number -->
                    <div class="mb-3">
                        <label for="amz_order_no" class="form-label">Amazon Order Number <span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="amz_order_no" name="amz_order_no"
                            value="{{ old('amz_order_no') }}" required>
                        @error('amz_order_no')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <label for="customer_email" class="form-label">Your Paypal Email <span
                                class="text-danger">*</span></label>
                        <input type="email" class="form-control" id="customer_email" name="customer_email"
                            value="{{ old('customer_email') }}" required>
                        @error('customer_email')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <label for="orderScreenShot" class="form-label">Order Screenshot <span
                                class="text-danger">*</span></label><br>
                        <input type="file" class="form" id="order_picture" name="order_picture" required>
                        @error('order_picture')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="terms" name="terms" required>
                        <label class="form-check-label" for="terms">I agree to the terms and conditions</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-register">Confirm Now</button>
                </form>
            </div>
        </div>
    </div>
</div>


@include('website.includes.footer')
@include('website.includes.foot')
