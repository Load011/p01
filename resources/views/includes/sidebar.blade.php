<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a class="brand-link text-center">
        <span class="brand-text font-weight-light ">Absence Here!</span>
    </a>
    <style>
        .sidebar {
            width: 150px;
            position:absolute;
            top: 0;
            left: 0;
            height: 100%;
            background-color: #343a40;
            color: #fff;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar li {
            padding: 10px;
        }

        .sidebar a {
            color: #fff;
            text-decoration: none;
        }

        .content-wrapper {
            margin-left: 250px;
        }


    </style>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">      
                <img
                    class="img-circle elevation-2"
                    alt="User Image"
                />
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add your sidebar menu items here -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('host.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Hosts</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('asset.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-box"></i>
                        <p>Assets</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
