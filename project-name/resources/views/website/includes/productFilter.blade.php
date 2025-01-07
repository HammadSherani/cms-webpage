<div class="filter-form">
    <h4 class="text-center">Product Filter</h4>
    <form action="#" method="GET">
        <!-- Product ID -->
        <div class="mb-3">
            <label for="product_id" class="form-label">Product ID</label>
            <input type="text" class="form-control" id="product_id" name="product_id" placeholder="Enter Product ID">
        </div>

        <!-- Keyword -->
        <div class="mb-3">
            <label for="keyword" class="form-label">Keyword</label>
            <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Enter keyword">
        </div>

        <!-- Category -->
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" id="category" name="category">
                <option selected disabled>Select Category</option>
                <option value="electronics">Electronics</option>
                <option value="fashion">Fashion</option>
                <option value="home">Home</option>
                <option value="beauty">Beauty</option>
            </select>
        </div>

        <!-- Markets -->
        <div class="mb-3">
            <label for="markets" class="form-label">Markets</label>
            <select class="form-select" id="markets" name="markets">
                <option selected disabled>Select Market</option>
                <option value="us">United States</option>
                <option value="uk">United Kingdom</option>
                <option value="de">Germany</option>
                <option value="fr">France</option>
            </select>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary w-100">Apply Filter</button>
    </form>
</div>