<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal da Transparência Municipal</title>
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <!-- Sidebar -->
    <nav class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <div class="sidebar-logo">
                <i class="fas fa-landmark"></i>
                <h2>Transparência Municipal</h2>
            </div>
            <button class="toggle-btn" id="toggleSidebar">
                <i class="fas fa-chevron-left"></i>
            </button>
        </div>

        <div class="sidebar-menu" id="sidebarMenu">
            <!-- Menu items serão gerados dinamicamente pelo JavaScript -->
        </div>
    </nav>

    <!-- Main Content -->
    <div class="main-content">
        <header>
            <div class="header-title">
                <h1>Portal da Transparência Municipal</h1>
            </div>
            <div class="header-actions">
                <div class="search-bar">
                    <input type="text" id="searchInput" placeholder="Pesquisar informações...">
                    <button><i class="fas fa-search"></i></button>
                    <div id="searchDropdown" class="search-dropdown"></div>
                </div>
                <div class="user-menu">
                    <div class="user-avatar">US</div>
                    <span>Usuário</span>
                </div>
            </div>
        </header>

        <div class="container">
            <!-- Área de Trabalho Dinâmica -->
            <div id="workspace">
                <!-- Conteúdo inicial do dashboard -->
                <div class="dashboard-title">
                    <h2>Dashboard de Transparência</h2>
                    <p>Baseado nas diretrizes do PNTP - Programa Nacional de Transparência Pública</p>
                </div>

                <div class="cards-grid" id="cardsContainer">
                    <!-- Cards serão gerados dinamicamente pelo JavaScript -->
                </div>
            </div>
        </div>

        <footer>
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Contato</h3>
                    <ul>
                        <li><i class="fas fa-phone"></i> (XX) XXXX-XXXX</li>
                        <li><i class="fas fa-envelope"></i> transparencia@municipio.gov.br</li>
                        <li><i class="fas fa-map-marker-alt"></i> Prefeitura Municipal</li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Links Rápidos</h3>
                    <ul>
                        <li><a href="mapa/mapa.php"><i class="fas fa-sitemap"></i> Mapa do Site</a></li>
                        <li><a href="#">Lei de Acesso à Informação</a></li>
                        <li><a href="#">Portal da Transparência Federal</a></li>
                        <li><a href="#">Tribunal de Contas</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Legislação</h3>
                    <ul>
                        <li><a href="#">Lei Complementar nº 101/2000 (LRF)</a></li>
                        <li><a href="#">Lei nº 12.527/2011 (LAI)</a></li>
                        <li><a href="#">Lei nº 13.460/2017</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-radar">
                <a href="https://radardatransparencia.atricon.org.br/" target="_blank" rel="noopener noreferrer">
                    <img src="assets/logo-radar.png" alt="Radar da Transparência" style="height: 150px;">
                    <span>Radar da Transparência</span>
                </a>
            </div>
            <div class="copyright">
                &copy; 2023 Prefeitura Municipal. Todos os direitos reservados.
            </div>
        </footer>
    </div>

    <script src="js/dashboard.js"></script>
</body>

</html>
