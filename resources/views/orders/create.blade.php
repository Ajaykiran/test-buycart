<html>
    <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
<form method="post" action="{{ route('ord') }}">
    @csrf
    <div class="form-group">
        <label for="customer_name">Customer Name</label>
        <input type="text" class="form-control" id="customer_name" name="customer_name" required>
    </div>
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <textarea class="form-control" id="address" name="address" required></textarea>
    </div>
    <div class="form-group">
        <label for="product">Product</label>
        <input type="text" class="form-control" id="product" name="product" required>
    </div>
    <div class="form-group">
        <label for="total_amount">Total Amount</label>
        <input type="number" class="form-control" id="total_amount" name="total_amount" required>
    </div>
    <button type="submit" class="btn btn-primary">Place Order</button>
</form>
</body>
</html>