<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">My Portfolio</a>
            <div class="navbar-nav">
                <a class="nav-link active" href="/home">Home</a>
                <a class="nav-link" href="/about">About</a>
                <a class="nav-link" href="/goal">Goal</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="container">
            <h1 class="hero-unit">My Portfolio</h1>
            <h1 class="lead">Hello, I'm Jimuel Jarina</h1>
            <p class="lead">Welcome to my first Laravel Portfolio Application.</p>
        </div>
    </div>
    
    <main class="container mt-5">
        <div class="row text-center">
            <div class="col-md-12">
                <div class="card p-5 shadow-sm">
                    <h2>Web Developer in Training</h2>
                    <p class="text-muted">I am building this project to demonstrate my understanding of Laravel Routes, Controllers, and Blade Templates.</p>
                    <div class="mt-4">
                        <a href="/about" class="btn btn-outline-primary mx-2">Learn More About Me</a>
                        <a href="/goal" class="btn btn-outline-secondary mx-2">View My Hobbies</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="text-center py-4 mt-5 text-muted">
        <p>&copy; 2026 | Laravel Laboratory 2</p>
    </footer>
</body>
</html>