<head>
    <meta charset="UTF-8">
    <title>Perguntas Frequentes - Portal da Transparência</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="faq.css">
</head>

<div class="faq-container">
    <div class="faq-intro">
        <p>Encontre respostas para as dúvidas mais comuns sobre o Portal da Transparência Municipal. Clique em cada pergunta para expandir a resposta.</p>
    </div>

    <div class="faq-list">
        <div class="faq-item">
            <button class="faq-question">
                <span>O que é o Portal da Transparência?</span>
                <i class="fas fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>O Portal da Transparência é uma ferramenta que permite ao cidadão acessar informações sobre a administração pública municipal, incluindo receitas, despesas, licitações, contratos, obras, servidores e outras informações de gestão pública.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                <span>Onde encontro informações sobre receitas do município?</span>
                <i class="fas fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>As informações sobre receitas podem ser encontradas no menu "Receita" deste Portal, onde são divulgadas:</p>
                <ul>
                    <li>Receitas orçamentárias (impostos, taxas, contribuições);</li>
                    <li>Receitas extraorçamentárias;</li>
                    <li>Previsão e arrecadação;</li>
                    <li>Transferências intergovernamentais (federal e estadual).</li>
                </ul>
                <p>Os dados são atualizados periodicamente conforme a execução orçamentária.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                <span>Como consultar informações sobre despesas e pagamentos?</span>
                <i class="fas fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>As informações de despesas estão disponíveis no menu "Despesa" do Portal, incluindo:</p>
                <ul>
                    <li>Despesas orçamentárias por natureza (pessoal, serviços, investimentos, etc.);</li>
                    <li>Despesas extraorçamentárias;</li>
                    <li>Empenho, liquidação e pagamento;</li>
                    <li>Ordem cronológica de pagamentos.</li>
                </ul>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                <span>Onde posso encontrar informações sobre licitações e contratos?</span>
                <i class="fas fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>As informações sobre licitações e contratos estão disponíveis nos menus correspondentes:</p>
                <ul>
                    <li><strong>Licitações:</strong> Editais publicados, resultados de julgamentos e atas de registro de preços;</li>
                    <li><strong>Contratos:</strong> Relação de contratos celebrados, fiscais responsáveis e ordem cronológica de execução.</li>
                </ul>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                <span>Como funciona o Serviço de Informação ao Cidadão (SIC)?</span>
                <i class="fas fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>O SIC é o canal oficial para solicitação de informações públicas. Por meio dele você pode:</p>
                <ul>
                    <li>Solicitar informações sobre qualquer atividade da administração municipal;</li>
                    <li>Acompanhar o andamento da sua solicitação;</li>
                    <li>Acessar informações classificadas como sigilosas (mediante justificativa);</li>
                    <li>Interpor recursos caso a resposta não seja satisfatória.</li>
                </ul>
                <p>O serviço é gratuito e não exige justificativa para a solicitação.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                <span>Onde encontrar informações sobre recursos aplicados em saúde?</span>
                <i class="fas fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>As informações sobre a área de saúde podem ser acessadas no menu "Saúde" do Portal, que apresenta:</p>
                <ul>
                    <li>Recursos aplicados em saúde (percentual mínimo de 15% exigido pela Constituição);</li>
                    <li>Serviços prestados pela rede municipal de saúde;</li>
                    <li>Indicadores de saúde (atenção básica, internações, vaccinations, etc.);</li>
                    <li>Contratos e licitações da área de saúde.</li>
                </ul>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                <span>Como verificar informações sobre convênios e transferências voluntárias?</span>
                <i class="fas fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>As informações sobre convênios e transferências estão no menu específico, incluindo:</p>
                <ul>
                    <li>Convênios celebrados com entidades privadas e públicas;</li>
                    <li>Transferências voluntárias (repasses não automáticos);</li>
                    <li>Prestação de contas dos recursos transferidos;</li>
                    <li>Planos de trabalho e resultados alcançados.</li>
                </ul>
                <p>Esses dados permitem ao cidadão acompanhar como os recursos públicos são aplicados em parcerias.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                <span>Como consultar informações sobre obras públicas em execução?</span>
                <i class="fas fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>As informações sobre obras públicas estão disponíveis no menu "Obras", incluindo:</p>
                <ul>
                    <li>Obras em andamento com cronograma físico-financeiro;</li>
                    <li>Obras concluídas;</li>
                    <li>Licitações de obras (editais e resultados);</li>
                    <li>Valores contratados e executados.</li>
                </ul>
                <p>Você pode acompanhar o progresso de cada obra e verificar o cumprimento de prazos.</p>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const faqItems = document.querySelectorAll('.faq-item');

        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');
            const answer = item.querySelector('.faq-answer');

            question.addEventListener('click', function() {
                const isActive = item.classList.contains('active');

                faqItems.forEach(otherItem => {
                    otherItem.classList.remove('active');
                    otherItem.querySelector('.faq-answer').style.maxHeight = null;
                });

                if (!isActive) {
                    item.classList.add('active');
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                }
            });
        });
    });
</script>
