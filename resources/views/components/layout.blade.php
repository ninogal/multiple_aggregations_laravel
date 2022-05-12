<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body class="bg-dark">
    
    <nav class="nav bg-dark">
        <a class="nav-link active link-warning" aria-current="page" href="{{ route('home') }}">Home</a>
    </nav>

    {{ $slot }}

    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-4">
                <form method="get" action="{{ route('multiple') }}">
                    <div class="mb-3">
                        <select class="form-select"  name="param1">
                            <option selected disabled>Seleziona aggregazione 1</option>
                            <option value="project_id">Project</option>
                            <option value="employee_id">Employee</option>
                            <option value="date">Date</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" name="param2">
                            <option selected disabled>Seleziona aggregazione 2</option>
                            <option value="project_id">Project</option>
                            <option value="employee_id">Employee</option>
                            <option value="date">Date</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-warning">Submit</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>