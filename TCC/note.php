<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="note-css.css">
    <link rel="shortcut icon" href="imagens/cookiesdopapai.png">
    <title>Cookies Do Papai</title>

</head>
<body>
    <header>
      
        <a href="note.html" style="position: absolute; left: 20px; top: 20px;">
            <img src="imagens/cookiesdopapai.png" alt="Logo da Empresa" style="width: 150px; height: auto;">
            <link rel="stylesheet" href="mystyle.css">
        </a>
        <h1>Cookies do Papai</h1>
        <nav>
            <a href="#">Início</a>
            <a href="javascript:void(0)" onclick="openAbout()">Sobre</a>
            <a href="#produtos">Produtos</a>
            <a href="javascript:void(0)" onclick="openContact()">Contato</a>
        </nav>
    </header>
</div>

<div id="about-modal">
    <div id="about-modal-content" style="text-align:center">
        <button id="close-about" onclick="closeAbout()">Fechar</button>
        
        <h2>Sobre Nós</h2>
        <p>A "Cookies do Papai" nasceu da paixão do meu marido pela culinária. Ele sempre gostou de cozinhar em casa e testar novas receitas, especialmente quando recebíamos visitas.  

            No ano de 2024, com a chegada de nossa filha caçula, recebemos a visita de amigos que trouxeram cookies caseiros para nossa filha mais velha. Ela gostou tanto que pediu ao pai que preparasse uma receita semelhante. A partir disso, ele começou a pesquisar intensamente sobre o assunto, testando novos sabores a cada visita que recebíamos. <br>  
            
            Com o tempo, nossos amigos passaram a incentivar a comercialização dos cookies. Começamos, então, a compartilhar fotos no meu Instagram profissional e recebemos inúmeras mensagens de pessoas interessadas em adquiri-los. <br>
            
            Decidimos testar a aceitação do público em um final de semana, oferecendo nossos cookies para venda. O resultado foi um grande sucesso, com muitas pessoas demonstrando interesse e realizando compras. Diante dessa recepção positiva, resolvemos transformar essa paixão em um negócio.  
            
            Nossa identidade visual reflete a essência da marca: a logomarca traz o "Papai" ao lado de nossas duas filhas, Maria Tereza e Maria Luíza, simbolizando o amor e a dedicação que estão presentes em cada cookie que produzimos.</p>
            <img src="imagens/fami.jfif" alt="Sobre Nós" style="width: 50%; max-width: 1000px; border-radius: 10px; margin-bottom: 20px;">
        
        <!-- Redes Sociais -->
        <div style="margin-top: 25px;">
            <h3 style="color: #fff; margin-bottom: 10px;">Siga a gente nas redes sociais:</h3>
            <div style="display: flex; justify-content: center; gap: 30px; margin-bottom: 10px;">
                <a href="https://www.instagram.com/cookiesdopapai" target="_blank" title="Instagram">
                    <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/instagram.svg" alt="Instagram" style="width:40px; height:40px; filter: invert(60%) sepia(80%) saturate(400%) hue-rotate(300deg);">
                </a>
                <a href="https://wa.me/5514994589658" target="_blank" title="WhatsApp">
                    <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/whatsapp.svg" alt="WhatsApp" style="width:40px; height:40px; filter: invert(60%) sepia(80%) saturate(400%) hue-rotate(90deg);">
                </a>
                <a href="https://www.facebook.com/cookiesdopapai" target="_blank" title="Facebook">
                    <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/facebook.svg" alt="Facebook" style="width:40px; height:40px; filter: invert(60%) sepia(80%) saturate(400%) hue-rotate(200deg);">
                </a>
            </div>
        </div>
    </div>
</div>

<div id="contact-modal">
    <div id="contact-modal-content" style="text-align:center">
        <button id="close-contact" onclick="closeContact()">Fechar</button>
     
        <h2>Contato</h2>
       
        <p> Cookiespapai@gmail.com
            <br>
            (14)99458-9658
        </p>
        <!-- Redes Sociais -->
        <div style="margin-top: 25px;">
            <h3 style="color: #975a37; margin-bottom: 10px;">Siga a gente nas redes sociais:</h3>
            <div style="display: flex; justify-content: center; gap: 30px; margin-bottom: 10px;">
                <a href="https://www.instagram.com/cookiesdopapai" target="_blank" title="Instagram">
                    <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/instagram.svg" alt="Instagram" style="width:40px; height:40px; filter: invert(60%) sepia(80%) saturate(400%) hue-rotate(300deg);">
                </a>
                <a href="https://wa.me/5514994589658" target="_blank" title="WhatsApp">
                    <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/whatsapp.svg" alt="WhatsApp" style="width:40px; height:40px; filter: invert(60%) sepia(80%) saturate(400%) hue-rotate(90deg);">
                </a>
                <a href="https://www.facebook.com/cookiesdopapai" target="_blank" title="Facebook">
                    <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/facebook.svg" alt="Facebook" style="width:40px; height:40px; filter: invert(60%) sepia(80%) saturate(400%) hue-rotate(200deg);">
                </a>
            </div>
        </div>
    </div>
</div>

    </section>



    <div id="cart-icon" onclick="redirectToCartPage()">
            <img src="imagens/carrinhocookiee.png" alt="Carrinho" style="width: 80px; height: 80px; cursor:pointer;">
            <span id="cart-count">0</span>
        </div>
  
    <div id="cart-notification" style="display:none; position:fixed; top:30px; right:30px; background:#ff9090; color:white; padding:18px 30px; border-radius:10px; font-size:1.2em; z-index:9999; box-shadow:0 4px 16px rgba(0,0,0,0.15);">
        Item adicionado ao carrinho!
    </div>
    </header>

  

    
    <section class="inicio" style="padding: 0px; background-color: #f8f8f8;">
        <div class="carousel-container" style="position: relative; max-width: 60%; margin: auto; border-radius: 15px; box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2); overflow: hidden;">
            <div class="carousel-images" style="display: flex; transition: transform 0.5s ease-in-out;">
                <img src="imagens/img-slide/imagemslide3.jpeg" alt="Cookies 1" style="width: 100%; flex-shrink: 0;">
                <img src="imagens/img-slide/imagemslide1.jpeg" alt="Cookies 2" style="width: 100%; flex-shrink: 0;">
                <img src="imagens/img-slide/imagemslide2.jpeg" alt="Cookies 3" style="width: 100%; flex-shrink: 0;">
                <img src="imagens/img-slide/imagemslide4.jpeg" alt="Cookies 3" style="width: 100%; flex-shrink: 0;">
            </div>
            <button class="carousel-btn prev" onclick="prevSlide()" style="position: absolute; top: 50%; left: 10px; transform: translateY(-50%); background-color: rgba(0, 0, 0, 0.5); color: white; border: none; padding: 10px; border-radius: 50%; cursor: pointer;">&#10094;</button>
            <button class="carousel-btn next" onclick="nextSlide()" style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); background-color: rgba(0, 0, 0, 0.5); color: white; border: none; padding: 10px; border-radius: 50%; cursor: pointer;">&#10095;</button>
        </div>
        <div style="text-align: left; color: #8B4513; font-size: 2rem; max-width: 35%; margin: 10px auto; line-height: 1.6;">
            <h1 style="font-size: 3rem; margin-bottom: 20px; color: #FF9A9A;">Bem-vindo à Cookies do Papai!</h1>
            <p style="font-size: 1.5rem;">Os melhores cookies artesanais feitos com amor e ingredientes selecionados. Experimente a doçura que transforma momentos em memórias inesquecíveis.</p>
        </div>
    </section>
    <script>
        let currentSlide = 0;
    
        function showSlide(index) {
            const slides = document.querySelectorAll('.carousel-images img');
            const totalSlides = slides.length;
            currentSlide = (index + totalSlides) % totalSlides;
            const offset = -currentSlide * 100;
            document.querySelector('.carousel-images').style.transform = `translateX(${offset}%)`;
        }
    
        function nextSlide() {
            showSlide(currentSlide + 1);
        }
    
        function prevSlide() {
            showSlide(currentSlide - 1);
        }
    
        // comeca o primeiro slide
        showSlide(0);
        
        // tempo de cada foto
        setInterval(nextSlide, 3000);

        // volta para a pagina do carrinho
        function redirectToCartPage() {
            window.location.href = 'cart.html';
        }

        // Função para mostrar notificação
        function showCartNotification() {
            const notif = document.getElementById('cart-notification');
            notif.style.display = 'block';
            setTimeout(() => {
                notif.style.display = 'none';
            }, 1500);
        }

        // Função para adicionar ao carrinho
        function addToCart(nome, preco, quantidade = 1) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            const idx = cart.findIndex(item => item.nome === nome);
            if (idx > -1) {
                cart[idx].quantidade += quantidade;
            } else {
                cart.push({ nome, preco, quantidade });
            }
            localStorage.setItem('cart', JSON.stringify(cart));
            updateCartCount();
            showCartNotification();
        }

        // Atualiza o contador do carrinho
        function updateCartCount() {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            let count = cart.reduce((sum, item) => sum + item.quantidade, 0);
            document.getElementById('cart-count').textContent = count;
        }

        document.addEventListener('DOMContentLoaded', updateCartCount);

        // ...funções modais já existentes...
        function openAbout() {
            document.getElementById('about-modal').style.display = 'flex';
        }
        function closeAbout() {
            document.getElementById('about-modal').style.display = 'none';
        }
        function openContact() {
            document.getElementById('contact-modal').style.display = 'flex';
        }
        function closeContact() {
            document.getElementById('contact-modal').style.display = 'none';
        }

        let selectedProduct = {};

        function openProductModal(name, image, description, price) {
            selectedProduct = { name, image, description, price };
            document.getElementById('product-modal-title').textContent = name;
            document.getElementById('product-modal-image').src = image;
            document.getElementById('product-modal-description').textContent = description;
            document.getElementById('product-modal-price').textContent = `R$ ${price.toFixed(2)}`;
            document.getElementById('product-modal').style.display = 'flex';
        }

        function closeProductModal() {
            document.getElementById('product-modal').style.display = 'none';
        }

        function addToCartFromModal() {
            const quantity = parseInt(document.getElementById('product-quantity').value, 10);
            if (quantity > 0) {
                addToCart(selectedProduct.name, selectedProduct.price, quantity);
                closeProductModal();
            }
        }
    </script>
    <style>
        .carousel-images img {
            border-radius: 15px;
        }
        .carousel-btn:hover {
            background-color: rgba(0, 0, 0, 0.7);
        }
        /* MODAIS - NOVO ESTILO */
        #about-modal, #contact-modal {
            display: none;
            position: fixed;
            z-index: 10000;
            left: 0; top: 0; width: 100vw; height: 100vh;
            background: rgba(255, 154, 154, 0.85); /* rosa claro com transparência */
            align-items: center;
            justify-content: center;
            transition: background 0.3s;
        }
        #about-modal-content, #contact-modal-content {
            background: linear-gradient(135deg, #fff8dc 60%, #ff9090 100%);
            border-radius: 24px;
            padding: 40px 30px 30px 30px;
            max-width: 700px;
            width: 90%;
            margin: 30px;
            box-shadow: 0 8px 32px rgba(139, 69, 19, 0.18);
            color: #532f2f;
            text-align: center;
            position: relative;
            border: 3px solid #ff9090;
            animation: modalPop 0.4s;
        }
        @keyframes modalPop {
            0% { transform: scale(0.85); opacity: 0; }
            100% { transform: scale(1); opacity: 1; }
        }
        #about-modal-content h2, #contact-modal-content h2 {
            color: #ff9090;
            font-size: 2.2rem;
            margin-bottom: 18px;
            letter-spacing: 1px;
        }
        #about-modal-content p, #contact-modal-content p {
            color: #532f2f;
            font-size: 1.15rem;
            margin-bottom: 22px;
            line-height: 1.7;
        }
        #about-modal-content img, #contact-modal-content img {
            margin-bottom: 18px;
            border-radius: 12px;
            box-shadow: 0 2px 12px rgba(139, 69, 19, 0.12);
        }
        #close-about, #close-contact {
            background: #ff9090;
            color: #fff;
            border: none;
            padding: 10px 26px;
            border-radius: 20px;
            font-size: 1.1em;
            font-weight: bold;
            position: absolute;
            top: 18px;
            right: 18px;
            cursor: pointer;
            box-shadow: 0 2px 8px rgba(139, 69, 19, 0.08);
            transition: background 0.2s, color 0.2s;
        }
        #close-about:hover, #close-contact:hover {
            background: #532f2f;
            color: #ff9090;
        }
        .social-links-modal {
            margin-top: 25px;
        }
        .social-links-modal h3 {
            color: #8B4513;
            margin-bottom: 10px;
            font-size: 1.15em;
            letter-spacing: 1px;
        }
        .social-links-modal .icons {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-bottom: 10px;
        }
        .social-links-modal .icons a img {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: #fff8dc;
            padding: 7px;
            box-shadow: 0 2px 8px rgba(255, 154, 154, 0.18);
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .social-links-modal .icons a img:hover {
            transform: scale(1.13) rotate(-8deg);
            box-shadow: 0 4px 16px #ff9090a0;
            background: #ff9090;
        }
    </style>
    <section class="produtos">
        <h3 id="produtos" style="font-size: 3rem; color: #ff9090; margin-bottom: 30px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2); ">
            🍪 Explore Nossos Cookies 🍪
        </h3>
        <div class="images">
            <div class="cookie">
                <img src="imagens/cookies/traaaad.jfif" alt="Tradicional" style="width: 500px; height: 350px; border-radius: 10px;">
                <h3 style="color: #532f2f ; font-size: 1.8em; font-weight: bold;">Tradicional</h3>
                <p style="font-size: 1.1em; color: #532f2f;">Um cookie clássico! Massa tradicional da casa, crocante por fora e super cremoso por dentro. Com muitas gotas de chocolate ao leite.</p>
                <span class="price">R$ 12,00</span>
                <br>
                <br>
                <br>
                <button style="background-color: #532f2f; padding: 10px 20px; border: none; border-radius: 10px; font-size: 1em; cursor: pointer; transition: background-color 0.3s;" onclick="addToCart('Tradicional', 12.00)">Adicionar ao Carrinho</button>
                
            </div>
            <div class="cookie highlight" style="border: 2px solid #FFC93C; background-color: #FFF8DC; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.15);">
                <img src="imagens/cookies/nut.jpeg" alt="Nutella">
                <h3 style="color: #FFC93C; font-size: 1.8em; font-weight: bold;">Nutella - O Mais Vendido!</h3>
                <p style="font-size: 1.1em; color:  #8B4513;">Nosso cookie clássico, recheado com nutella de verdade.</p>
                <span class="price">R$ 15,00</span>
                <br>
                <br>
                <br>
                <button style="background-color: #FFC93C; padding: 10px 20px; border: none; border-radius: 10px; font-size: 1em; cursor: pointer; transition: background-color 0.3s;" onclick="addToCart('Nutella', 15.00)">Adicionar ao Carrinho</button>
            </div>
            <div class="cookie">
                <img src="imagens/cookies/ban.jpeg" alt="Banana">
                <h3 style="color: #532f2f; font-size: 1.8em; font-weight: bold;">Banana</h3>
                <p style="font-size: 1.1em; color: #532f2f;">O queridinho: Massa da casa com toque de canela e gotas de chocolate branco. Recheado com doce de leite argentino e rodelas de banana. Finalizado com chocolate branco maçaricado.</p>
                <span class="price">R$ 16,00</span>
                <br>
                <br>
                <br>
                <button style="background-color: #532f2f; padding: 10px 20px; border: none; border-radius: 10px; font-size: 1em; cursor: pointer; transition: background-color 0.3s;"onclick="addToCart('Banana', 16.00)">Adicionar ao Carrinho</button>
            </div>
            <div class="cookie">
                <img src="imagens/cookies/red.jpeg" alt="Red Velvet" style="width: 500px; height: 350px; border-radius: 10px;">
                <h3 style="color: #532f2f; font-size: 1.8em; font-weight: bold;">Red Velvet</h3>
                <p style="font-size: 1.1em; color: #532f2f;">Um cookie que irá conquistar seu paladar! Massa especial de red velvet com toque de baunilha e muitas gotas de chocolate branco. recheado com brigadeiro de cream cheese e geléia de furtas vermelhas.</p>
                <span class="price">R$ 16,00</span>
                <br>
                <br>
                <button style="background-color: #532f2f; padding: 10px 20px; border: none; border-radius: 10px; font-size: 1em; cursor: pointer; transition: background-color 0.3s;" onclick="addToCart('Red Velvet', 16.00)">Adicionar ao Carrinho</button>
            </div>
            <div class="cookie">
                <img src="imagens/cookies/pis.jpeg" alt="Pistache" width="106" height="350">
                <h3 style="color: #532f2f; font-size: 1.8em; font-weight: bold;">Pistache</h3>
                <p style="font-size: 1.1em; color: #532f2f;">O cookie do momento! Massa tradicional com gotas de chocolate branco e pedaços de pistahe. recheado com brigadiero de pistache com muitos pedaços de pistache. É pistache que não acaba mais!</p>
                <span class="price">R$ 18,00</span>
                <br>
                <br>
                <button style="background-color: #532f2f; padding: 10px 20px; border: none; border-radius: 10px; font-size: 1em; cursor: pointer; transition: background-color 0.3s;"onclick="addToCart('Pistache', 18.00)">Adicionar ao Carrinho</button>
            </div>
            <div class="cookie">
                <img src="imagens/cookies/oreo.jpeg" alt="Oreo" style="width: 500px; height: 350px; border-radius: 10px;">
                <h3 style="color: #532f2f; font-size: 1.8em; font-weight: bold;">Oreo</h3>
                <p style="font-size: 1.1em; color: #532f2f;">Massa de cacau com gotas de chocolate ao leite  branco, recheado com muita nutella e pedacinhos de bolacha oreo. imperdível!</p>
                <span class="price">R$ 17,00</span>
                <br>
                <br>
                <br>
                <button style="background-color: #532f2f; padding: 10px 20px; border: none; border-radius: 10px; font-size: 1em; cursor: pointer; transition: background-color 0.3s;"onclick="addToCart('Oreo', 17.00)">Adicionar ao Carrinho</button>
            </div>
            <div class="cookie">
                <img src="imagens/cookies/nozes.jpeg" alt="Nozes com Doce de Leite">
                <h3 style="color: #532f2f; font-size: 1.8em; font-weight: bold;">Nozes com Doce de Leite</h3>
                <p style="font-size: 1.1em; color: #532f2f;">Massa especial com nozes picadas levemente torradas e gostas de chocolate branco. recheado com doce de leite argentino.</p>
                <span class="price">R$ 17,00</span>
                <br>
                <br>

                <button style="background-color: #532f2f; padding: 10px 20px; border: none; border-radius: 10px; font-size: 1em; cursor: pointer; transition: background-color 0.3s;"onclick="addToCart('Nozes com Doce de Leite', 17.00)">Adicionar ao Carrinho</button>
            </div>
            <div class="cookie">
                <img src="imagens/cookies/prest.jpeg" alt="Prestígio" style="width: 500px; height: 350px; border-radius: 10px;">
                <h3 style="color: #532f2f; font-size: 1.8em; font-weight: bold;">Prestígio</h3>
                <p style="font-size: 1.1em; color: #532f2f;">Massa de cacau, recheado com deicioso brigadeiro de coco, coberto com pasta de prestígio e coco ralado.</p>
                <span class="price">R$ 16,00</span>
                <br>
                <br>
                <button style="background-color: #532f2f; padding: 10px 20px; border: none; border-radius: 10px; font-size: 1em; cursor: pointer; transition: background-color 0.3s;"onclick="addToCart('Prestígio', 16.00)">Adicionar ao Carrinho</button>
            </div>
        </div>
    </section> 

    <footer>
        <p><center>&copy; 2025 Cookies Artesanais | Todos os direitos reservados.</center></p>
    </footer>
    <script>
        function openAbout() {
            document.getElementById('about-modal').style.display = 'flex';
        }

        function closeAbout() {
            document.getElementById('about-modal').style.display = 'none';
        }

        function openContact() {
            document.getElementById('contact-modal').style.display = 'flex';
        }

        function closeContact() {
            document.getElementById('contact-modal').style.display = 'none';
        }
    </script>
</body>
</html>
