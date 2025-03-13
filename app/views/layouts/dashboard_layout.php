<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/style_dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="container">
        <aside class="sidebar" id="sidebar">
            <div class="sidebar-content">
                <div class="logo-container">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="36" height="36" stroke-width="2"> <path d="M7 7a1 1 0 1 0 2 0a1 1 0 0 0 -2 0"></path> <path d="M13 21l1 -9l7 -6"></path> <path d="M3 11h6l5 1"></path> <path d="M11.5 8.5l4.5 -3.5"></path> </svg> 
                    <span>GymCpic</span>
                </div>
                <nav class="menu">
                    <ul>
                        <li><a href="/rol/index"><i class="fas fa-user-tag"></i><span>Roles</span></a></li>
                        <li><a href="/tipoUsuario/index"><i class="fas fa-users-cog"></i><span>Tipo usuario Gym</span></a></li>
                        <li><a href="/usuario/index"><i class="fas fa-user"></i><span>Usuarios</span></a></li>
                        <li><a href="/centro/index"><i class="fas fa-building"></i><span>Centros</span></a></li>
                        <li><a href="/programa/index"><i class="fas fa-clipboard-list"></i><span>Programas</span></a></li>
                        <li><a href="/grupo/index"><i class="fas fa-users"></i><span>Grupos</span></a></li>
                        <li><a href="/actividad/index"><i class="fas fa-running"></i><span>Actividades</span></a></li>
                        <li><a href="/registroIngreso/index"><i class="fas fa-sign-in-alt"></i><span>Registro Ingreso</span></a></li>
                        <li><a href=""><i class="fas fa-chart-line"></i><span>Control Progreso</span></a></li>
                    </ul>
                </nav>
            </div>
        </aside>
        <main class="main-content" id="main-content">
            <header class="header">
                <button class="menu-toggle" id="menu-toggle"><i class="fas fa-bars"></i></button>
                <h1 class="page-title">Programas</h1>
                <div class="search-container">
                    <input type="text" placeholder="Buscar...">
                    <button><i class="fas fa-search"></i></button>
                </div>
                <div class="header-icons">
                    <button><i class="fas fa-user-circle"></i></button> <!-- Perfil -->
                    <button><i class="fas fa-bell"></i></button> <!-- Notificaciones -->
                    <button><i class="fas fa-moon"></i></button> <!-- Modo oscuro -->
                </div>
            </header>
            <div class="content">
                <?php include_once $content; ?>
            </div>
        </main>
    </div>

    <script src="/js/script.js"></script>
</body>

</html>