<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap 5 Form Example</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Create Project Category</h2>
    <form action="{{ route('project_category.update', $item -> id) }}" method="post">
        @csrf
        <div class="mb-3 form-check">
            <label class="form-check-label" for="exampleCheck1">Name</label>
            <input type="text" value="{{ $item -> name }}" class="name" name="name" id="name">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<!-- Bootstrap Bundle with Popper -->
</body>
</html>
