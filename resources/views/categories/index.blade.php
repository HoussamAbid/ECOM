<!DOCTYPE html>
<html>
<head>
	<style>
		body {
			font-family: Arial, sans-serif;
		}
		
		h1 {
			color: #333;
			margin-bottom: 20px;
		}
		
		table {
			width: 100%;
			border-collapse: collapse;
		}
		
		th, td {
			padding: 10px;
			text-align: left;
			border-bottom: 1px solid #ccc;
		}
		
		th {
			background-color: #f2f2f2;
		}
		
		.btn {
			display: inline-block;
			padding: 6px 12px;
			margin-bottom: 0;
			font-size: 14px;
			font-weight: normal;
			line-height: 1.42857143;
			text-align: center;
			white-space: nowrap;
			vertical-align: middle;
			cursor: pointer;
			border: 1px solid transparent;
			border-radius: 4px;
		}
		
		.btn-danger {
			color: #fff;
			background-color: #d9534f;
			border-color: #d43f3a;
		}
		
		.btn-sm {
			padding: 5px 10px;
			font-size: 12px;
		}
		
		.admin-link {
			color: #337ab7;
			text-decoration: none;
		}
		
		.admin-link:hover {
			text-decoration: underline;
		}
	</style>
</head>
<body>
	<h1>Categories :  <a href="http://127.0.0.1:8000/admin/new-category" class="btn btn-primary">Add Categories</a></h1>
	<table>
		<thead>
		  <tr>
			<th>Category</th>
			<th>Action</th>
		  </tr>
		</thead>
		<tbody>
		  @foreach($categories as $category)
			<tr>
			  <td>{{ $category }}</td>
			  <td>
				<button class="btn btn-primary btn-sm">Edit</button>
				<button class="btn btn-danger btn-sm">Delete</button>
			  </td>
			</tr>
		  @endforeach
		</tbody>
	  </table>
</body>
</html>
