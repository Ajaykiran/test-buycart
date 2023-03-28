
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel Menu</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style>
        .item{
            margin-top:15%;
            border: 2px solid black;
            padding: 3%;
        }
	</style>
</head>
<body>

	





   <div class="container">
   <div class="row">
   @foreach($product as $item)
       <div class="col-4">  
       <div class="item">
       <h2>{{$item['name']}}</h2>
       <h3>Price : {{$item['price']}}</h3>
       <h4>Details: {{$item['description']}}</h4>
       <h4>category: {{$item['category']}}</h4>
       <br><br>
       <button class="btn btn-primary">Add to Cart</button>
       <button class="btn btn-success">Buy Now</button>
       
       </div>  
    </div>
    @endforeach
   </div>
   </div>
        
</table>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/esm/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
