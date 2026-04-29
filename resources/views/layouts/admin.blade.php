<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | {{ $title ?? 'Data Cafe' }}</title>
    <!-- Include Admin CSS -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <!-- FontAwesome for Icons (Optional, adjust if you prefer SVG) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-logo">
            <div class="logo-icon">FV</div>
            <h2>FIVE</h2>
        </div>
        
        <nav class="sidebar-menu">
            <a href="#" class="menu-item">
                <i class="fa-solid fa-border-all"></i> Dashboard
            </a>
            
            <div class="menu-label">DATA</div>
            
            <a href="{{ route('admin.data_admin') ?? '#' }}" class="menu-item {{ Request::is('admin/data-admin') ? 'active' : '' }}">
                <i class="fa-solid fa-user-tie"></i> ADMIN
            </a>
            <a href="#" class="menu-item">
                <i class="fa-solid fa-list-check"></i> KRITERIA
            </a>
            <a href="{{ route('admin.cafe.index') ?? '#' }}" class="menu-item {{ Request::is('admin/cafe') ? 'active' : '' }}">
                <i class="fa-solid fa-server"></i> DATA CAFE
            </a>
            <a href="#" class="menu-item">
                <i class="fa-solid fa-chart-simple"></i> DATA HASIL
            </a>
            
            <div class="menu-label" style="margin-top: 20px;">SETTING</div>

        </nav>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Topbar -->
        <header class="topbar">
            <div class="admin-profile">
                <span>ADMIN</span>
                <div class="admin-avatar">
                    <img src="https://ui-avatars.com/api/?name=Admin&background=random" alt="Admin Avatar">
                </div>
            </div>
        </header>

        <!-- Page Content -->
        <div class="page-content">
            @yield('content')
        </div>
    </main>

</body>
</html>
