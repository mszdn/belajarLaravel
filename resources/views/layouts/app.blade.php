<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Laravel App')</title>

    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/css/sidebar.css', 'resources/js/app.js'])
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<body>
    <!-- Sidebar -->
    <nav id="sidebar" class="bg-dark text-white vh-100 position-fixed d-flex flex-column p-3">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h5 class="mb-0 text-truncate sidebar-title">My App</h5>
            <button id="sidebarToggle" class="btn btn-sm btn-outline-light border-0" title="Toggle Sidebar">
                <i class="bi bi-list fs-5"></i>
            </button>
        </div>

        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="{{ route('books.index') }}" class="nav-link text-white d-flex align-items-center">
                    <i class="bi bi-book fs-5"></i>
                    <span>Books</span>
                </a>
            </li>
            <li>
                <a href="{{ route('students.index') }}" class="nav-link text-white d-flex align-items-center">
                    <i class="bi bi-people fs-5"></i>
                    <span>Students</span>
                </a>
            </li>
            <li>
                <a href="{{ route('employees.index') }}" class="nav-link text-white d-flex align-items-center">
                    <i class="bi bi-person-badge fs-5"></i>
                    <span>Employees</span>
                </a>
            </li>
        </ul>
    </nav>

    <!-- Content -->
    <div id="content">
        <main class="px-3">
            @yield('content')
        </main>
    </div>
</body>

</html>