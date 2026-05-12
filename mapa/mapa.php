<?php
$estrutura = [
    "Informações Prioritárias" => [
        "Informações essenciais",
        "Dados críticos",
        "Indicadores principais"
    ],
    "Informações Institucionais" => [
        "Estrutura organizacional" => "estrutura-organizacional",
        "Competências",
        "Endereços e contatos"
    ],
    "Receita" => [
        "Receitas orçamentárias",
        "Receitas extraorçamentárias",
        "Previsão e arrecadação"
    ],
    "Despesa" => [
        "Despesas orçamentárias",
        "Despesas extraorçamentárias",
        "Empenho, liquidação e pagamento"
    ],
    "Convênios e Transferências" => [
        "Convênios celebrados",
        "Transferências voluntárias",
        "Prestação de contas"
    ],
    "Recursos Humanos" => [
        "Quadro de servidores",
        "Remuneração",
        "Concursos públicos"
    ],
    "Diárias" => [
        "Solicitações de diárias",
        "Valores pagos",
        "Destino e finalidade"
    ],
    "Licitações" => [
        "Editais publicados",
        "Resultados",
        "Pregões eletrônicos"
    ],
    "Contratos" => [
        "Relação de contratos" => "contratos",
        "Fiscais de contratos" => "fiscais-contratos",
        "Ordem cronológica" => "ordem-cronologica"
    ],
    "Obras" => [
        "Obras em andamento",
        "Obras concluídas",
        "Licitações de obras"
    ],
    "Planejamento e Prestação de Contas" => [
        "RGF" => "rgf",
        "Plano Plurianual",
        "Lei de Diretrizes Orçamentárias",
        "Lei Orçamentária Anual"
    ],
    "SIC" => [
        "Serviço de Informação ao Cidadão",
        "Solicitações de informação",
        "Estatísticas do SIC"
    ],
    "Acessibilidade" => [
        "Declaração de acessibilidade",
        "Recursos de acessibilidade" => "acessibilidade",
        "Formulário de contato"
    ],
    "Ouvidoria" => [
        "Registro de manifestações",
        "Estatísticas da ouvidoria",
        "Canais de atendimento"
    ],
    "LGPD e Governo Digital" => [
        "Política de privacidade",
        "Termos de uso",
        "Governo digital"
    ],
    "Renúncia de Receita" => [
        "Isenções fiscais",
        "Incentivos tributários",
        "Impacto orçamentário"
    ],
    "Emendas parlamentares" => [
        "Emendas impositivas",
        "Execução das emendas",
        "Prestação de contas"
    ],
    "Saúde" => [
        "Recursos aplicados",
        "Serviços prestados",
        "Indicadores de saúde"
    ],
    "Educação" => [
        "Recursos aplicados",
        "Indicadores educacionais",
        "Programas e projetos"
    ],
    "Atividades Finalísticas" => [
        "Poder Legislativo",
        "Composição da Casa",
        "Leis e atos infralegais"
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
            <h1><i class="fas fa-sitemap"></i> Mapa do Site</h1>
        </header>

        <div class="container">

            <div class="descricao">
                <p>
                    Consulte abaixo toda a estrutura organizacional e funcional
                    do Portal da Transparência Municipal.
                </p>
            </div>

            <div class="mapa-grid">
                <?php foreach($estrutura as $categoria => $links): ?>

                    <div class="mapa-card">
                        <h2><?= $categoria ?></h2>
                        <ul>
                            <?php foreach($links as $titulo => $rota): ?>
                                <?php
                                    if(is_numeric($titulo)){
                                        $titulo = $rota;
                                        $rota = "#";
                                    }
                                ?>
                                <li><a href="../transparencia/index.php" onclick="sessionStorage.setItem('moduloSelecionado', 
                                JSON.stringify({modulo: '<?= addslashes($categoria) ?>', submenu: '<?= addslashes($titulo) ?>'}) );"></i><?= $titulo ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="voltar">
                <a href="../transparencia/index.php"><i class="fas fa-arrow-left"></i> Voltar ao Portal</a>
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
    </body>
</html>