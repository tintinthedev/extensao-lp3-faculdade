// Dados dos menus baseados na Tabela 2 do PNTP
const menuItems = [
    {
        id: 1,
        title: "Informações Prioritárias",
        icon: "fas fa-star",
        submenus: ["Informações essenciais", "Dados críticos", "Indicadores principais"]
    },
    {
        id: 2,
        title: "Informações Institucionais",
        icon: "fas fa-university",
        submenus: ["Estrutura organizacional", "Competências", "Endereços e contatos"]
    },
    {
        id: 3,
        title: "Receita",
        icon: "fas fa-money-bill-wave",
        submenus: ["Receitas orçamentárias", "Receitas extraorçamentárias", "Previsão e arrecadação"]
    },
    {
        id: 4,
        title: "Despesa",
        icon: "fas fa-file-invoice-dollar",
        submenus: ["Despesas orçamentárias", "Despesas extraorçamentárias", "Empenho, liquidação e pagamento"]
    },
    {
        id: 5,
        title: "Convênios e Transferências",
        icon: "fas fa-handshake",
        submenus: ["Convênios celebrados", "Transferências voluntárias", "Prestação de contas"]
    },
    {
        id: 6,
        title: "Recursos Humanos",
        icon: "fas fa-users",
        submenus: ["Quadro de servidores", "Remuneração", "Concursos públicos"]
    },
    {
        id: 7,
        title: "Diárias",
        icon: "fas fa-plane",
        submenus: ["Solicitações de diárias", "Valores pagos", "Destino e finalidade"]
    },
    {
        id: 8,
        title: "Licitações",
        icon: "fas fa-gavel",
        submenus: ["Editais publicados", "Resultados", "Pregões eletrônicos"]
    },
    {
        id: 9,
        title: "Contratos",
        icon: "fas fa-file-contract",
        submenus: ["Relação de contratos", "Fiscais de contratos", "Ordem cronológica"],
        module: "contratos"
    },
    {
        id: 10,
        title: "Obras",
        icon: "fas fa-hard-hat",
        submenus: ["Obras em andamento", "Obras concluídas", "Licitações de obras"]
    },
    {
        id: 11,
        title: "Planejamento e Prestação de Contas",
        icon: "fas fa-chart-line",
        submenus: ["RGF", "Plano Plurianual", "Lei de Diretrizes Orçamentárias", "Lei Orçamentária Anual"],
        module: "planejamento"
    },
    {
        id: 12,
        title: "SIC",
        icon: "fas fa-info-circle",
        submenus: ["Serviço de Informação ao Cidadão", "Solicitações de informação", "Estatísticas do SIC"]
    },
    {
        id: 13,
        title: "Acessibilidade",
        icon: "fas fa-universal-access",
        submenus: ["Declaração de acessibilidade", "Recursos de acessibilidade", "Formulário de contato"]
    },
    {
        id: 14,
        title: "Ouvidoria",
        icon: "fas fa-headset",
        submenus: ["Registro de manifestações", "Estatísticas da ouvidoria", "Canais de atendimento"]
    },
    {
        id: 15,
        title: "LGPD e Governo Digital",
        icon: "fas fa-shield-alt",
        submenus: ["Política de privacidade", "Termos de uso", "Governo digital"]
    },
    {
        id: 16,
        title: "Renúncia de Receita",
        icon: "fas fa-hand-holding-usd",
        submenus: ["Isenções fiscais", "Incentivos tributários", "Impacto orçamentário"]
    },
    {
        id: 17,
        title: "Emendas parlamentares",
        icon: "fas fa-file-signature",
        submenus: ["Emendas impositivas", "Execução das emendas", "Prestação de contas"]
    },
    {
        id: 18,
        title: "Saúde",
        icon: "fas fa-heartbeat",
        submenus: ["Recursos aplicados", "Serviços prestados", "Indicadores de saúde"]
    },
    {
        id: 19,
        title: "Educação",
        icon: "fas fa-graduation-cap",
        submenus: ["Recursos aplicados", "Indicadores educacionais", "Programas e projetos"]
    },
    {
        id: 20,
        title: "Atividades Finalísticas",
        icon: "fas fa-tasks",
        submenus: ["Poder Legislativo", "Composição da Casa", "Leis e atos infralegais"]
    }
];

// Função para carregar módulo na área de trabalho
function loadModule(moduleName, submenu = null, pushState = true) {
    const workspace = document.getElementById('workspace');
    
    // Mostrar loading
    workspace.innerHTML = `
        <div class="loading-container" style="display: flex; justify-content: center; align-items: center; height: 400px;">
            <div style="text-align: center;">
                <i class="fas fa-spinner fa-spin fa-3x" style="color: var(--primary-color); margin-bottom: 1rem;"></i>
                <p>Carregando ${submenu || moduleName}...</p>
            </div>
        </div>
    `;
    
    // Atualizar a URL se necessário
if (pushState) {
    let newPath = "../";

    if (submenu === 'RGF') newPath += 'rgf';
    else if (moduleName === 'contratos' && submenu === 'Relação de contratos') newPath += 'contratos';
    else if (moduleName === 'contratos' && submenu === 'Fiscais de contratos') newPath += 'fiscais-contratos';
    else if (moduleName === 'contratos' && submenu === 'Ordem cronológica') newPath += 'ordem-cronologica';
    else if (moduleName === 'acessibilidade') newPath += 'acessibilidade';
    else if (moduleName === 'informações institucionais' && submenu === 'Estrutura organizacional') newPath += 'estrutura-organizacional';
    else if (moduleName === 'informações institucionais' && submenu === 'Competências') newPath += 'competencias';

    else if (path === 'competencias') {
    loadModule('informações institucionais', 'Competências', false);
    setActiveMenuItemByTitle('Informações Institucionais');
}

    if (newPath !== window.location.pathname) {
        history.pushState({ module: moduleName, submenu: submenu }, "", newPath);
    }
}



    // Simular carregamento do módulo
    setTimeout(() => {
        switch(moduleName) {
            case 'contratos':
                if (submenu === 'Relação de contratos') {
                    loadContratosModule(moduleName, submenu);
                } else if (submenu === 'Fiscais de contratos') {
                    loadFiscaisContratosModule(moduleName, submenu);
                } else if (submenu === 'Ordem cronológica') {
                    loadOrdemCronologicaModule(moduleName, submenu);
                } else {
                    loadDefaultModule(moduleName, submenu);
                }
                break;
            case 'informações institucionais':
                if (submenu === 'Estrutura organizacional') {
                    loadEstruturaModule(moduleName, submenu);
    
                } else if (submenu === 'Competências') {
                    loadCompetenciasModule(moduleName, submenu); // 🔥 AQUI

                } else {
                    loadDefaultModule(moduleName, submenu);
                }
                break;    
            case 'planejamento':
                if (submenu === 'RGF') {
                    loadRGFModule(moduleName, submenu);
                } else {
                    loadDefaultModule(moduleName, submenu);
                }
                break;
            case 'acessibilidade':
                loadDefaultModule(moduleName, submenu);
                break;
            default:
                loadDefaultModule(moduleName, submenu);
        }
    }, 1000);
}

// Função auxiliar para gerar Breadcrumbs (Item 13.2)
function getBreadcrumbsHTML(moduleName, submenu = null) {
    const item = menuItems.find(i => i.module === moduleName || i.title.toLowerCase() === moduleName.toLowerCase());
    const displayTitle = item ? item.title : moduleName;
    
    return `
        <nav class="breadcrumb" aria-label="Trilha de navegação">
            <a href="#" onclick="loadDashboard(); return false;">Início</a>
            <i class="fas fa-chevron-right separator"></i>
            <span class="${!submenu ? 'active' : ''}">${displayTitle}</span>
            ${submenu ? `
                <i class="fas fa-chevron-right separator"></i>
                <span class="active">${submenu}</span>
            ` : ''}
        </nav>
    `;
}

// Função para carregar o módulo de contratos
function loadContratosModule(moduleName, submenu) {
    const workspace = document.getElementById('workspace');
    
    // Criar iframe para carregar o PHP
    workspace.innerHTML = `
        ${getBreadcrumbsHTML(moduleName, submenu)}
        <div class="module-header">
            <h2><i class="fas fa-file-contract"></i> Relação de Contratos</h2>
            <p>Lista completa de contratos do município</p>
        </div>
        <div class="module-content">
            <iframe src="listacontratos/contratos.php" 
                    style="width: 100%; min-height: 800px; border: none; border-radius: 8px;"
                    onload="this.style.height = (this.contentWindow.document.body.scrollHeight + 50) + 'px';">
            </iframe>
        </div>
    `;
}

// Função para carregar o módulo de estrutura organizacional
function loadEstruturaModule(moduleName, submenu) {
    const workspace = document.getElementById('workspace');
    
    workspace.innerHTML = `
        ${getBreadcrumbsHTML(moduleName, submenu)}
        <div class="module-header">
            <h2><i class="fas fa-sitemap"></i> Estrutura Organizacional</h2>
            <p>Conheça a organização administrativa e competências do município</p>
        </div>
        <div class="module-content">
            <iframe src="estrutura/estrutura.php" 
                    style="width: 100%; min-height: 800px; border: none; border-radius: 8px;"
                    onload="this.style.height = (this.contentWindow.document.body.scrollHeight + 50) + 'px';">
            </iframe>
        </div>
    `;
}

// Função para carregar o módulo de competências
function loadCompetenciasModule(moduleName, submenu) {
    const workspace = document.getElementById('workspace');
    
    workspace.innerHTML = `
        ${getBreadcrumbsHTML(moduleName, submenu)}
        <div class="module-header">
            <h2><i class="fas fa-sitemap"></i> Competências</h2>
            <p>Competências institucionais baseadas na Cartilha PNTP 2026, esta seção apresenta as competências essenciais do Portal de Transparência Pública Municipal.</p>
        </div>
        <div class="module-content">
        <iframe src="/extensao/extensao-lp3-faculdade-main/transparencia/competencias/competencias.php"
            style="width: 100%; min-height: 800px; border: none; border-radius: 8px;"
            onload="this.style.height = (this.contentWindow.document.body.scrollHeight + 50) + 'px';">
        </iframe>
        </div>
    `;
}

// Função para carregar o módulo de fiscais de contratos
function loadFiscaisContratosModule(moduleName, submenu) {
    const workspace = document.getElementById('workspace');
    
    workspace.innerHTML = `
        ${getBreadcrumbsHTML(moduleName, submenu)}
        <div class="module-header">
            <h2><i class="fas fa-user-tie"></i> Fiscais de Contratos</h2>
            <p>Lista de fiscais responsáveis pelos contratos do município</p>
        </div>
        <div class="module-content">
            <iframe src="listafiscais/contratos.php" 
                    style="width: 100%; min-height: 800px; border: none; border-radius: 8px;"
                    onload="this.style.height = (this.contentWindow.document.body.scrollHeight + 50) + 'px';">
            </iframe>
        </div>
    `;
}

// Função para carregar o módulo de ordem cronológica
function loadOrdemCronologicaModule(moduleName, submenu) {
    const workspace = document.getElementById('workspace');
    
    workspace.innerHTML = `
        ${getBreadcrumbsHTML(moduleName, submenu)}
        <div class="module-header">
            <h2><i class="fas fa-clock"></i> Ordem Cronológica de Pagamentos</h2>
            <p>Consulta da ordem cronológica de pagamentos do município</p>
        </div>
        <div class="module-content">
            <iframe src="listapagamentos/pagamentos.php" 
                    style="width: 100%; min-height: 800px; border: none; border-radius: 8px;"
                    onload="this.style.height = (this.contentWindow.document.body.scrollHeight + 50) + 'px';">
            </iframe>
        </div>
    `;
}

// Função para carregar o módulo de RGF
function loadRGFModule(moduleName, submenu) {
    const workspace = document.getElementById('workspace');
    
    workspace.innerHTML = `
        ${getBreadcrumbsHTML(moduleName, submenu)}
        <div class="module-header">
            <h2><i class="fas fa-file-invoice"></i> Relatório de Gestão Fiscal - RGF</h2>
            <p>Consulta de relatórios de gestão fiscal do município</p>
        </div>
        <div class="module-content">
            <iframe src="listaarquivosrgf/index.php" 
                    style="width: 100%; min-height: 800px; border: none; border-radius: 8px;"
                    onload="this.style.height = (this.contentWindow.document.body.scrollHeight + 50) + 'px';">
            </iframe>
        </div>
    `;
}

// Função para carregar módulo padrão
function loadDefaultModule(moduleName, submenu = null) {
    const workspace = document.getElementById('workspace');
    const title = submenu || moduleName;
    
    workspace.innerHTML = `
        ${getBreadcrumbsHTML(moduleName, submenu)}
        <div class="module-header">
            <h2><i class="fas fa-cog"></i> ${title}</h2>
            <p>Módulo em desenvolvimento</p>
        </div>
        <div class="module-content">
            <div style="text-align: center; padding: 3rem;">
                <i class="fas fa-tools fa-4x" style="color: #cbd5e1; margin-bottom: 1rem;"></i>
                <h3 style="color: var(--dark-color); margin-bottom: 1rem;">Módulo em Desenvolvimento</h3>
                <p style="color: #64748b;">O módulo "${title}" está em fase de desenvolvimento e em breve estará disponível.</p>
            </div>
        </div>
    `;
}

// Função para voltar ao dashboard inicial
function loadDashboard(pushState = true) {
    const workspace = document.getElementById('workspace');
    if (pushState) history.pushState({}, "", "/transparencia/");

    workspace.innerHTML = `
        <div class="dashboard-title">
            <h2>Dashboard de Transparência</h2>
            <p>Baseado nas diretrizes do PNTP - Programa Nacional de Transparência Pública</p>
        </div>
        <div class="cards-grid" id="cardsContainer">
            <!-- Cards serão gerados dinamicamente -->
        </div>
    `;
    
    generateCards();
}

// Função para gerar o menu lateral
function generateSidebarMenu() {
    const container = document.getElementById('sidebarMenu');
    
    // Adicionar link para dashboard inicial
    const dashboardItem = document.createElement('div');
    dashboardItem.className = 'menu-item active';
    dashboardItem.innerHTML = `
        <a href="#" id="dashboardLink">
            <div class="menu-icon">
                <i class="fas fa-home"></i>
            </div>
            <span class="menu-text">Dashboard Inicial</span>
        </a>
    `;
    
    dashboardItem.querySelector('a').addEventListener('click', function(e) {
        e.preventDefault();
        setActiveMenuItem(this);
        loadDashboard();
    });
    
    container.appendChild(dashboardItem);
    
    // Gerar os itens do menu
    menuItems.forEach(item => {
        const menuItem = document.createElement('div');
        menuItem.className = 'menu-item';
        menuItem.innerHTML = `
            <a href="#">
                <div class="menu-icon">
                    <i class="${item.icon}"></i>
                </div>
                <span class="menu-text">${item.title}</span>
                ${item.submenus && item.submenus.length > 0 ? 
                    '<span class="menu-arrow"><i class="fas fa-chevron-right"></i></span>' : ''}
            </a>
            ${item.submenus && item.submenus.length > 0 ? `
                <div class="submenu">
                    ${item.submenus.map(submenu => `
                        <div class="submenu-item">
                            <a href="#" data-module="${item.module || item.title.toLowerCase()}" data-submenu="${submenu}">${submenu}</a>
                        </div>
                    `).join('')}
                </div>
            ` : ''}
        `;
        
        // Adicionar evento de clique para expandir/recolher submenu
        const menuLink = menuItem.querySelector('a');
        if (item.submenus && item.submenus.length > 0) {
            menuLink.addEventListener('click', function(e) {
                e.preventDefault();
                menuItem.classList.toggle('expanded');
            });
        } else {
            menuLink.addEventListener('click', function(e) {
                e.preventDefault();
                setActiveMenuItem(this);
                loadModule(item.module || item.title.toLowerCase());
            });
        }
        
        // Adicionar eventos para submenus
        const submenuLinks = menuItem.querySelectorAll('.submenu-item a');
        submenuLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                setActiveMenuItem(this);
                const module = this.getAttribute('data-module');
                const submenu = this.getAttribute('data-submenu');
                loadModule(module, submenu);
            });
        });
        
        container.appendChild(menuItem);
    });
}

// Função para definir item ativo no menu
function setActiveMenuItem(clickedElement) {
    // Remover classe active de todos os itens
    document.querySelectorAll('.menu-item').forEach(item => {
        item.classList.remove('active');
    });
    
    // Adicionar classe active ao item clicado
    const menuItem = clickedElement.closest('.menu-item');
    if (menuItem) {
        menuItem.classList.add('active');
    }
}

// Função para gerar os cards dinamicamente
function generateCards() {
    const container = document.getElementById('cardsContainer');
    container.innerHTML = '';
    
    menuItems.forEach(item => {
        const card = document.createElement('div');
        card.className = 'card';
        card.innerHTML = `
            <div class="card-icon">
                <i class="${item.icon}"></i>
            </div>
            <div class="card-title">${item.title}</div>
            <div class="card-submenu">
                ${item.submenus.map(submenu => `
                    <div class="submenu-item" data-module="${item.module || item.title.toLowerCase()}" data-submenu="${submenu}">
                        ${submenu}
                    </div>
                `).join('')}
            </div>
        `;
        
        // Adicionar evento de clique para o card principal
        card.addEventListener('click', function(e) {
            if (!e.target.classList.contains('submenu-item')) {
                loadModule(item.module || item.title.toLowerCase());
                setActiveMenuItemByTitle(item.title);
            }
        });
        
        // Adicionar eventos para subitens do card
        const submenuItems = card.querySelectorAll('.submenu-item');
        submenuItems.forEach(subItem => {
            subItem.addEventListener('click', function(e) {
                e.stopPropagation();
                const module = this.getAttribute('data-module');
                const submenu = this.getAttribute('data-submenu');
                loadModule(module, submenu);
                setActiveMenuItemByTitle(item.title);
            });
        });
        
        container.appendChild(card);
    });
}

// Função para definir item ativo no menu pelo título
function setActiveMenuItemByTitle(title) {
    const menuItems = document.querySelectorAll('.menu-item');
    menuItems.forEach(item => {
        const menuText = item.querySelector('.menu-text');
        if (menuText && menuText.textContent === title) {
            setActiveMenuItem(menuText);
        }
    });
}

// Função para alternar a sidebar
function setupSidebarToggle() {
    const toggleBtn = document.getElementById('toggleSidebar');
    const sidebar = document.getElementById('sidebar');
    
    toggleBtn.addEventListener('click', function() {
        sidebar.classList.toggle('collapsed');
    });
}

// Função para verificar a URL atual e carregar o módulo correspondente
function handleRouting() {
    const path = window.location.pathname.replace('/transparencia/', '');
    
    if (path === 'rgf') {
        loadModule('planejamento', 'RGF', false);
        setActiveMenuItemByTitle('Planejamento e Prestação de Contas');
    } else if (path === 'fiscais-contratos') {
        loadModule('contratos', 'Fiscais de contratos', false);
        setActiveMenuItemByTitle('Contratos');
    } else if (path === 'ordem-cronologica') {
        loadModule('contratos', 'Ordem cronológica', false);
        setActiveMenuItemByTitle('Contratos');
    } else if (path === 'acessibilidade') {
        loadModule('acessibilidade', 'Recursos de acessibilidade', false);
        setActiveMenuItemByTitle('Acessibilidade');
    } else if (path === 'estrutura-organizacional') {
        loadModule('informações institucionais', 'Estrutura organizacional', false);
        setActiveMenuItemByTitle('Informações Institucionais');
    } else if (path === 'contratos') {
        loadModule('contratos', 'Relação de contratos', false);
        setActiveMenuItemByTitle('Contratos');
    } else {
        loadDashboard(false);
    }
}

// Função para carregar o widget do UserWay (Acessibilidade Externa)
function setupUserWay() {
    (function(d) {
        var s = d.createElement("script");
        /* uncomment the following line to override default position*/
        /* s.setAttribute("data-position", 1);*/
        /* uncomment the following line to override default size (values: small, large)*/
        s.setAttribute("data-size", "large");
        /* uncomment the following line to override default language (e.g., fr, de, es, he, nl, etc.)*/
        s.setAttribute("data-language", "pt");
        s.setAttribute("data-type", "2");
        s.setAttribute("data-mobile", true);
        s.setAttribute("data-account", "6muh4vq7X9");
        s.setAttribute("src", "https://cdn.userway.org/widget.js");
        (d.body || d.head).appendChild(s);
    })(document);
}

// Função para configurar o dropdown de busca
function setupSearchDropdown() {
    const searchInput = document.getElementById('searchInput');
    const searchDropdown = document.getElementById('searchDropdown');

    searchInput.addEventListener('input', function() {
        const query = this.value.trim().toLowerCase();

        if (query === '') {
            searchDropdown.classList.remove('show');
            return;
        }

        const results = [];

        menuItems.forEach(item => {
            const parentMatch = item.title.toLowerCase().includes(query);
            item.submenus.forEach(submenu => {
                const submenuMatch = submenu.toLowerCase().includes(query);
                if (parentMatch || submenuMatch) {
                    results.push({
                        item: item,
                        submenu: submenu
                    });
                }
            });
        });

        if (results.length === 0) {
            searchDropdown.innerHTML = '<div class="search-no-results">Nenhum resultado encontrado</div>';
        } else {
            searchDropdown.innerHTML = results.map(result => `
                <a href="#" data-module="${result.item.module || result.item.title.toLowerCase()}" data-submenu="${result.submenu}">
                    <div class="dropdown-parent">${result.item.title}</div>
                    <div class="dropdown-submenu">${result.submenu}</div>
                </a>
            `).join('');
        }

        searchDropdown.classList.add('show');
    });

    searchDropdown.addEventListener('click', function(e) {
        const link = e.target.closest('a');
        if (link) {
            e.preventDefault();
            const module = link.getAttribute('data-module');
            const submenu = link.getAttribute('data-submenu');
            if (module && submenu) {
                loadModule(module, submenu);
                searchInput.value = '';
                searchDropdown.classList.remove('show');
            }
        }
    });

    document.addEventListener('click', function(e) {
        if (!searchInput.contains(e.target) && !searchDropdown.contains(e.target)) {
            searchDropdown.classList.remove('show');
        }
    });
}

// Inicializar o dashboard quando a página carregar
document.addEventListener('DOMContentLoaded', function() {
    if (document.getElementById("sidebarMenu")) {
      generateSidebarMenu();
    }
    if (document.getElementById("cardsContainer")) {
      generateCards();
    }
    if (document.getElementById("toggleSidebar")) {
      setupSidebarToggle();
    }
    if (document.getElementById("searchInput")) {
      setupSearchDropdown();
    }
    setupUserWay(); // Inicializa o UserWay
    if (document.getElementById("workspace")) {
      handleRouting();
    }
});

// Lidar com os botões de voltar/avançar do navegador
window.onpopstate = function() {
    handleRouting();
};