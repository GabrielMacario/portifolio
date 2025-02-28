
<?php 
    
    require_once("templates/header.php"); 
    
?>

<main>
    <h1>Bem-vindo ao meu portfólio</h1>
    <p><em>Sou QA e Desenvolvedor, confira alguns dos meus projetos pessoais e projetos em que participei.</em></p>
    <section id="projects">
        <h2>Projetos</h2>
        <div class="project-list">
            <div class="project">
                <div class="project-data">
                    <a href="https://www.consignadosantander.com.br/#/" class="project-card" id="name-project" target="_blank"><img src="img/share.png" alt="Ícone de redirect">Consignado Santander</a>
                        <p>
                            Fui o QA responsável pelas demandas da aplicação, desde testes de feature, automatização de teste, resolução do bug e desenvolvimento da aplicação.🪲<br>
                            <br>
                            Nesse projeto, implementei os testes automatizados e integrei na pipeline, diminuindo a porcentagem de erros em quase 90% e aumentando a praticidade.📈<br>
                            <br>
                            Também realizei diversos tipos de testes automatizados utilizando Cypress, validando os dados enviados com os dados do banco.💻<br>
                            <br>
                            Tecnologias utilizadas: PHP, Node.js, Html, Css, MySQL, AWS.
                        </p>
                </div>
                <div class="image-gallery">
                    <img src="projects\images\consignado-santander\image.png" alt="Projeto Santander - Login Santander">
                </div>
            </div>
            <div class="project">
                <div class="project-data">
                    <a href="https://gooroocredito.com.br/" class="project-card" id="name-project" target="_blank"><img src="img/share.png" alt="Ícone de redirect">Gooroo Crédito</a>
                        <p>
                        Realizava testes de feature, API, analise de bugs e testes automatizados.<br>
                        <br>
                        Nesse projeto, implementei os testes automatizados e realizei a criação de testes base, tais como: login na plataforma e verificação de dados💻.<br>
                        <br>
                        Tecnologias utilizadas: Cypress, Node.js, Vue.js, PostgreSql, Huawei.
                        </p>
                </div>
                <div class="image-gallery">
                    <img src="projects\images\gooroo\image.png" alt="Projeto Santander - Login Santander">
                </div>
            </div>
            <div class="project">
                <div class="project-data">
                    <a href="<?= $BASE_URL ?>projects/agenda" class="project-card" id="name-project" target="_blank"><img src="img/share.png" alt="Ícone de redirect">Agenda</a>
                    <p>
                        🚀 Projeto realizado para praticar Tecnologias.<br>
                        🚀 Tecnologias utilizadas: CSS, HTML, PHP, MySQL, Bootstrap.<br>
                        <br>
                        📖 Uma aplicação simples para gerenciar contatos, permitindo: <br>
                        <br>
                        ✅ Adicionar novos contatos <br>
                        ✅ Atualizar informações existentes <br>
                        ✅ Excluir contatos quando necessário <br>
                    </p>
                </div>
                <div class="image-gallery">
                    <img src="projects\images\agenda\409624639-a7acff86-51ad-427b-a32a-23d3db9f973b.png" alt="Projeto 1 - Imagem 1">
                </div>
            </div>
            <div class="project">
                <div class="project-data">
                    <a href="<?= $BASE_URL ?>projects/te-amo" class="project-card" id="name-project" target="_blank"><img src="img/share.png" alt="Ícone de redirect">Te amo</a>
                    <p>
                        🚀 Projeto realizado para praticar Tecnologias.<br>
                        🚀 Tecnologias utilizadas: CSS, HTML, PHP, JavaScript.<br>
                        <br>
                        Esse projeto é uma brincadeira interativa cheia de emoção!<br>
                        Quando a pergunta "Te amo?" aparece, você tem duas opções:<br>
                        <br>
                        Se responder "não", o sistema foge com uma animação engraçada 🏃‍♂️💨, deixando uma sensação de rejeição!<br>
                        Mas, se responder "sim", Fogos de artifício começam a estourar 🎇
                    </p>
                </div>
                <div class="image-gallery">
                    <img src="projects\images\te-amo\te-amo.png" alt="Projeto 1 - Imagem 1">
                </div>
            </div>
            <div class="project">
                <div class="project-data">
                    <a href="<?= $BASE_URL ?>projects/blog-codar" class="project-card" id="name-project" target="_blank"><img src="img/share.png" alt="Ícone de redirect">Blog</a>
                    <p>
                        🚀 Projeto realizado para praticar Tecnologias.<br>
                        🚀 Tecnologias utilizadas: CSS, HTML, PHP, Bootstrap.<br>
                        <br>
                        Um blog dinâmico e responsivo para compartilhar conteúdos, artigos e notícias de tecnologia. ✨
                    </p>
                </div>
                <div class="image-gallery">
                    <img src="projects\images\blog\blog.png" alt="Projeto 2 - Imagem 1">
                </div>
            </div>
            <div class="project">
                <div class="project-data">
                    <a href="<?= $BASE_URL ?>projects/calculadora" class="project-card" id="name-project" target="_blank"><img src="img/share.png" alt="Ícone de redirect">Calculadora</a>
                    <p>
                        🚀 Projeto realizado para praticar Tecnologias.<br>
                        🚀 Tecnologias utilizadas: CSS, HTML, JavaScript.<br>
                        <br>
                        A calculadora apresenta os seguintes recursos:<br>
                        <br>
                        ✅ Interface moderna e responsiva<br>
                        ✅Operações matemáticas básicas<br>
                        ✅ Suporte a teclado para melhor usabilidade<br>
                        ✅ Exibição dinâmica dos cálculos em tempo real
                    </p>
                </div>
                <div class="image-gallery">
                    <img src="projects\images\calculadora\calculadora.png" alt="Projeto 3 - Imagem 1">
                </div>
            </div>
            <div class="project">
                <div class="project-data">
                    <a href="<?= $BASE_URL ?>projects/movie-star" class="project-card" id="name-project" target="_blank"><img src="img/share.png" alt="Ícone de redirect">Movie-Star</a>
                    <p>in progress</p>
                </div>
                <div class="image-gallery">
                    <img src="projects\images\movie-star\movie-star.png" alt="Projeto 4 - Imagem 1">
                </div>
            </div>
            <div class="project">
                <div class="project-data">
                    <a href="<?= $BASE_URL ?>projects/organizador-de-tarefas" class="project-card" id="name-project" target="_blank"><img src="img/share.png" alt="Ícone de redirect">Organizador de tarefas</a>
                    <p>
                        🚀 Projeto realizado para praticar Tecnologias.<br>
                        🚀 Tecnologias utilizadas: CSS, HTML, JavaScript<br>
                        <br>
                        Um aplicativo simples e eficiente para ajudar na organização do dia a dia. <br> 
                        🔹 Funcionalidades: <br>
                        <br>
                        ✅ Criar e gerenciar tarefas <br>
                        ✅ Atualizar e editar tarefas existentes <br>
                        ✅ Marcar tarefas como concluídas <br>
                        ✅ Excluir tarefas desnecessárias <br>
                        ✅ Interface responsiva, adaptada para diferentes tamanhos de tela (desktop, tablet e mobile)
                    </p>
                </div>
                <div class="image-gallery">
                    <img src="projects\images\organizador-de-tarefas\tarefas-image-pc.png" alt="Projeto 5 - Imagem 1">
                </div>
            </div>
            <div class="project">
                <div class="project-data">
                    <a href="https://github.com/GabrielMacario/insert-images-in-sequence" class="project-card" id="name-project" target="_blank"><img src="img/share.png" alt="Ícone de redirect">Inserir imagens em sequencia</a>
                    <p>
                        Bot desenvolvido com Selenium para automatizar o upload de evidências no Jira, eliminando o processo manual e tornando o fluxo mais ágil e eficiente. 🚀
                    </p>
                </div>
                <div class="image-gallery">
                    <img src="projects\images\insert-images-bot\insert.png" alt="Projeto 5 - Imagem 1">
                </div>
            </div>
            </div>
        </div>
    </section>
</main>

    
<?php 
    
    include 'templates/footer.php'; 
        
?>
