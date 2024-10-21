<!DOCTYPE HTML>
<html>
	<head>
		<title>Display Records</title>
	</head>
	<body>

		<table border="1" cellpadding="10" cellspacing="0" align="center">
			@if (session('status'))
			<tr>
				<td colspan="11" align="center">
					{{ session('status') }}
				</td>
			</tr>
			@endif
			<tr>
				<td>Id</td>
				<td>First Name</td>
				<td>Last Name</td>
				<td>Email</td>
				<td>Password</td>
				<td>Gender</td>
				<td>Address</td>
				<td>City</td>
				<td>Photo</td>
				<td>Hobbies</td>
				<td>Action</td>
			</tr>
			@foreach($register as $row)
			<tr>
				<td>{{ $row->id }}</td>
				<td>{{ $row->firstname }}</td>
				<td>{{ $row->lastname }}</td>
				<td>{{ $row->email }}</td>
				<td>{{ $row->password }}</td>
				<td>{{ $row->gender }}</td>
				<td>{{ $row->address }}</td>
				<td>{{ $row->city }}</td>
				<td>
					@if($row->photo!="")
						<img src="/uploads/{{ $row->photo }}" width="200" />
					@endif
				</td>
				<td>{{ $row->hobbies }}</td>
				<td>
					<a href="/register/edit/{{ $row->id }}">Edit</a>
					<a href="/register/delete/{{ $row->id }}">Delete</a>
				</td>
			</tr>
			@endforeach
		</table>
	</body>
</html>