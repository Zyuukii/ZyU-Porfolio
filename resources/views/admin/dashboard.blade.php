<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <title>Admin</title>
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="header">Admin Panel</div>
        <hr>

        <ul>
            <li class="title">
                <p>Dashboard</p>
            </li>

            <!-- Content Management -->
            <li class="content-management">
                <a data-bs-toggle="collapse" href="#contentMenu" class="arrow collapsed">
                    <span><i class="bi bi-folder"></i> Content Management</span>
                    <i class="bi bi-chevron-down small"></i>
                </a>

                <ul class="collapse sub-menu" id="contentMenu">
                    <li><a href="#" class="content"><i class="bi bi-folder2-open">
                            </i>Projects</a></li>

                    <li><a href="#" class="content"><i class="bi bi-person">
                            </i>About Me</a></li>

                    <li><a href="#" class="content"><i class="bi bi-award"></i>
                            </i>Certifications</a></li>
                </ul>
            </li>

            <li class="comms">
                <a href="#" class="sidebar-link">
                    <i class="bi bi-chat-left-text">
                    </i>Communications</a>
            </li>

            <li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="logout-btn">
                        <i class="bi bi-box-arrow-right me-2"></i>Logout
                    </button>
                </form>
            </li>
        </ul>
    </div>
</body>

</html>