<h1 class="introducao">
  <!--título principal-->
  Green Ltda. é uma forma nova de plantar.
</h1>

<section class="sobre" id="sobre">
  <div class="sobre-info">
    <h1>Quem Somos</h1>
    <!--h1 para destaque de letra, abaixo p para separar em dois blocos os textos-->
    <p>
      A Green Ltda. nasceu da paixão por cultivar e transformar pequenos espaços em refúgios cheios de vida. 
      Acreditamos que cada planta carrega consigo não apenas beleza, mas também bem-estar, energia positiva e um pedacinho da natureza dentro do seu dia a dia.
    </p>
    <p>
      Somos um comércio online dedicado ao cultivo da sua verdinha, oferecendo sementes selecionadas, mudas saudáveis, 
      substratos, vasos e todos os acessórios essenciais para quem gosta de plantar. 
      Nosso objetivo é tornar o processo de cultivo mais simples e acessível, conectando você diretamente à natureza.
    </p>
    <br><p>
      Mais do que vender produtos, acreditamos em compartilhar conhecimento e incentivar o cuidado com cada fase do plantio — 
      da germinação à colheita. Cada detalhe é pensado para que sua experiência seja completa e prazerosa, seja você iniciante 
      ou já apaixonado pela arte de cultivar.
    </p>
    <br><p>Afinal, plantar é semear histórias que crescem junto com você — e a nossa também está apenas começando.
    </p>
      
  </div>
  <div class="sobre-img">
    <img src="/img/quem-somos.png" alt="Quem Somos 1" />
  </div>
  <!--imagem associada ao quem somos-->
</section>

<section class="produtos" id="produtos">
  <!--sub dividindo em categorias, chamando o ID produto-->
  <h1>Produtos</h1>
  <div class="produtos-container">
    <!--agrupando os items para chamada em display flex no css-->

    <div class="produtos-item kit1">
      <h2>Kit Fertilizante Remo Super Trio</h2>
      <img src="/img/kit-especial1.jpg" alt="Produtos 1" />
    </div>

    <div class="produtos-item kit2">
      <h2>Kit Mix 20x3 Vaso Ecopot - 7 Litros</h2>
      <img src="/img/kit-especial2.jpg" alt="Produtos 2" />
    </div>


    <div class="produtos-item kit3">
      <h2>Kit de Fertilizantes Aptus Tent Set Pro</h2>
      <img src="/img/kit-especial3.png" alt="Produtos 2" />
    </div>
    
</section>

<section class="preco" id="preco">
  <!--mesma forma do anterior, definindo class para o css na chamada, agrupando
  imagem e usando lista para elencar as qualidades do produto, o href apenas para
  retornar o botão comprar ao topo da pagina, juntando o #-->
  <div class="preco-item">
    <img src="/img/Led2.png" alt="produtos-ipa">
    <h2>Painel Led DNA420</h2>
    <span><sup>R$</sup>325,49</span>
    <ul>
      <li>Quantum Board Samsung</li>
      <li>LM283B</li>
      <li>40w + UV e IR</li>
    </ul>
    <a href="#">Comprar</a>
  </div>

  <div class="preco-item">
    <img src="/img/Led.png" alt="produtos-stout">
    <h2>Painel Led DNA420</h2>
    <span><sup>R$</sup>2.091,57</span>
    <ul>
      <li>Quantum Bar Pró Samsung</li>
      <li>LM301H EVO</li>
      <li>240w Deep red + UV e IR</li>
    </ul>
    <a href="#">Comprar</a>
  </div>

  <div class="preco-item">
    <img src="/img/Led3.png" alt="caneca-chop">
    <h2>Painel Led BIOLEDZ</h2>
    <span><sup>R$</sup>4.276,13</span>
    <ul>
      <li>Quantum Board Barra</li>
      <li>480w Foldable</li>
      <li>DEEP RED BIVOLT</li>
    </ul>
    <a href="#">Comprar</a>
  </div>
</section>

<section class="qualidade" id="qualidade">
  <!--mesmo procedimento, associando classe para ser chamada pelo CSS e marcando
  o h2 como sub titulo do proximo P, com destaque menor que o h1-->
  <div class="qualidade-item">
    <h2>Kits Especiais</h2>
    <p>
      Nossos kits são pensados para facilitar a vida de quem quer começar a cultivar. 
      Eles já vêm com os itens essenciais para o plantio, ajudando você a ter uma experiência simples, 
      prática e cheia de resultados.
    </p>
  </div>

  <div class="qualidade-item">
    <h2>Kits Especiais, produtos selecionados</h2>
    <p>
      Aqui você tem a liberdade de montar o kit do seu jeito: escolhendo Fertilizantes e acessórios 
      que combinam com o seu espaço e com o que deseja cultivar. Também oferecemos opções prontas, 
      preparadas pela nossa equipe para quem prefere praticidade.
    </p>
  </div>

</section>

<section class="novidades" id="novidades">
  <div class="novidades-info">
    <h2>Novidades</h2>
    <p>Informe seu e-mail e fique por dentro de todas as ofertas</p>
  </div>
  <form class="novidades-form">
    <!--associando a class para o CSS, inserindo um botão simples do tipo submit-->
    <input type="text" placeholder="seu e-mail" />
    <button type="submit">Assinar</button>
  </form>
</section>
