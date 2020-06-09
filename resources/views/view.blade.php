<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        table {
          border-collapse: collapse;
          border-spacing: 0;
          width: 100%;
          border: 1px solid #ddd;
          padding-left: 30px;
        }

        th, td {
          text-align: left;
          padding: 8px;
        }

        tr:nth-child(even){background-color: #f2f2f2}
    </style>
</head>
<body><br><br>
    <div class="container" style="overflow-x:auto;">
        <button onclick="location.href = '/form';" class="btn btn-info" style="float: right;">Add</button><br><br>
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile Number</th>
                <th>Action</th>
            </tr>
            @foreach($forms as $form)
            <tr>
                <td>{{ $form->name }}</td>
                <td>{{ $form->email }}</td>
                <td>{{ $form->mobile_number }}</td>
                <td>
                    <a href="{{ url('view/'.$form->id.'/edit') }}" class="btn btn-info">Edit</a>
                    <a href="{{ url('view/'.$form->id.'/delete') }}" onclick="return confirm('Are you sure,You want to delete this')" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
