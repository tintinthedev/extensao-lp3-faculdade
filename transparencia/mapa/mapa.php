<?php
$menuItems = [
    [
        "title" => "Informações Prioritárias",
        "icon" => "fas fa-star",
        "submenus" => [
            "Informações essenciais",
            "Dados críticos",
            "Indicadores principais"
        ]
    ],
    [
        "title" => "Informações Institucionais",
        "icon" => "fas fa-university",
        "submenus" => [
            "Estrutura organizacional",
            "Competências",
            "Endereços e contatos"
        ]
    ],
    [
        "title" => "Receita",
        "icon" => "fas fa-money-bill-wave",
        "submenus" => [
            "Receitas orçamentárias",
            "Receitas extraorçamentárias",
            "Previsão e arrecadação"
        ]
    ],
    [
        "title" => "Despesa",
        "icon" => "fas fa-file-invoice-dollar",
        "submenus" => [
            "Despesas orçamentárias",
            "Despesas extraorçamentárias",
            "Empenho, liquidação e pagamento"
        ]
    ],
    [
        "title" => "Convênios e Transferências",
        "icon" => "fas fa-handshake",
        "submenus" => [
            "Convênios celebrados",
            "Transferências voluntárias",
            "Prestação de contas"
        ]
    ],
    [
        "title" => "Recursos Humanos",
        "icon" => "fas fa-users",
        "submenus" => [
            "Quadro de servidores",
            "Remuneração",
            "Concursos públicos"
        ]
    ],
    [
        "title" => "Diárias",
        "icon" => "fas fa-plane",
        "submenus" => [
            "Solicitações de diárias",
            "Valores pagos",
            "Destino e finalidade"
        ]
    ],
    [
        "title" => "Licitações",
        "icon" => "fas fa-gavel",
        "submenus" => [
            "Editais publicados",
            "Resultados",
            "Pregões eletrônicos"
        ]
    ],
    [
        "title" => "Contratos",
        "icon" => "fas fa-file-contract",
        "submenus" => [
            "Relação de contratos",
            "Fiscais de contratos",
            "Ordem cronológica"
        ]
    ],
    [
        "title" => "Obras",
        "icon" => "fas fa-hard-hat",
        "submenus" => [
            "Obras em andamento",
            "Obras concluídas",
            "Licitações de obras"
        ]
    ],
    [
        "title" => "Planejamento e Prestação de Contas",
        "icon" => "fas fa-chart-line",
        "submenus" => [
            "RGF",
            "Plano Plurianual",
            "Lei de Diretrizes Orçamentárias",
            "Lei Orçamentária Anual"
        ]
    ],
    [
        "title" => "SIC",
        "icon" => "fas fa-info-circle",
        "submenus" => [
            "Serviço de Informação ao Cidadão",
            "Solicitações de informação",
            "Estatísticas do SIC"
        ]
    ],
    [
        "title" => "Acessibilidade",
        "icon" => "fas fa-universal-access",
        "submenus" => [
            "Declaração de acessibilidade",
            "Recursos de acessibilidade",
            "Formulário de contato"
        ]
    ],
    [
        "title" => "Ouvidoria",
        "icon" => "fas fa-headset",
        "submenus" => [
            "Registro de manifestações",
            "Estatísticas da ouvidoria",
            "Canais de atendimento"
        ]
    ],
    [
        "title" => "LGPD e Governo Digital",
        "icon" => "fas fa-shield-alt",
        "submenus" => [
            "Política de privacidade",
            "Termos de uso",
            "Governo digital"
        ]
    ],
    [
        "title" => "Renúncia de Receita",
        "icon" => "fas fa-hand-holding-usd",
        "submenus" => [
            "Isenções fiscais",
            "Incentivos tributários",
            "Impacto orçamentário"
        ]
    ],
    [
        "title" => "Emendas parlamentares",
        "icon" => "fas fa-file-signature",
        "submenus" => [
            "Emendas impositivas",
            "Execução das emendas",
            "Prestação de contas"
        ]
    ],
    [
        "title" => "Saúde",
        "icon" => "fas fa-heartbeat",
        "submenus" => [
            "Recursos aplicados",
            "Serviços prestados",
            "Indicadores de saúde"
        ]
    ],
    [
        "title" => "Educação",
        "icon" => "fas fa-graduation-cap",
        "submenus" => [
            "Recursos aplicados",
            "Indicadores educacionais",
            "Programas e projetos"
        ]
    ],
    [
        "title" => "Atividades Finalísticas",
        "icon" => "fas fa-tasks",
        "submenus" => [
            "Poder Legislativo",
            "Composição da Casa",
            "Leis e atos infralegais"
        ]
    ]
];
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mapa do Site</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="mapa.css">
    </head>

    <body>
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

        <section id="intro">
            <div class="descricao">
                <h2>Mapa do Site</h2>
                Encontre aqui a estrutura de todo o Portal da Transparência e acesse diretamente pelos links o local desejado.
            </div>
            <div class="voltar">
                <a href="../index.php"><i class="fas fa-arrow-left"></i> Voltar ao Portal</a>
            </div>
        </section>

        <main class="container">
            <div class="mapa-site">
                <?php foreach($menuItems as $item): ?>
                    <div class="topico">
                        <h2>
                            <i class="<?php echo $item['icon']; ?>"></i>
                            <?php echo $item['title']; ?>
                        </h2>
                        <ul>
                            <?php foreach($item['submenus'] as $submenu): ?>
                                <li><a href="../index.php">- <?php echo $submenu; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endforeach; ?>
            </div>
        </main>

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
            <div class="copyright">
                &copy; 2023 Prefeitura Municipal. Todos os direitos reservados.
            </div>
        </footer>

        <script>
            document.addEventListener('DOMContentLoaded', function(){
                const moduloSalvo = sessionStorage.getItem('moduloSelecionado');

                if(moduloSalvo){
                    const dados = JSON.parse(moduloSalvo);
                    sessionStorage.removeItem('moduloSelecionado');

                    if(typeof loadModule === 'function'){
                        loadModule(
                            dados.modulo.toLowerCase(),
                            dados.submenu
                        );
                    }
                }
            });
        </script>

        <script src="../js/dashboard.js"></script>
    </body>
</html>