<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Portfólio Rafael Magalhães</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

  <style>
    /* Reset e base */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Montserrat', 'Arial', sans-serif;
      background-color: #f9f9f9;
      color: #333;
      line-height: 1.6;
    }

    section {
      padding: 60px 20px;
      max-width: 1200px;
      margin: auto;
    }

    h1, h2 {
      color: #222;
    }

    /* 1. Apresentação */
    .apresentacao {
      background-color: #f4efec;
      text-align: center;
    }

    .apresentacao h1 {
      font-size: 36px;
      margin-bottom: 20px;
    }

    .apresentacao p {
      font-size: 18px;
      max-width: 700px;
      margin: auto;
    }

    /* 2. Processo de Trabalho */
    .process-section {
      background-color: #ffffff;
    }

    .process-step {
      position: relative;
      margin-bottom: 60px;
      padding-left: 60px;
    }

    .process-step::before {
      content: '';
      position: absolute;
      top: 0;
      left: 20px;
      height: calc(100% + 60px);
      width: 2px;
      background-color: #e0e0e0;
    }

    .process-step:last-child::before {
      display: none;
    }

    .process-step::after {
      content: '';
      position: absolute;
      top: 0;
      left: 10px;
      width: 24px;
      height: 24px;
      background-color: #000;
      border-radius: 50%;
      z-index: 2;
    }

    .process-step h2 {
      font-size: 24px;
      font-weight: 700;
      margin-bottom: 12px;
      text-transform: uppercase;
    }

    .process-step p {
      font-size: 16px;
      color: #555;
      max-width: 700px;
    }

    /* 3. Conheça o Designer */
    .designer-section {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      gap: 40px;
      background-color: #f4efec;
    }

    .designer-text {
      flex: 1 1 550px;
    }

    .designer-text h1 {
      font-size: 32px;
      font-weight: 800;
      margin-bottom: 24px;
    }

    .designer-text p {
      font-size: 18px;
      margin-bottom: 20px;
    }

    .designer-photo {
      flex: 1 1 300px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .designer-photo img {
      max-width: 100%;
      height: auto;
      border-radius: 8px;
    }

    /* 4. Depoimentos */
    .depoimento {
      background-color: #f6f1ed;
      text-align: center;
    }

    .depoimento h1 {
      font-size: 32px;
      margin-bottom: 40px;
    }

    .conteudo {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      gap: 40px;
    }

    .imagem img {
      width: 500px;
      max-width: 100%;
      border-radius: 4px;
    }

    .texto {
      max-width: 500px;
      text-align: left;
    }

    .texto p {
      font-size: 18px;
    }

    .texto h2 {
      margin-top: 20px;
      font-size: 22px;
    }

    /* Responsivo */
    @media (max-width: 768px) {
      .process-step {
        padding-left: 50px;
      }

      .process-step::after {
        left: 8px;
        width: 20px;
        height: 20px;
      }

      .designer-section {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>

  <!-- Parte 1 - Apresentação -->
  <section class="apresentacao">
    <h1>RAFAEL MAGALHÃES</h1>
    <p>Designer de interiores especializado em transformar sonhos em espaços sofisticados e funcionais.</p>
  </section>

  <!-- Parte 2 - Processo de Trabalho -->
  <section class="process-section">
    @php
      $steps = [
          ['title' => 'REUNIÃO DE BRIEFING', 'description' => 'Primeiro encontro para entender profundamente as preferências, necessidades e expectativas do cliente — o ponto de partida para um projeto personalizado e assertivo.'],
          ['title' => 'DESENVOLVIMENTO DO PROJETO', 'description' => 'Etapa de criação do conceito, definição do layout e escolha de materiais, sempre alinhados ao estilo e às necessidades do cliente.'],
          ['title' => 'PRODUÇÃO E DECORAÇÃO', 'description' => 'Seleção, compra e disposição de móveis, objetos e acabamentos, finalizando os ambientes com personalidade e harmonia.'],
          ['title' => 'PROJETO EXECUTIVO E ORÇAMENTOS', 'description' => 'Detalhamento técnico completo para execução da obra, acompanhado de orçamentos e especificações precisas.'],
          ['title' => 'GERENCIAMENTO DA REFORMA', 'description' => 'Acompanhamento de todas as etapas da reforma, garantindo que tudo ocorra conforme o projeto, com prazos e qualidade controlados.'],
          ['title' => 'SEU SONHO REALIZADO', 'description' => 'Entrega do projeto completo, pronto para morar, com todos os detalhes cuidadosamente pensados para refletir seu estilo de vida.'],
      ];
    @endphp

    @foreach ($steps as $step)
      <div class="process-step">
        <h2>{{ $step['title'] }}</h2>
        <p>{{ $step['description'] }}</p>
      </div>
    @endforeach
  </section>

  <!-- Parte 3 - Conheça o Designer -->
  <section class="designer-section">
    <div class="designer-text">
      <h1>CONHEÇA O DESIGNER</h1>
      <p>Comprometido com a excelência e com a plena satisfação de seus clientes, Rafael Magalhães desenvolve projetos de interiores residenciais e corporativos de alto padrão, sempre com foco na qualidade, no cuidado com os detalhes e no cumprimento de prazos e orçamentos.</p>
      <p>Sua atuação é completa e personalizada: envolve desde o desenvolvimento criativo do projeto até o planejamento, acompanhamento de obras e a curadoria de acabamentos, mobiliário e decoração — tudo para transformar espaços em ambientes funcionais, sofisticados e acolhedores.</p>
      <p>Com escritório próprio há mais de 15 anos, Rafael é formado em Design de Interiores com especialização em Arquitetura pelo Harvard Graduate School of Design. Já entregou mais de 200 projetos e teve seu trabalho reconhecido em premiações renomadas, além de publicações em mídias nacionais e internacionais, tanto impressas quanto digitais.</p>
    </div>
    <div class="designer-photo">
      <img src="https://migo22.my.canva.site/home/_assets/media/00a0985251b553c641f0702b82ed51ac.png" alt="Foto do designer Rafael Magalhães">
    </div>
  </section>

  <!-- Parte 4 - Depoimentos -->
  <section class="depoimento">
    <h1>O QUE DIZEM NOSSOS CLIENTES</h1>
    <div class="conteudo">
      <div class="imagem">
        <img src="https://migo22.my.canva.site/home/_assets/media/3c2f6d12186514cd25273386beb43a87.png" alt="Projeto de Interiores">
      </div>
      <div class="texto">
        <p>
          Bom gosto e modernidade aliados à precisão e cuidado na execução. Essa é a experiência que eu tive em todos os projetos de Decoração de Interiores realizados pela Jéssica Decoração de Interiores. Indico com certeza!
        </p>
        <h2>RICARDO</h2>
      </div>
    </div>
  </section>

</body>
</html>
