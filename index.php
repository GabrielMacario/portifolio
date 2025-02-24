
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
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit incidunt vel veritatis nobis officia adipisci tenetur quidem. Velit distinctio placeat praesentium? Consequatur perferendis enim possimus mollitia sequi tempora cum vero.</p>
                </div>
                <div class="image-gallery">
                    <img src="projects\images\consignado-santander\image.png" alt="Projeto Santander - Login Santander">
                </div>
            </div>
            <div class="project">
                <div class="project-data">
                    <a href="https://gooroocredito.com.br/" class="project-card" id="name-project" target="_blank"><img src="img/share.png" alt="Ícone de redirect">Gooroo Crédito</a>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit incidunt vel veritatis nobis officia adipisci tenetur quidem. Velit distinctio placeat praesentium? Consequatur perferendis enim possimus mollitia sequi tempora cum vero.</p>
                </div>
                <div class="image-gallery">
                    <img src="projects\images\gooroo\image.png" alt="Projeto Santander - Login Santander">
                </div>
            </div>
            <div class="project">
                <div class="project-data">
                    <a href="<?= $BASE_URL ?>projects/agenda" class="project-card" id="name-project" target="_blank"><img src="img/share.png" alt="Ícone de redirect">Agenda</a>
                    <p>📖 Uma aplicação simples para gerenciar contatos, permitindo: ✅ Adicionar novos contatos ✅ Atualizar informações existentes ✅ Excluir contatos quando necessário 🚀 Tecnologias utilizadas: CSS, HTML, PHP, MySQL, Bootstrap.</p>
                </div>
                <div class="image-gallery">
                    <img src="projects\images\agenda\409624639-a7acff86-51ad-427b-a32a-23d3db9f973b.png" alt="Projeto 1 - Imagem 1">
                </div>
            </div>
            <div class="project">
                <div class="project-data">
                    <a href="<?= $BASE_URL ?>projects/te-amo" class="project-card" id="name-project" target="_blank"><img src="img/share.png" alt="Ícone de redirect">Te amo</a>
                    <p>Esse projeto é uma brincadeira interativa cheia de emoção! Quando a pergunta "Te amo?" aparece, você tem duas opções:<br><br>Se responder "não", o sistema foge com uma animação engraçada 🏃‍♂️💨, deixando uma sensação de rejeição!<br>Mas, se responder "sim", Fogos de artifício começam a estourar 🎇</p>
                </div>
                <div class="image-gallery">
                    <img src="projects\images\te-amo\te-amo.png" alt="Projeto 1 - Imagem 1">
                </div>
            </div>
            <div class="project">
                <div class="project-data">
                    <a href="<?= $BASE_URL ?>projects/blog-codar" class="project-card" id="name-project" target="_blank"><img src="img/share.png" alt="Ícone de redirect">Blog</a>
                    <p>Um blog dinâmico e responsivo para compartilhar conteúdos, artigos e notícias de tecnologia. ✨</p>
                </div>
                <div class="image-gallery">
                    <img src="projects\images\blog\blog.png" alt="Projeto 2 - Imagem 1">
                </div>
            </div>
            <div class="project">
                <div class="project-data">
                    <a href="<?= $BASE_URL ?>projects/calculadora" class="project-card" id="name-project" target="_blank"><img src="img/share.png" alt="Ícone de redirect">Calculadora</a>
                    <p>A calculadora apresenta os seguintes recursos:<br>✅ Interface moderna e responsiva<br>✅ Operações matemáticas básicas<br>✅ Suporte a teclado para melhor usabilidade<br>✅ Exibição dinâmica dos cálculos em tempo real</p>
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
                    <p>Um aplicativo simples e eficiente para ajudar na organização do dia a dia. <br> 🔹 Funcionalidades: ✅ Criar e gerenciar tarefas ✅ Atualizar e editar tarefas existentes ✅ Marcar tarefas como concluídas ✅ Excluir tarefas desnecessárias ✅ Interface responsiva, adaptada para diferentes tamanhos de tela (desktop, tablet e mobile)</p>
                </div>
                <div class="image-gallery">
                    <img src="projects\images\organizador-de-tarefas\tarefas-image-pc.png" alt="Projeto 5 - Imagem 1">
                </div>
            </div>
            <div class="project">
                <div class="project-data">
                    <a href="https://github.com/GabrielMacario/insert-images-in-sequence" class="project-card" id="name-project" target="_blank"><img src="img/share.png" alt="Ícone de redirect">Inserir imagens em sequencia</a>
                    <p>Bot desenvolvido com Selenium para automatizar o upload de evidências no Jira, eliminando o processo manual e tornando o fluxo mais ágil e eficiente. 🚀</p>
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
