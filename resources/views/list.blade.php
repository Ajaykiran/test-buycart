
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel Menu</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style>
        table{
            margin-left: 20%;
        }
		.sidebar {
			position: fixed;
			top: 0;
			left: 0;
			height: 100%;
			width: 250px;
			padding: 15px;
			background-color: #343a40;
			color: #fff;
		}

		.sidebar h3 {
			margin-top: 0;
			margin-bottom: 20px;
		}

		.sidebar .nav-item {
			margin-bottom: 10px;
		}

		.sidebar .nav-link {
			color: #fff;
		}

		.sidebar .nav-link:hover {
			color: #007bff;
		}
	</style>
</head>
<body>

	<div class="sidebar">
		<h3>Admin Panel</h3>
		<ul class="nav flex-column">
			<li class="nav-item">
				<a href="#" class="nav-link active">Dashboard</a>
			</li>
			<li class="nav-item">
            <a href="{{ url('/list') }}" class="nav-link">User Orders</a>
			</li>
			<li class="nav-item">
				<a href="{{ url('/product.product') }}" class="nav-link">Products list</a>
			</li>
			<li class="nav-item">
				<a href="{{ url('/product.proform') }}" class="nav-link">add Product</a>
			</li>
		</ul>
	</div>

    
<table border="1">
<h1>user order</h1>
<tr>
    <td>id</td> 
    <td>customer_name</td>
    <td>email</td>
    <td>address</td>
    <td>product</td>
    <td>total_amount</td>
    <td>operation</td>
</tr>
@foreach ($order as $item) 
<tr>
    <td>{{$item['id']}}</td>
    <td>{{$item['customer_name']}}</td>
    <td>{{$item['email']}}</td>
    <td>{{$item['address']}}</td>
    <td>{{$item['product']}}</td>
    <td>{{$item['total_amount']}}</td>
    <td><a href="{{'delete/'.$item['id']}}">delete</a></td>

</tr>
@endforeach
</table>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/esm/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
