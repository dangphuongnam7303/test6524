<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap 5 Table Example</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Project Category</h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th>
                <a class="btn btn-primary" href="{{ route('project_category.create') }}" role="button">Create</a>
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $item)
        <tr>
            <th scope="row">{{ $item -> id }}</th>
            <td>{{ $item -> name }}</td>
            <td>
                <a class="btn btn-primary" href="{{ route('project_category.edit',$item -> id) }}" role="button">Edit</a>
                <a class="btn btn-primary" href="{{ route('project_category.destroy',$item -> id) }}" role="button">Delete</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
