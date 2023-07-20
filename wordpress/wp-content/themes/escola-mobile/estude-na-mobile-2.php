<?php

/**
 * Template Name: Estude na Mobile 2
 *
 * @author Nucleus LLCf
 *
 * @package Nucleus
 */

get_header(); 

?>


<link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />

    <style>
		
		  .container {
        max-width: 1216px;
      }

      a {
        text-decoration: none;
      }
      .video {
        background-image: url(https://public-escola-mobile.s3.amazonaws.com/emails/Frame-265-1.png);
        background-repeat: no-repeat;
        background-size: cover;
        border-radius: 0px 0px 0px 200px;

        height: 60vh;
      }

      .spacing-paragraph {
        display: flex;
        flex-direction: column;
        gap: 16px;
      }

      /* HERO */

      .hero h1 {
        font-size: 64px;
        font-weight: 400;

        line-height: 110%;
      }

      .hero p {
        color: #2c2b2d;

        font-size: 16px;
        font-family: "Open Sans", sans-serif;

        line-height: 150%;
      }

      .hero h3 {
        font-size: 20px;

        line-height: 120%;
      }

      .hero span {
        font-size: 16px;
        font-family: "Open Sans", sans-serif;

        line-height: 130%;
      }

      .hero .btn-area a {
        background: #2c2b2d;
        border-radius: 30px;

        color: #fff;

        padding: 20px 96px;
      }

      /* PROJETOS DE VIDA */

      .projetos-vida {
        background: #193c6c;

        max-width: 1216px;

        padding: 96px 0px 148px;

        text-align: center;
      }

      .projetos-vida__textos h2 {
        color: #0ead69;

        font-size: 48px;
        font-weight: 400;
      }

      .slider {
        background-color: #fff;
        border-radius: 12px;

        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;

        height: 300px !important;

        padding: 24px 32px;

        width: 800px;
      }

      .slider-item {
        align-items: center !important;
        display: flex !important;
        gap: 40px;
      }

      @media screen and (max-width: 576px) {
        .projetos-vida {
          padding: 64px 20px;
        }

        .slider {
          max-width: 100%;
		  height: 550px !important;
        }

        .slider-item {
          flex-direction: column !important;
        }
      }

      .slider-item img {
        max-width: 300px;
      }

      .slider-item__textos {
        text-align: left;
      }

      .slider-item__textos p {
        font-size: 16px;
        font-family: "Open Sans", sans-serif;

        line-height: 140%;
      }

      /* CALL TO ACTION - ESTUDE NA MOBILE */

      .call-to-action__estudenamobile {
        background-color: #2c2c2c;
        border-radius: 12px;

        max-width: 1216px;

        text-align: center;

        padding: 96px 0px;
      }

      .call-to-action__estudenamobile h2 {
        color: #fff;

        font-size: 48px;
      }

      .call-to-action__estudenamobile h5 {
        color: #fff;

        font-size: 20px;
        font-weight: 400;

        margin-top: 8px;
        margin-bottom: 12px;
      }

      .call-to-action__estudenamobile .btn-estude-na-mobile a {
        background-color: #0ead69;
        border-radius: 30px;

        color: #2c2c2c;

        padding: 20px 96px;
      }

      /* PROCESSO / STEPS */

      .processo-de-ingresso {
        background: #0ead69;

        padding: 40px 32px;
      }

      .processo-de-ingresso__textos h2 {
        color: #2c2c2c;

        font-size: 40px;
      }

      .steps {
        display: flex;
        flex-direction: column;
        gap: 40px;
      }

      .steps h3 {
        color: #2c2c2c;

        font-size: 32px;
        font-weight: 500;
      }

      .steps p {
        color: #2c2c2c;

        font-size: 16px;
        font-family: "Open Sans", sans-serif;

        line-height: 150%;

        margin-top: 12px;
      }

      /* FAQ */

      .faq {
        text-align: center;

        max-width: 800px;
      }

      .question {
        align-items: center;
        display: flex;
        justify-content: space-between;
      }

      .answer {
        margin-top: 4px;

        max-height: 0;
        overflow: hidden;
        transition: max-height 1.4s ease;

        text-align: left !important;
      }

      .answer p {
        font-size: 16px;
        font-family: "Open Sans";

        line-height: 150%;

        margin-top: 16px;
      }

      .answer li {
        font-family: "Open Sans";
        font-size: 14px;
      }

      .faq-item {
        cursor: pointer;

        border-bottom: 1px solid #e6e6e6;

        padding: 16px 0px 12px;
      }

      .faq-item.active .answer {
        max-height: 1000px;
      }

      /* REUNIÃO APRESENTAÇÃO */
      .apresentacao-online {
        background-color: #193c6c;

        text-align: center;

        padding: 48px 20px;
      }

      .apresentacao-online__textos h2 {
        color: #0ead69;

        font-size: 40px;
      }

      .apresentacao-online__textos h5 {
        color: #fff;

        font-size: 16px;
        font-weight: 500;

        margin-top: 12px;
      }

      .apresentacao-online__textos p {
        color: #fff;

        font-family: "Open sans";

        margin-top: 24px;
      }

      .apresentacao-online .btn-apresentacao-online {
        padding: 32px 0px;
      }

      .apresentacao-online .btn-apresentacao-online a {
        background: #0ead69;
        border-radius: 30px;

        color: #2c2c2c;

        padding: 20px 64px;
      }

      .container {
        margin: 0 auto;
      }

      .apresentacao-online__table-item {
        background-color: #fff;
        border-radius: 20px;

        max-width: 600px;
        margin: 0 auto;
      }

      .flex_table {
        align-items: center;
        display: flex;
        justify-content: space-between;
      }

      @media screen and (max-width: 568px) {
        .flex_table {
          flex-direction: column;
          gap: 16px;
        }
      }

      .flex_table p {
        font-family: "Rubik", sans-serif;
      }

      .table-head {
        background-color: #ddd1cb;
        border-radius: 20px 20px 0px 0px;

        padding: 12px 12px;
      }

      .table-head h4 {
        font-weight: 500;
      }

      .table-content {
        border-bottom: 1px solid #ddd1cb;

        padding: 16px 32px;
      }

      /* AJUDA */

      .ajuda {
        background-color: #2c2c2c;
        border-radius: 12px;

        max-width: 800px;

        text-align: center;

        padding: 96px 0px;
      }

      .flex-icon {
        display: flex;
        gap: 12px;

        margin: 0 auto;
      }

      .ajuda__textos h2 {
        color: #fff;

        font-size: 40px;

        line-height: 120%;
      }

      .ajuda__textos p {
        color: #fff;

        font-family: "Open Sans", sans-serif;

        line-height: 150%;
      }

      .ajuda-icons {
        display: flex;
        flex-direction: column;

        gap: 20px;

        margin-top: 40px;
      }

      .ajuda-icons .cel,
      .ajuda-icons .mail {
        border: 3px solid #0ead69;
        border-radius: 30px;

        padding: 12px 20px;
      }

      .ajuda-icons .cel span,
      .ajuda-icons .mail span {
        color: #fff;

        font-size: 24px;
        font-family: "Rubik", sans-serif;
        font-weight: bold;
      }

      .bigNumber h4 {
        border: 2px solid #2c2c2c;
        border-radius: 32px;

        align-items: center;
        display: flex;
        justify-content: center;

        width: 64px;
        height: 64px;

        font-size: 28px;
      }

      .arrows-slider {
        max-width: 1000px;
        margin: 0 auto;

        position: relative;

        bottom: 184px;

        display: flex;
        justify-content: space-between;
      }

      @media screen and (max-width: 768px) {
        .table-idade-11 {
          flex-direction: column;
          align-items: center;
          text-align: center;
          gap: 20px;
        }
      }

      .arrow-prev,
      .arrow-next {
        background-color: #fff;
        border-radius: 300px;

        display: flex;
        align-items: center;

        padding: 16px 16px;
      }

      @media screen and (max-width: 576px) {
        .arrows-slider {
          max-width: 0px;
          margin: 0 auto;

          position: relative;

          bottom: 0px;
          top: 24px;

          gap: 12px;
          display: flex;
          justify-content: space-between;
        }
      }
    </style>

    <section
      class="background-video"
      style="
        background: rgba(0, 0, 0, 0.863);
        opacity: 1;
        height: 100vh;
        width: 100vw;
        overflow: hidden;
        display: none;
        justify-content: center;
        align-items: center;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 999;
      "
    >
      <iframe
        src="https://player.vimeo.com/video/737633941?h=e7b6716a16&title=0&byline=0&portrait=0"
        width="940"
        height="640"
        frameborder="0"
        allow="autoplay; fullscreen; picture-in-picture"
        allowfullscreen
      ></iframe>
      <a
        href="#"
        id="close-video-vimeo"
        style="position: absolute; top: 64px; right: 64px"
        ><svg
          width="36"
          height="36"
          viewBox="0 0 48 48"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M8 8L40 40"
            stroke="#FFF"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="miter"
          />
          <path
            d="M8 40L40 8"
            stroke="#FFF"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="miter"
          />
        </svg>
      </a>
    </section>

    <section class="container video">
      <div
        style="
          display: flex;
          justify-content: flex-end;
          align-items: flex-end;
          height: 100%;
          padding: 32px;
        "
      >
        <a
          id="open-video-vimeo"
          style="
            background-color: #fff;
            padding: 18px 19px;
            border-radius: 300px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
          "
        >
          <svg
            width="32"
            height="32"
            viewBox="0 0 48 48"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M15 24V11.8756L25.5 17.9378L36 24L25.5 30.0622L15 36.1244V24Z"
              fill="none"
              stroke="#2c2c2c"
              stroke-width="2"
              stroke-linejoin="miter"
            />
          </svg>
        </a>
      </div>
    </section>

    <section class="container hero" style="margin-top: 40px">
      <div>
        <h1>Escolher uma escola é <strong>escrever uma história</strong></h1>
        <div class="spacing-paragraph" style="margin-top: 24px">
          <p>
            Todo projeto de vida começa na escola. E, quando pensamos em
            projeto, estamos falando da integração da excelência acadêmica com o
            desenvolvimento socioemocional, a fim de que se possa formar pessoas
            cada vez mais preparadas para escrever suas próprias histórias de
            forma saudável e responsável.
          </p>

          <p>
            O reconhecido
            <a
              href="https://www.escolamobile.com.br/a-escola/"
              style="color: #144372; font-weight: bold"
              >projeto pedagógico da Escola Móbile</a
            >
            começa na infância e se estende até a preparação para universidades
            conceituadas, ou seja, por toda a Educação Básica.
          </p>

          <p>
            Na Educação Infantil – historicamente, a maior porta de entrada na
            Móbile – e no Ensino Fundamental, oferecemos dois programas: o
            Regular e o Bilíngue (que acontece em período integral). Qualquer
            uma dessas opções de percurso continua no Ensino Médio, oferecido em
            período semi-integral e composto por um Núcleo Regular e um Núcleo
            Flexível, que proporcionam a cada estudante a oportunidade de compor
            um currículo mais adequado a seus interesses, necessidades e
            projetos pessoais.
          </p>

          <p>
            Também contamos com um <i>portfólio</i> amplo de Cursos Opcionais e
            Atividades Extracurriculares, e com um programa de imersão parcial
            em Inglês, disponível para os alunos e alunas dos cursos regulares.
          </p>

          <p>
            Priorizando, a todo momento, o bem-estar e o acolhimento de cada
            criança ou adolescente, educamos estudantes autônomos e conscientes
            de suas responsabilidades e potencialidades. Trabalhamos, assim,
            para despertar a paixão pelo conhecimento e por tudo o que, com ele,
            uma pessoa é capaz de produzir e de transformar.
          </p>
        </div>

        <div style="margin-top: 32px">
          <h3 style="margin-bottom: 8px">Conheça nossa proposta</h3>
          <span
            >Agende agora sua participação em uma de nossas reuniões
            <i>online</i> e acompanhe o processo de ingresso pelo botão a
            seguir.</span
          >
          <div
            class="btn-area"
            style="margin-top: 48px; text-transform: uppercase"
          >
            <a class="redirect-button" href="#"
              >Área do ingressante</a
            >
          </div>
        </div>
      </div>
    </section>

    <section class="container projetos-vida" style="margin-top: 96px">
      <div class="projetos-vida__textos">
        <h2>Realização de <strong>projetos de vida</strong></h2>
      </div>
      <div class="slider" style="margin-top: 48px">
        <div class="slider-item">
          <div>
            <img
              src="https://public-escola-mobile.s3.amazonaws.com/imagens/acesso-a-universidade.png"
              alt=""
            />
          </div>
          <div class="slider-item__textos">
            <h2 style="font-weight: bold; font-size: 24px">
              Acesso à universidade
            </h2>
            <p style="margin-top: 8px">
              <strong>90% de aprovação nas universidades</strong> mais
              prestigiadas do Brasil e do mundo nos últimos cinco anos.
            </p>
          </div>
        </div>

        <!-- SLIDER 2 -->
        <div class="slider-item">
          <div>
            <img
              src="https://public-escola-mobile.s3.amazonaws.com/emails/reconhecimento-nacional.png"
              alt=""
            />
          </div>
          <div class="slider-item__textos">
            <h2 style="font-weight: bold; font-size: 24px">
              Reconhecimento nacional
            </h2>
            <p style="margin-top: 8px">
              <strong>1º lugar no ranking do Enem</strong> em São Paulo e top 5
              no Brasil, considerando escolas de grande porte.
            </p>
          </div>
        </div>

        <!-- SLIDER 3 -->
        <div class="slider-item">
          <div>
            <img
              src="https://public-escola-mobile.s3.amazonaws.com/emails/proficiencia-em-linguas.png"
              alt=""
            />
          </div>
          <div class="slider-item__textos">
            <h2 style="font-weight: bold; font-size: 24px">
              Proficiência em línguas estrangeiras
            </h2>
            <p style="margin-top: 8px">
              <strong
                >100% de aprovação nos diplomas Cambridge de Inglês e DELE de
                Espanhol</strong
              >, aplicados em nosso programa Bilíngue (em período integral).
            </p>
          </div>
        </div>

        <!-- SLIDER 4 -->
        <div class="slider-item">
          <div>
            <img
              src="https://public-escola-mobile.s3.amazonaws.com/emails/excelencia-academica.png"
              alt=""
            />
          </div>
          <div class="slider-item__textos">
            <h2 style="font-weight: bold; font-size: 24px">
              Excelência acadêmica
            </h2>
            <p style="margin-top: 8px">
              <strong>20 pontos acima da média OCDE</strong> na prova
              internacional PISA for schools, em Matemática, Ciências e Leitura.
            </p>
          </div>
        </div>
      </div>

      <div class="arrows-slider">
        <a href="#" class="arrow-prev"
          ><svg
            width="37"
            height="37"
            viewBox="0 0 48 48"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M5.79889 24H41.7989"
              stroke="#2c2c2c"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="miter"
            />
            <path
              d="M17.7988 36L5.79883 24L17.7988 12"
              stroke="#2c2c2c"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="miter"
            />
          </svg>
        </a>
        <a href="#" class="arrow-next">
          <svg
            width="37"
            height="37"
            viewBox="0 0 48 48"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M41.9999 24H5.99994"
              stroke="#2c2c2c"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="miter"
            />
            <path
              d="M30 12L42 24L30 36"
              stroke="#2c2c2c"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="miter"
            />
          </svg>
        </a>
      </div>
    </section>

    <section class="container call-to-action__estudenamobile">
      <div>
        <h2>Estude na Móbile</h2>
        <h5>Participe do processo de ingresso 2024.</h5>
      </div>
      <div class="btn-estude-na-mobile" style="margin-top: 52px">
        <a class="redirect-button" href="#">Inscreva-se</a>
      </div>
    </section>

    <section class="container processo-de-ingresso">
      <div class="processo-de-ingresso__textos">
        <h2>Entenda nosso processo de ingresso</h2>
      </div>
      <div class="steps" style="margin-top: 40px">
        <div
          class="step-1"
          style="display: flex; align-items: flex-start; gap: 32px"
        >
          <div class="bigNumber">
            <h4>1</h4>
          </div>
          <div>
            <h3>Apresentação da Móbile – Online</h3>
            <p>
              Introdução à nossa proposta e explicação sobre nosso processo de
              ingresso.
              <a
                style="color: #2c2c2c; font-weight: bold"
                href="http://ingresso.escolamobile.com.br/login"
                >Clique aqui</a
              >
              para agendar sua reunião. Participação essencial à manifestação de
              interesse.
            </p>
          </div>
        </div>
        <div
          class="step-2"
          style="display: flex; align-items: flex-start; gap: 32px"
        >
          <div class="bigNumber">
            <h4>2</h4>
          </div>
          <div>
            <h3>Encontro pedagógico – Presencial</h3>
            <p>
              Apresentação de nosso projeto pedagógico, seguida de uma visita
              guiada por nossos campi. A participação neste evento é fortemente
              recomendada, mas não é essencial à manifestação de interesse.
            </p>
          </div>
        </div>
        <div
          class="step-3"
          style="display: flex; align-items: flex-start; gap: 32px"
        >
          <div class="bigNumber">
            <h4>3</h4>
          </div>
          <div>
            <h3>Manifestação de Interesse</h3>
            <p>
              Envio da ficha de inscrição para as famílias interessadas em
              seguir com a matrícula.
            </p>
          </div>
        </div>
        <div
          class="step-4"
          style="display: flex; align-items: flex-start; gap: 32px"
        >
          <div class="bigNumber">
            <h4>4</h4>
          </div>
          <div>
            <h3>Matrícula antecipada</h3>
            <p>
              O critério “ordem de chegada” será considerado na distribuição de
              vagas para candidatos da Educação Infantil, do 1º e do 2º ano do
              Fundamental, que poderão ser convidados a se matricular a partir
              de junho.
            </p>
          </div>
        </div>
        <div
          class="step-5"
          style="display: flex; align-items: flex-start; gap: 32px"
        >
          <div class="bigNumber">
            <h4>5</h4>
          </div>
          <div>
            <h3>Vivências e avaliações</h3>
            <p>
              Nos dias 29 e 30 de setembro, estudantes do 3º ano do Ensino
              Fundamental ao 3º ano do Ensino Médio passam por avaliação
              acadêmica e socioemocional. Os resultados dessa etapa constituem o
              principal critério para a seleção deste grupo.
            </p>
          </div>
        </div>
        <div
          class="step-6"
          style="display: flex; align-items: flex-start; gap: 32px"
        >
          <div class="bigNumber">
            <h4>6</h4>
          </div>
          <div>
            <h3>Matrícula</h3>
            <p>
              Após a convocação, as famílias interessadas devem enviar os
              documentos necessários ao fechamento da matrícula e à assinatura
              do contrato de reserva.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="container faq" style="margin-top: 96px">
      <div class="faq__textos" style="padding: 0px 0px 40px">
        <h2>Dúvidas Frequentes</h2>
      </div>

      <!-- FAQ 2 -->

      <div class="faq-item">
        <div class="question">
          <h3>Critérios e prioridades</h3>

          <svg
            width="37"
            height="37"
            viewBox="0 0 48 48"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M24.0605 10L24.0239 38"
              stroke="#696969"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="miter"
            />
            <path
              d="M10 24L38 24"
              stroke="#696969"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="miter"
            />
          </svg>
        </div>
        <div class="answer">
          <p>
            Ordenamos a lista de interessados de acordo com os seguintes
            critérios:<br /><br />

            <strong style="font-family: Rubik">Educação Infantil</strong>
            <br /><br />1°) Irmãos(ãs) de alunos(as) que estudam atualmente na
            Móbile. <br />2°) Filhos(as) de funcionários(as) e assessores(as) da
            Móbile. <br />
            3°) Candidatos(as) que preencheram pela primeira vez a Manifestação
            de Interesse de Vaga para 2024, por ordem de chegada.
          </p>
          <br />
          <p>
            <strong style="font-family: Rubik"
              >1º e 2º Anos do Ensino Fundamental</strong
            >
            <br /><br />
            1°) Irmãos(ãs) de alunos(as) que estudam atualmente na Móbile.
            <br />2°) Filhos(as) de funcionários(as) e assessores(as) da Móbile.
            <br />
            3°) Candidatos(as) que preencheram pela primeira vez a Manifestação
            de Interesse de Vaga para 2024, por ordem de chegada. <br />
            4º) Candidatos(as) que, após confirmação da disponibilidade de
            vagas, participam de uma vivência.
          </p>
          <br />
          <p>
            <strong style="font-family: Rubik"
              >3º Ano do Fundamental ao 3º Ano do Ensino Médio</strong
            >
            <br /><br />
            <br />
            1°) Avaliação acadêmica e socioemocional, feita por meio de provas,
            vivências e entrevistas de ingresso.
            <br />2°) Irmãos(ãs) de alunos(as) que estudam atualmente na Móbile.
            <br />
            3°) Filhos(as) de funcionários(as) e assessores(as) da Móbile.
            <br />
            4°) Irmãos(ãs) de alunos(as) que estudaram e se formaram na Móbile
            ou filhos(as) de ex-alunos(as).
            <br />
            5°) Ex-alunos(as) que precisaram sair da Móbile por motivo de
            mudança de cidade.
            <br />
            6°) Candidatos(as) que ficaram em fila de espera na Móbile em anos
            anteriores e que preencheram a Manifestação de Interesse de Vaga
            para o processo de ingresso vigente.
            <br />
          </p>
        </div>
      </div>

      <!-- FAQ 3 -->
      <div class="faq-item">
        <div class="question">
          <h3>Idade para ingresso por série</h3>

          <svg
            width="37"
            height="37"
            viewBox="0 0 48 48"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M24.0605 10L24.0239 38"
              stroke="#696969"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="miter"
            />
            <path
              d="M10 24L38 24"
              stroke="#696969"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="miter"
            />
          </svg>
        </div>
        <div class="answer">
          <p>
            Observe na tabela abaixo a idade mínima para o ingresso em cada
            série da Educação Infantil. Para as demais séries – do 1º ao 9º ano
            do Fundamental e do 1º ao 3º ano do Ensino Médio –, o(a) estudante
            dará sequência aos seus estudos conforme registro prévio.
          </p>
          <br />
          <div
            class="table-idade-11"
            style="
              display: flex;
              justify-content: space-between;
              background-color: #f0f0f0;
              border-radius: 20px;
              max-width: 450px;
              margin: 0 auto;
              padding: 20px 40px;
            "
          >
            <div style="display: flex; flex-direction: column; gap: 8px">
              <div><h2 style="font-size: 20px">Série</h2></div>
              <div>
                <h6 style="font-weight: 400; font-size: 16px">Infantil 2</h6>
              </div>
              <div>
                <h6 style="font-weight: 400; font-size: 16px">Infantil 3</h6>
              </div>
              <div>
                <h6 style="font-weight: 400; font-size: 16px">Infantil 4</h6>
              </div>
              <div>
                <h6 style="font-weight: 400; font-size: 16px">Infantil 5</h6>
              </div>
            </div>
            <div style="display: flex; flex-direction: column; gap: 8px">
              <div><h2 style="font-size: 20px">Idade (até 31/03/2024)</h2></div>
              <div>
                <h6 style="font-weight: 400; font-size: 16px">2 anos</h6>
              </div>
              <div>
                <h6 style="font-weight: 400; font-size: 16px">3 anos</h6>
              </div>
              <div>
                <h6 style="font-weight: 400; font-size: 16px">4 anos</h6>
              </div>
              <div>
                <h6 style="font-weight: 400; font-size: 16px">5 anos</h6>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- FAQ 4 -->
      <div class="faq-item">
        <div class="question">
          <h3>Expectativa de vagas</h3>

          <svg
            width="37"
            height="37"
            viewBox="0 0 48 48"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M24.0605 10L24.0239 38"
              stroke="#696969"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="miter"
            />
            <path
              d="M10 24L38 24"
              stroke="#696969"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="miter"
            />
          </svg>
        </div>
        <div class="answer">
          <p>
            <strong
              >O principal momento de entrada à Móbile ocorre na Educação
              Infantil</strong
            >, quando começa o projeto pedagógico da Móbile e o desenvolvimento
            de valores e habilidades cognitivas importantes para o
            desenvolvimento da criança, São nas séries do Infantil (2 a 5 anos)
            que temos um maior número de vagas disponíveis. <br />
            <br />
            <strong
              >Outra janela de oportunidade dá-se entre o 1º e o 2º ano
              Fundamental.</strong
            >
            Temos a perspectiva de abrir 35 vagas no 1º ano em 2024, sendo 15
            para o curso regular, no período da tarde, e 20 para a Móbile
            Bilíngue, em período integral. Para o 2º ano, devemos ter 5 vagas
            para a manhã e 20 para a tarde. <br /><br />
            Para as demais séries do Ensino Fundamental, do 3º ao 9º ano, e do
            Ensino Médio (1º a 3º ano), o número de vagas abertas depende de
            movimentações das famílias.
            <strong
              >Até o início de setembro, divulgaremos uma expectativa de vagas
              por série.</strong
            >
          </p>
        </div>
      </div>

      <!-- FAQ 5 -->
      <div class="faq-item">
        <div class="question">
          <h3>Vivências e avaliações</h3>

          <svg
            width="37"
            height="37"
            viewBox="0 0 48 48"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M24.0605 10L24.0239 38"
              stroke="#696969"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="miter"
            />
            <path
              d="M10 24L38 24"
              stroke="#696969"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="miter"
            />
          </svg>
        </div>
        <div class="answer">
          <p>
            Convidamos os(as) candidatos(as) do 3º ao 9º ano do Ensino
            Fundamental a vir à escola para uma vivência de dois dias, em que
            participam de dinâmicas de grupo, jogos esportivos, conhecem os
            espaços da escola e realizam avaliações diagnósticas. <br />
            <br />
            Avaliamos conteúdos de Matemática e Português (leitura e produção de
            texto). Para o ingresso no programa Bilíngue, realizamos também uma
            sondagem de Inglês e, a partir do 8º ano, acrescentamos o Espanhol.
            <br /><br />
            Nosso objetivo com essa etapa é entender o momento em que cada
            estudante se encontra em seu processo de aprendizagem, a partir de
            propostas em que observamos características importantes para cada
            idade, como expressão oral, interação com o grupo, capacidade de
            solucionar desafios, argumentar e posicionar-se criticamente.
            <br /><br />
            As vivências são classificatórias e orientam nossas listas de
            convocações e de espera. Nossa equipe pedagógica estará preparada
            para dar devolutivas individuais às famílias, mediante agendamento
            prévio. <br /><br />
            Para os(as) ingressantes no 1º e 2º ano Fundamental, as vivências
            não incluem momentos formais de avaliação. Chamaremos os candidatos
            a participar de uma vivência apenas quando houver vagas disponíveis.
          </p>
        </div>
      </div>

      <!-- FAQ 6 -->
      <div class="faq-item">
        <div class="question">
          <h3>Taxa de participação no processo de ingresso</h3>

          <svg
            width="37"
            height="37"
            viewBox="0 0 48 48"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M24.0605 10L24.0239 38"
              stroke="#696969"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="miter"
            />
            <path
              d="M10 24L38 24"
              stroke="#696969"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="miter"
            />
          </svg>
        </div>
        <div class="answer">
          <p>
            Há uma taxa no valor de R$ 300,00 para a participação dos momentos
            de vivência e avaliação de estudantes do 3º ano do Fundamental ao 3º
            ano do Ensino Médio. O valor será cobrado via boleto bancário,
            enviado por e-mail aos candidatos que preencherem a manifestação de
            interesse por uma vaga para confirmação de sua participação nas
            vivências/seleção previstas para os dias 29 e 30 de setembro.
          </p>
        </div>
      </div>

      <!-- FAQ 7 -->
      <div class="faq-item">
        <div class="question">
          <h3>Documentos para a matrícula</h3>

          <svg
            width="37"
            height="37"
            viewBox="0 0 48 48"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M24.0605 10L24.0239 38"
              stroke="#696969"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="miter"
            />
            <path
              d="M10 24L38 24"
              stroke="#696969"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="miter"
            />
          </svg>
        </div>
        <div class="answer">
          <p>
            A matrícula será efetivada de forma 100% digital, por meio da Área
            Exclusiva para famílias Móbile, após convocação pela equipe de
            Ingresso. No processo, solicitamos os seguintes documentos:
          </p>
          <br />
          <li>preenchimento de ficha de dados cadastrais do(a) aluno(a);</li>
          <li>
            pagamento da taxa de reserva de vaga, incluída na anuidade escolar;
          </li>
          <li>assinatura de acordo para a reserva de vaga;</li>
          <li>assinatura do contrato de prestação de serviços educacionais;</li>
          <li>
            declaração de quitação das mensalidades da escola em que o(a)
            aluno(a) estuda em 2023;
          </li>
          <li>
            documento da escola de origem comprovando a escolaridade do(a)
            aluno(a);
          </li>
          <li>cópia do RG com CPF;</li>
          <li>
            cópia da Certidão de Nascimento (já requerida na etapa de
            manifestação de interesse).
          </li>
        </div>
      </div>

      <!-- FAQ 8 -->
      <div class="faq-item">
        <div class="question">
          <h3>Agendamento de reuniões e visitas</h3>

          <svg
            width="37"
            height="37"
            viewBox="0 0 48 48"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M24.0605 10L24.0239 38"
              stroke="#696969"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="miter"
            />
            <path
              d="M10 24L38 24"
              stroke="#696969"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="miter"
            />
          </svg>
        </div>
        <div class="answer">
          <p>
            As visitas ao campus acontecem nos dias dos encontros pedagógicos e
            são organizadas por grupos de famílias interessadas em um mesmo
            ciclo de ensino, da Educação Infantil ao Ensino Médio, nos programas
            Regular (em período parcial) ou Bilíngue (em tempo integral).
            <br /><br />A agenda para participar desses encontros pedagógicos
            com visita ao campus é disponibilizada a todos que participam das
            reuniões <i>online</i>, na qual se explicam as diferenças entre os
            ciclos.
            <strong
              >Inscreva-se para participar de uma reunião online
              <a href="http://ingresso.escolamobile.com.br/login">AQUI</a
              >.</strong
            >
            <br /><br />Caso não possa participar das reuniões online ou tenha
            alguma necessidade específica, por favor, escreva para a equipe de
            Ingresso para que possamos encontrar outra forma de atendê-lo(a).
            Nossos contatos são: <i>e-mail</i> ingresso@escolamobile.com.br ou
            <i>WhatsApp</i>
            11 97642-6671.
          </p>
        </div>
      </div>

      <!-- FAQ 9 -->
      <div class="faq-item">
        <div class="question">
          <h3>Escolha entre os programas Regular e Bilíngue</h3>

          <svg
            width="37"
            height="37"
            viewBox="0 0 48 48"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M24.0605 10L24.0239 38"
              stroke="#696969"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="miter"
            />
            <path
              d="M10 24L38 24"
              stroke="#696969"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="miter"
            />
          </svg>
        </div>
        <div class="answer">
          <p>
            Na Educação Infantil e no Ensino Fundamental, oferecemos dois
            programas: o Regular (em período parcial, manhã e tarde) e o
            Bilíngue (que acontece em período integral). As duas opções de
            percurso confluem no Ensino Médio, oferecido em período
            semi-integral. <br />
            <br />
            Na hora de preencher a ficha de manifestação de interesse por uma
            vaga, você poderá assinalar o ciclo de sua preferência e, se for o
            caso, um ciclo alternativo. Caso seja chamado e opte por matricular
            seu(sua) filho(a) em uma das opções, ainda será permitido ficar na
            espera do outro ciclo.
          </p>
        </div>
      </div>

      <!-- FAQ 9 -->
      <div class="faq-item">
        <div class="question">
          <h3>Participação em processos de ingresso anteriores</h3>

          <svg
            width="37"
            height="37"
            viewBox="0 0 48 48"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M24.0605 10L24.0239 38"
              stroke="#696969"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="miter"
            />
            <path
              d="M10 24L38 24"
              stroke="#696969"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="miter"
            />
          </svg>
        </div>
        <div class="answer">
          <p>
            Caso tenha participado de reuniões na Móbile em anos anteriores,
            você não precisa voltar a participar dos encontros, mas deve
            preencher a manifestação de interesse novamente. <br />
            <br />
            Para ter acesso à ficha de manifestação, entre na Área do
            Ingressante, complete e atualize seu cadastro, e assinale “já
            participei de uma reunião na Móbile”. <br />
            <br />Qualquer dificuldade, por favor, entre em contato:
            <i>e-mail</i>
            ingresso@escolamobile.com.br ou <i>WhatsApp</i> 11 97642-6671.
          </p>
        </div>
      </div>

      <!-- FAQ 10 -->
      <div class="faq-item">
        <div class="question">
          <h3>Calendário de ingresso</h3>

          <svg
            width="37"
            height="37"
            viewBox="0 0 48 48"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M24.0605 10L24.0239 38"
              stroke="#696969"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="miter"
            />
            <path
              d="M10 24L38 24"
              stroke="#696969"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="miter"
            />
          </svg>
        </div>
        <div class="answer">
          <p>
            O processo de ingresso na Escola Móbile fica aberto a qualquer
            momento do ano para receber interessados em vagas remanescentes do
            ano vigente e para prover informações para o ano seguinte. <br />
            <br />
            As convocações para matrícula para o ano de 2024 dependem da
            disponibilidade de vagas e devem acontecer nos seguintes períodos:
          </p>
          <br />
          <li>Educação Infantil: a partir de junho de 2023.</li>
          <li>
            1º e 2º ano do Fundamental: a partir de junho de 2023, depois de o(a)
            estudante participar de uma vivência.
          </li>
          <li>
            do 3º ano do Fundamental ao 3º ano do Ensino Médio: em outubro,
            depois dos resultados das avaliações e vivências que os(os)
            estudantes irão participar, em 29 e 30 de setembro.
          </li>
          <br />
          <p>
            Consulte nossa equipe para informações sobre ingressos fora de
            prazo: <i>e-mail</i> ingresso@escolamobile.com.br ou
            <i>WhatsApp</i> 11 97642-6671.
          </p>
        </div>
      </div>
    </section>

    <section class="container apresentacao-online" style="margin-top: 96px">
      <div class="apresentacao-online__textos">
        <h2>Reunião de Apresentação - Online</h2>
        <h5>Duração: 40 minutos</h5>
        <p>
          Neste evento, você poderá conhecer os diferentes programas oferecidos
          na Móbile, assim como alguns dos princípios que, há quase 50 anos,
          orientam nosso reconhecido projeto pedagógico. Além disso, poderá
          esclarecer eventuais dúvidas sobre o nosso processo de ingresso.
        </p>
      </div>

<!--       <div class="apresentacao-online__table" style="margin-top: 32px">
        <div class="apresentacao-online__table-item">
          <div class="table-head"><h4>Reuniões Online - MAIO</h4></div>
          <div class="flex_table table-content">
            <p>Quinta</p>
            <p>25/05/2023</p>
            <p>8h30</p>
          </div>
          <div class="flex_table table-content">
            <p>Quarta</p>
            <p>31/05/2023</p>
            <p>8h30</p>
          </div>
        </div>
      </div> -->
<!-- 
      <div class="apresentacao-online__table" style="margin-top: 32px">
        <div class="apresentacao-online__table-item">
          <div class="table-head"><h4>Reuniões Online - Junho</h4></div>
          <div class="flex_table table-content">
            <p>Quarta</p>
            <p>28/06/2023</p>
            <p>8h30</p>
          </div>
		<div class="flex_table table-content">
            <p>Quinta</p>
            <p>29/06/2023</p>
            <p>8h30</p>
          </div>
        </div>
      </div> -->

      <div class="apresentacao-online__table" style="margin-top: 32px">
        <div class="apresentacao-online__table-item">
          <div class="table-head"><h4>Reuniões Online - Julho</h4></div>
          <div class="flex_table table-content">
            <p>Quarta</p>
            <p>
              26/07/2023
            </p>
            <p>8h30</p>
          </div>
        </div>
      </div>
		
	<div class="apresentacao-online__table" style="margin-top: 32px">
        <div class="apresentacao-online__table-item">
          <div class="table-head"><h4>Reuniões Online - Agosto</h4></div>
          <div class="flex_table table-content">
            <p>Quarta</p>
            <p>02/08/2023</p>
            <p>8h30</p>
          </div>
		  <div class="flex_table table-content">
            <p>Sexta</p>
            <p>04/08/2023</p>
            <p>9h00</p>
          </div>
		<div class="flex_table table-content">
            <p>Quarta</p>
            <p>09/08/2023</p>
            <p>8h30</p>
          </div>
		  <div class="flex_table table-content">
            <p>Sexta</p>
            <p>11/08/2023</p>
            <p>9h00</p>
          </div>
			<div class="flex_table table-content">
            <p>Quarta</p>
            <p>16/08/2023</p>
            <p>8h30</p>
          </div>
		  <div class="flex_table table-content">
            <p>Sexta</p>
            <p>25/08/2023</p>
            <p>9h00</p>
          </div>
			<div class="flex_table table-content">
            <p>Quarta</p>
            <p>30/08/2023</p>
            <p>8h30</p>
          </div>
			
        </div>
      </div>
		
	<div class="apresentacao-online__table" style="margin-top: 32px">
        <div class="apresentacao-online__table-item">
          <div class="table-head"><h4>Reuniões Online - Setembro</h4></div>
			<div class="flex_table table-content">
            <p>Quarta</p>
            <p>01/09/2023</p>
            <p>9h00</p>
          </div>
          <div class="flex_table table-content">
            <p>Quarta</p>
            <p>06/09/2023</p>
            <p>8h30</p>
          </div>
		  <div class="flex_table table-content">
            <p>Segunda</p>
            <p>11/09/2023</p>
            <p>9h00</p>
          </div>
		<div class="flex_table table-content">
            <p>Quarta</p>
            <p>13/09/2023</p>
            <p>8h30</p>
          </div>
		  <div class="flex_table table-content">
            <p>Segunda</p>
            <p>18/09/2023</p>
            <p>9h00</p>
          </div>
			<div class="flex_table table-content">
            <p>Quarta</p>
            <p>27/09/2023</p>
            <p>8h30</p>
          </div>
        </div>
      </div>

      <div class="btn-apresentacao-online" style="margin-top: 48px">
        <a class="redirect-button" href="#"
          >Agende sua participação</a
        >
      </div>
    </section>

    <section class="container ajuda">
      <div class="ajuda__textos">
        <h2>Precisa de ajuda?</h2>
        <p>Entre em contato com a nossa equipe de ingresso.</p>
      </div>
      <div class="ajuda-icons">
        <div class="cel flex-icon">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="32"
            height="32"
            viewBox="0 0 80 80"
            fill="none"
          >
            <path
              d="M58.3277 47.9401C58.3279 47.9401 58.328 47.94 58.3281 47.9399C58.3282 47.9397 58.3282 47.9395 58.328 47.9394C57.3269 47.4412 52.4374 45.0499 51.5268 44.7167C50.6157 44.3867 49.9526 44.2234 49.286 45.2167C48.6229 46.2034 46.7171 48.4367 46.1376 49.0967C45.5548 49.7601 44.9754 49.8401 43.9806 49.3467C43.8146 49.2633 43.587 49.1647 43.3053 49.0427C41.8985 48.4337 39.1428 47.2405 35.9756 44.4301C33.0181 41.8034 31.0186 38.5601 30.4391 37.5667C29.8597 36.5767 30.3755 36.0401 30.8745 35.5467C31.169 35.2559 31.5052 34.8488 31.8426 34.4404C32.0195 34.2263 32.1967 34.0118 32.3684 33.8134C32.792 33.321 32.9743 32.9487 33.2226 32.4416C33.2668 32.3514 33.313 32.2569 33.3631 32.1568C33.6981 31.4968 33.5306 30.9201 33.2794 30.4234C33.1177 30.0995 32.2153 27.9126 31.3767 25.8803C30.9294 24.7965 30.5003 23.7566 30.2114 23.0668C29.5001 21.3663 28.7785 21.3685 28.2 21.3703C28.1219 21.3705 28.0465 21.3707 27.974 21.3668C27.3912 21.3401 26.728 21.3334 26.0648 21.3334C25.4017 21.3334 24.3232 21.5801 23.4121 22.5734C23.3551 22.6351 23.2917 22.7023 23.2229 22.7752C22.1874 23.8719 19.9288 26.2641 19.9288 30.8368C19.9288 35.6844 23.455 40.3704 23.9834 41.0726L23.9916 41.0834C24.0251 41.1277 24.0856 41.214 24.1725 41.3379C25.3808 43.0604 31.6784 52.0379 40.993 56.04C43.3711 57.06 45.2233 57.67 46.6668 58.1234C49.0516 58.88 51.222 58.7734 52.9369 58.5167C54.846 58.2334 58.8251 56.12 59.6557 53.8067C60.483 51.4934 60.483 49.5101 60.2351 49.0967C60.0359 48.7644 59.568 48.5398 58.8735 48.2063C58.7047 48.1253 58.5225 48.0378 58.3275 47.9408C58.3272 47.9406 58.3273 47.9401 58.3277 47.9401ZM40.169 72.6167H40.1557C34.2253 72.6178 28.4039 71.0312 23.3016 68.0234L22.4545 67.5222C22.2249 67.3864 21.9507 67.3479 21.6926 67.4153L11.239 70.1455C10.4941 70.34 9.81791 69.655 10.0222 68.9126L12.7913 58.8491C12.866 58.5779 12.8229 58.2878 12.6727 58.05L12.1214 57.1767C8.80597 51.9245 7.05142 45.846 7.06048 39.6434C7.06718 21.4768 21.9183 6.69679 40.1824 6.69679C49.0248 6.69679 57.3379 10.1301 63.5879 16.3568C66.6706 19.412 69.1139 23.0453 70.7766 27.0464C72.4392 31.0475 73.2881 35.337 73.2743 39.6667C73.2676 57.8334 58.4164 72.6167 40.169 72.6167ZM68.344 11.6268C64.6536 7.92987 60.2627 4.99859 55.4257 3.0028C50.5888 1.00701 45.4019 -0.0135875 40.1657 0.000136592C18.2139 0.000136592 0.341636 17.7834 0.334937 39.6401C0.32497 46.4563 2.0854 53.1569 5.44214 59.0929C5.5741 59.3263 5.61035 59.6023 5.53926 59.8608L0.459458 78.3295C0.255281 79.0719 0.931373 79.7568 1.6763 79.5623L20.7323 74.5865C20.9779 74.5223 21.2384 74.5545 21.4626 74.6732C27.2149 77.7189 33.6326 79.3132 40.1523 79.3133H40.169C62.1208 79.3133 79.9931 61.53 79.9998 39.6701C80.016 34.461 78.9942 29.3004 76.9935 24.4869C74.9928 19.6733 72.053 15.3023 68.344 11.6268Z"
              fill="white"
            />
            <path
              d="M58.3277 47.9401C58.3279 47.9401 58.328 47.94 58.3281 47.9399C58.3282 47.9397 58.3282 47.9395 58.328 47.9394C57.3269 47.4412 52.4374 45.0499 51.5268 44.7167C50.6157 44.3867 49.9526 44.2234 49.286 45.2167C48.6229 46.2034 46.7171 48.4367 46.1376 49.0967C45.5548 49.7601 44.9754 49.8401 43.9806 49.3467C43.8146 49.2633 43.587 49.1647 43.3053 49.0427C41.8985 48.4337 39.1428 47.2405 35.9756 44.4301C33.0181 41.8034 31.0186 38.5601 30.4391 37.5667C29.8597 36.5767 30.3755 36.0401 30.8745 35.5467C31.169 35.2559 31.5052 34.8488 31.8426 34.4404C32.0195 34.2263 32.1967 34.0118 32.3684 33.8134C32.792 33.321 32.9743 32.9487 33.2226 32.4416C33.2668 32.3514 33.313 32.2569 33.3631 32.1568C33.6981 31.4968 33.5306 30.9201 33.2794 30.4234C33.1177 30.0995 32.2153 27.9126 31.3767 25.8803C30.9294 24.7965 30.5003 23.7566 30.2114 23.0668C29.5001 21.3663 28.7785 21.3685 28.2 21.3703C28.1219 21.3705 28.0465 21.3707 27.974 21.3668C27.3912 21.3401 26.728 21.3334 26.0648 21.3334C25.4017 21.3334 24.3232 21.5801 23.4121 22.5734C23.3551 22.6351 23.2917 22.7023 23.2229 22.7752C22.1874 23.8719 19.9288 26.2641 19.9288 30.8368C19.9288 35.6844 23.455 40.3704 23.9834 41.0726L23.9916 41.0834C24.0251 41.1277 24.0856 41.214 24.1725 41.3379C25.3808 43.0604 31.6784 52.0379 40.993 56.04C43.3711 57.06 45.2233 57.67 46.6668 58.1234C49.0516 58.88 51.222 58.7734 52.9369 58.5167C54.846 58.2334 58.8251 56.12 59.6557 53.8067C60.483 51.4934 60.483 49.5101 60.2351 49.0967C60.0359 48.7644 59.568 48.5398 58.8735 48.2063C58.7047 48.1253 58.5225 48.0378 58.3275 47.9408C58.3272 47.9406 58.3273 47.9401 58.3277 47.9401ZM40.169 72.6167H40.1557C34.2253 72.6178 28.4039 71.0312 23.3016 68.0234L22.4545 67.5222C22.2249 67.3864 21.9507 67.3479 21.6926 67.4153L11.239 70.1455C10.4941 70.34 9.81791 69.655 10.0222 68.9126L12.7913 58.8491C12.866 58.5779 12.8229 58.2878 12.6727 58.05L12.1214 57.1767C8.80597 51.9245 7.05142 45.846 7.06048 39.6434C7.06718 21.4768 21.9183 6.69679 40.1824 6.69679C49.0248 6.69679 57.3379 10.1301 63.5879 16.3568C66.6706 19.412 69.1139 23.0453 70.7766 27.0464C72.4392 31.0475 73.2881 35.337 73.2743 39.6667C73.2676 57.8334 58.4164 72.6167 40.169 72.6167ZM68.344 11.6268C64.6536 7.92987 60.2627 4.99859 55.4257 3.0028C50.5888 1.00701 45.4019 -0.0135875 40.1657 0.000136592C18.2139 0.000136592 0.341636 17.7834 0.334937 39.6401C0.32497 46.4563 2.0854 53.1569 5.44214 59.0929C5.5741 59.3263 5.61035 59.6023 5.53926 59.8608L0.459458 78.3295C0.255281 79.0719 0.931373 79.7568 1.6763 79.5623L20.7323 74.5865C20.9779 74.5223 21.2384 74.5545 21.4626 74.6732C27.2149 77.7189 33.6326 79.3132 40.1523 79.3133H40.169C62.1208 79.3133 79.9931 61.53 79.9998 39.6701C80.016 34.461 78.9942 29.3004 76.9935 24.4869C74.9928 19.6733 72.053 15.3023 68.344 11.6268Z"
              stroke="white"
            />
          </svg>
          <span>+55 (11) 97642-6671</span>
        </div>
        <div class="mail flex-icon">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="32"
            height="32"
            viewBox="0 0 80 80"
            fill="none"
          >
            <path
              d="M13.3307 13.3333H66.6641C70.3307 13.3333 73.3307 16.3333 73.3307 19.9999V59.9999C73.3307 63.6666 70.3307 66.6666 66.6641 66.6666H13.3307C9.66406 66.6666 6.66406 63.6666 6.66406 59.9999V19.9999C6.66406 16.3333 9.66406 13.3333 13.3307 13.3333Z"
              stroke="white"
              stroke-width="6"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
            <path
              d="M73.3307 20L39.9974 43.3333L6.66406 20"
              stroke="white"
              stroke-width="6"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
          <span>ingresso@escolamobile.com.br</span>
        </div>
      </div>
    </section>

    <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"
    ></script>

    <script
      type="text/javascript"
      src="//code.jquery.com/jquery-1.11.0.min.js"
    ></script>

    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script>

    <script>
      const faqs = document.querySelectorAll(".faq-item");

      faqs.forEach((faq) => {
        faq.addEventListener("click", () => {
          faq.classList.toggle("active");
        });
      });
      $(".slider").slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true,
        prevArrow: $(".arrow-prev"),
        nextArrow: $(".arrow-next"),
      });

      $("#close-video-vimeo").click((event) => {
		  event.preventDefault();
        $(".background-video").css({
          display: "none",
        });

        $("body").css({
          overflow: "auto",
        });
      });

      $("#open-video-vimeo").click((event) => {
		  event.preventDefault();
        $(".background-video").css({
          display: "flex",
        });

        $("body").css({
          overflow: "hidden",
        });
      });
		
		$(".redirect-button").click((event) => {
			event.preventDefault();
			const urlParams = new URLSearchParams(window.location.search);
			let origin = urlParams.get('origin');
			
			if(!origin) origin = "site"
			
			window.location.href=`https://ingresso.escolamobile.com.br/login?origin=${origin}`
		})
    </script>
		
<footer class="bg-white px-30 py-80 xl:p-136 rounded-tl-100 xl:rounded-tl-2000" style="margin-top: 96px">
	<div class="container mx-auto px-20">
		<div class="flex flex-col lg:flex-row items-start justify-between space-y-60 lg:space-y-0">
			<a class="max-w-xs" href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo.svg" alt=""></a>
			<ul class="flex flex-col space-y-15">
				<li class="font-bold">Informações práticas</li>
				<li><a class="hover:underline underline md:no-underline" href="/educacao-infantil">Educação Infantil</a></li>
				<li><a class="hover:underline underline md:no-underline" href="/ensino-fundamental">Ensino Fundamental</a></li>
				<li><a class="hover:underline underline md:no-underline" href="/ensino-medio">Ensino Médio</a></li>
				<li><a class="hover:underline underline md:no-underline" href="/estude-na-mobile">Estude na Móbile</a></li>
				<li><a class="hover:underline underline md:no-underline" href="https://escolamobile.gupy.io/">Trabalhe Conosco</a></li>
			</ul>

			<ul class="flex flex-col space-y-20">
				<li class="font-bold">Fale com a Móbile</li>

				<li><a class="flex items-center" href="/contato"><svg class="mr-10" width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M14.939 0C16.28 0 17.57 0.53 18.519 1.481C19.469 2.43 20 3.71 20 5.05V12.95C20 15.74 17.73 18 14.939 18H5.06C2.269 18 0 15.74 0 12.95V5.05C0 2.26 2.259 0 5.06 0H14.939ZM16.5299 6.53984L16.6099 6.45984C16.8489 6.16984 16.8489 5.74984 16.5989 5.45984C16.4599 5.31084 16.2689 5.21984 16.0699 5.19984C15.8599 5.18884 15.6599 5.25984 15.5089 5.39984L10.9999 8.99984C10.4199 9.48084 9.58893 9.48084 8.99993 8.99984L4.49993 5.39984C4.18893 5.16984 3.75893 5.19984 3.49993 5.46984C3.22993 5.73984 3.19993 6.16984 3.42893 6.46984L3.55993 6.59984L8.10993 10.1498C8.66993 10.5898 9.34893 10.8298 10.0599 10.8298C10.7689 10.8298 11.4599 10.5898 12.0189 10.1498L16.5299 6.53984Z" fill="#2C2C2C" />
						</svg>
						Entre em contato</a>
				</li>

				<li><a class="flex items-center" href="tel:+551155364402">
					<svg class="mr-10" width="20" height="20" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M9.9761 14.4556C11.4472 15.9796 13.2273 17.1561 15.1912 17.9027L17.848 15.7438C17.9268 15.6884 18.0202 15.6587 18.1158 15.6587C18.2115 15.6587 18.3048 15.6884 18.3836 15.7438L23.3168 18.9894C23.5041 19.1044 23.6626 19.2622 23.7799 19.4505C23.8971 19.6388 23.9699 19.8524 23.9925 20.0743C24.015 20.2963 23.9867 20.5206 23.9098 20.7294C23.8329 20.9383 23.7095 21.126 23.5493 21.2778L21.2378 23.6095C20.9068 23.9435 20.4999 24.1886 20.0535 24.323C19.6071 24.4573 19.1351 24.4768 18.6796 24.3795C14.1356 23.4212 9.94731 21.1767 6.59337 17.9027C3.31386 14.5961 1.04446 10.3888 0.0604563 5.79112C-0.0367507 5.33316 -0.0164623 4.85733 0.119355 4.40974C0.255173 3.96215 0.501914 3.55797 0.835667 3.23638L3.23177 0.87595C3.38005 0.720354 3.56087 0.601028 3.76071 0.526907C3.96055 0.452785 4.17422 0.42579 4.38572 0.447941C4.59722 0.470092 4.80107 0.540816 4.98201 0.654818C5.16295 0.768819 5.31629 0.923143 5.43055 1.10624L8.71463 6.07897C8.77127 6.15706 8.80185 6.25166 8.80185 6.34884C8.80185 6.44601 8.77127 6.54062 8.71463 6.61871L6.55108 9.27419C7.30204 11.2395 8.47201 13.0094 9.9761 14.4556Z" fill="#2C2C2C" />
					</svg>
					+55 11 5536-4402</a>
				</li>

				<li><a class="flex items-center" target="_blank" href="https://wa.me/551140403088">
					<svg class="mr-10" width="20" height="20" viewBox="0 0 28 29" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M20.4153 17.2194C20.0659 17.0456 18.3532 16.208 18.0344 16.0913C17.7155 15.9758 17.4834 15.9186 17.2501 16.2663C17.018 16.6116 16.351 17.3933 16.1482 17.6243C15.9442 17.8564 15.7414 17.8844 15.3932 17.7118C15.0451 17.5368 13.922 17.1716 12.5915 15.991C11.5563 15.0716 10.8565 13.9365 10.6537 13.5888C10.4509 13.2423 10.6314 13.0545 10.8061 12.8818C10.9632 12.7266 11.1543 12.477 11.3289 12.2751C11.5036 12.0721 11.561 11.9275 11.6771 11.6953C11.7943 11.4643 11.7357 11.2625 11.6478 11.0886C11.561 10.9148 10.8647 9.20796 10.574 8.5138C10.2915 7.8383 10.0042 7.93046 9.79089 7.9188C9.58691 7.90946 9.3548 7.90713 9.12269 7.90713C8.89058 7.90713 8.5131 7.99346 8.19424 8.34113C7.87421 8.68763 6.97507 9.52646 6.97507 11.2333C6.97507 12.939 8.22238 14.5875 8.39705 14.8196C8.57172 15.0506 10.853 18.5529 14.3475 20.0544C15.1799 20.4114 15.8281 20.6249 16.3334 20.7836C17.1681 21.0484 17.9277 21.0111 18.5279 20.9213C19.1961 20.8221 20.5888 20.0824 20.8795 19.2728C21.1691 18.4631 21.1691 17.7689 21.0823 17.6243C20.9956 17.4796 20.7634 17.3933 20.4141 17.2194H20.4153ZM14.0592 25.8563H14.0545C11.9789 25.8566 9.94138 25.3014 8.15556 24.2486L7.73354 23.9989L3.34686 25.1446L4.51797 20.8886L4.24249 20.4523C3.08209 18.614 2.468 16.4865 2.47117 14.3156C2.47351 7.9573 7.67141 2.78431 14.0639 2.78431C17.1587 2.78431 20.0683 3.98597 22.2558 6.1653C23.3347 7.23464 24.1899 8.50629 24.7718 9.90668C25.3537 11.3071 25.6508 12.8084 25.646 14.3238C25.6436 20.6821 20.4458 25.8563 14.0592 25.8563ZM23.9204 4.5098C22.6288 3.21588 21.092 2.18993 19.399 1.49141C17.7061 0.792885 15.8907 0.435674 14.058 0.440477C6.37486 0.440477 0.119573 6.66463 0.117228 14.3145C0.113668 16.749 0.755388 19.1414 1.97764 21.2503L0 28.4404L7.39006 26.5108C9.43437 27.6192 11.7253 28.2 14.0533 28.2001H14.0592C21.7423 28.2001 27.9976 21.9759 27.9999 14.325C28.0056 12.5018 27.648 10.6956 26.9477 9.01084C26.2475 7.32609 25.2185 5.79625 23.9204 4.5098Z" fill="#2C2C2C" />
					</svg>
					+55 11 4040-3088</a>
				</li>

				<li><a href="https://www.google.com/maps/place/R.+Diogo+J%C3%A1come,+818+-+Moema,+S%C3%A3o+Paulo+-+SP,+04512-001/@-23.5986377,-46.6689923,17z/data=!3m1!4b1!4m5!3m4!1s0x94ce5a0024732795:0x419157824b1e517a!8m2!3d-23.5986377!4d-46.6689923" target="_BLANK" class="flex items-center cursor-pointer"><svg class="ml-2 mr-10" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M9.03 1.99535e-05C11.29 0.01002 13.45 0.91002 15.03 2.49002C16.62 4.08002 17.51 6.23002 17.5 8.46002V8.51002C17.44 11.54 15.74 14.33 13.62 16.51C12.42 17.74 11.09 18.83 9.64 19.75C9.25 20.08 8.68 20.08 8.29 19.75C6.14 18.35 4.24 16.59 2.7 14.54C1.35 12.76 0.58 10.62 0.5 8.39002C0.52 3.74002 4.34 -0.00998005 9.03 1.99535e-05ZM9.02984 11.2602C9.73984 11.2602 10.4198 10.9902 10.9198 10.5002C11.4398 9.99016 11.7308 9.31116 11.7308 8.60016C11.7308 7.12016 10.5198 5.93016 9.02984 5.93016C7.53984 5.93016 6.33984 7.12016 6.33984 8.60016C6.33984 10.0612 7.51984 11.2402 8.99984 11.2602H9.02984Z" fill="#2C2C2C" />
						</svg>Moema • São Paulo • Brasil</a>
				</li>
				<div class="flex">
					<li class="mr-13">
						<a target="_blank" href="https://www.youtube.com/channel/UCkuHlOmpey9772Ma50EIaNQ">
						<svg class="duration-500" width="24" height="24" viewBox="0 0 643 600" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M320.9 529C313.1 529 129.1 528.8 80.3002 515.8C48.3002 507.2 23.0002 482 14.4002 449.9C1.4002 401.1 1.2002 304 1.2002 299.9C1.2002 295.8 1.4002 198.7 14.4002 149.9C23.0002 117.9 48.3002 92.5998 80.4002 83.9998C129.2 70.8998 313.2 70.7998 321 70.7998C328.8 70.7998 512.8 70.9998 561.6 83.9998C593.7 92.5998 618.9 117.8 627.5 149.9C640.6 198.7 640.7 295.8 640.7 299.9C640.7 304 640.5 401.1 627.5 449.9C618.9 482 593.7 507.3 561.6 515.8C512.7 528.9 328.7 529 320.9 529ZM320.9 106.2C269 106.2 126.3 108.4 89.5002 118.2C69.6002 123.5 53.9002 139.2 48.6002 159.1C36.7002 203.5 36.6002 299 36.6002 299.9C36.6002 300.9 36.7002 396.4 48.6002 440.7C53.9002 460.6 69.6002 476.3 89.5002 481.6C126.3 491.5 269 493.6 320.9 493.6C372.8 493.6 515.5 491.4 552.3 481.6C572.2 476.3 587.9 460.6 593.2 440.7C605.1 396.4 605.2 300.8 605.2 299.9C605.2 298.9 605.1 203.4 593.2 159.1C587.9 139.2 572.2 123.6 552.3 118.2C515.6 108.4 372.8 106.2 320.9 106.2ZM242.8 421.2V178.6L452.9 299.9L242.8 421.2ZM278.2 240V359.9L382 299.9L278.2 240Z" fill="#2C2C2C"/>
						</svg>
						</a>
					</li>
					<li class="mr-13">
						<a target="_blank" href="https://www.facebook.com/escolamobile">
						<svg class="h-auto duration-500" width="24" height="24" viewBox="0 0 600 600" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M325.7 594.5V361.9H393L400 316.4H325.6V246.7C325.6 209.1 349.7 185.7 388.5 185.7H406.1V149.8C394.5 148.4 377.5 146.7 361.2 146.7C334.2 146.7 312.1 154.6 297.1 169.6C281.6 185.1 273.5 208.6 273.5 237.6V316.4H202.8V361.9H273.5V594.4L253.3 591.2C184.4 580.4 121.2 545.2 75.4002 492.1C29.2002 438.5 3.7002 369.9 3.7002 298.9C3.7002 219.8 34.5002 145.5 90.4002 89.6C146.3 33.7 220.6 3 299.6 3C378.6 3 453 33.7 508.9 89.6C564.8 145.5 595.6 219.8 595.6 298.9C595.6 369.9 570.1 438.5 523.8 492.2C478 545.3 414.8 580.5 345.9 591.3L325.7 594.5ZM360.6 396.9V552.8C413.4 540.1 461.4 511 497.3 469.4C538.1 422.1 560.6 361.6 560.6 299C560.6 155.1 443.5 38 299.6 38C155.7 38 38.6002 155.1 38.6002 299C38.6002 361.6 61.1002 422.1 101.9 469.4C137.8 511 185.8 540.1 238.6 552.8V396.9H167.9V281.4H238.6V237.5C238.6 199 250.3 167 272.5 144.8C294.1 123.1 324.9 111.7 361.3 111.7C392.9 111.7 425.2 117.2 426.6 117.4L441.1 119.9V220.7H388.5C368.9 220.7 360.6 228.5 360.6 246.7V281.5H440.7L423 396.9H360.6Z" fill="#2C2C2C"/>
							</svg>

						</a>
					</li>
					<li class="mr-13">
						<a target="_blank" href="https://www.instagram.com/escolamobile">
						<svg class="h-auto duration-500" width="24" height="24" viewBox="0 0 600 600" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M200.9 60.6002C175.1 61.8002 157.5 65.9002 142.2 72.0002C126.3 78.2002 112.8 86.5002 99.4001 100C86.0001 113.5 77.7001 127 71.5001 142.9C65.5001 158.3 61.5001 175.9 60.4001 201.7C59.3001 227.5 59.0001 235.8 59.1001 301.5C59.2001 367.3 59.5001 375.5 60.8001 401.3C62.0001 427.1 66.1001 444.7 72.2001 460C78.4001 475.9 86.7001 489.4 100.2 502.8C113.7 516.2 127.2 524.5 143.2 530.6C158.6 536.6 176.2 540.6 202 541.7C227.8 542.8 236.1 543.1 301.8 543C367.5 542.9 375.8 542.6 401.6 541.4C427.4 540.2 444.9 536 460.3 530C476.2 523.8 489.7 515.5 503.1 502C516.5 488.5 524.8 475 530.9 459C536.9 443.6 540.9 426 542 400.2C543.1 374.4 543.4 366.1 543.3 300.3C543.2 234.5 542.9 226.3 541.7 200.5C540.5 174.7 536.4 157.1 530.3 141.7C524.1 125.8 515.8 112.3 502.3 98.9002C488.8 85.5002 475.3 77.2002 459.4 71.1002C444 65.1002 426.4 61.1002 400.6 60.0002C374.8 58.9002 366.5 58.6002 300.8 58.7002C235 59.1002 226.7 59.4002 200.9 60.6002ZM200.4 505.2C176 504.1 162.7 500.1 153.9 496.7C142.2 492.2 133.9 486.7 125.1 478C116.3 469.3 110.9 460.9 106.3 449.2C102.9 440.4 98.7001 427.1 97.6001 402.7C96.4001 376.3 96.1001 368.4 96.0001 301.5C95.9001 234.6 96.1001 226.7 97.3001 200.3C98.3001 175.9 102.4 162.6 105.8 153.8C110.3 142.1 115.7 133.8 124.5 125C133.3 116.2 141.6 110.8 153.3 106.2C162.1 102.8 175.4 98.7002 199.8 97.5002C226.2 96.2002 234.1 96.0002 301 95.9002C367.9 95.8002 375.8 96.0002 402.2 97.2002C426.6 98.3002 439.9 102.3 448.7 105.7C460.4 110.2 468.7 115.6 477.5 124.4C486.3 133.2 491.7 141.5 496.3 153.2C499.8 162 503.8 175.2 505 199.7C506.3 226.1 506.5 234 506.7 300.9C506.9 367.8 506.6 375.7 505.4 402.1C504.3 426.5 500.3 439.8 496.9 448.6C492.4 460.3 487 468.6 478.2 477.4C469.5 486.2 461.1 491.6 449.4 496.2C440.6 499.6 427.3 503.7 402.9 504.9C376.5 506.1 368.6 506.4 301.7 506.5C234.8 506.6 226.8 506.3 200.4 505.2ZM401.1 171.7C401.1 187.7 414.2 200.7 430.2 200.7C446.2 200.7 459.2 187.6 459.2 171.6C459.2 155.6 446.1 142.6 430.1 142.6C414.1 142.6 401.1 155.6 401.1 171.7ZM176.9 301.3C177 370 232.8 425.5 301.5 425.4C370.2 425.3 425.7 369.5 425.6 300.8C425.5 232.1 369.7 176.6 301 176.7C232.3 176.8 176.7 232.7 176.9 301.3ZM211.9 301.3C211.8 252 251.7 212 301 211.9C350.3 211.8 390.3 251.7 390.4 301C390.5 350.3 350.6 390.3 301.3 390.4C252.1 390.5 212 350.6 211.9 301.3Z" fill="#2C2C2C"/>
							</svg>
						</a>
					</li>
					<li class="mr-13">
						<a target="_blank" href="https://open.spotify.com/user/qpetm6sgt89chsije8vuy61o2?si=GqunFOGZTi613sVKlsu5BQ">
						<svg class="h-auto duration-500" width="24" height="24" viewBox="0 0 600 600" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M428.201 424.1C423.201 432.4 412.401 435 404.201 429.9C338.301 389.7 255.501 380.6 157.801 402.9C148.401 405.1 139.001 399.2 136.901 389.8C134.701 380.4 140.601 371 150.001 368.9C256.801 344.5 348.501 355 422.401 400.2C430.601 405.1 433.201 415.9 428.201 424.1Z" fill="#2C2C2C"/>
							<path d="M462.501 347.8C456.201 358.1 442.701 361.3 432.401 355C357.001 308.7 242.101 295.2 153.001 322.3C141.401 325.8 129.201 319.3 125.701 307.7C122.201 296.1 128.701 283.9 140.301 280.4C242.201 249.5 368.801 264.5 455.301 317.7C465.601 324.1 468.801 337.5 462.501 347.8Z" fill="#2C2C2C"/>
							<path d="M465.4 268.3C375 214.6 225.9 209.7 139.6 235.9C125.7 240.1 111.1 232.3 106.9 218.4C102.7 204.5 110.5 189.9 124.4 185.7C223.5 155.6 388.1 161.4 492.2 223.2C504.7 230.6 508.8 246.7 501.4 259.1C494 271.6 477.9 275.7 465.4 268.3Z" fill="#2C2C2C"/>
							<path d="M299.6 598.2C220 598.2 145.1 567.2 88.8004 510.9C32.4004 454.6 1.40039 379.7 1.40039 300.1C1.40039 220.5 32.4004 145.6 88.7004 89.3C145 33 219.9 2 299.6 2C379.2 2 454.1 33 510.4 89.3C566.7 145.6 597.7 220.5 597.7 300.1C597.7 379.7 566.7 454.6 510.4 510.9C454.1 567.2 379.2 598.2 299.6 598.2ZM299.6 37.4C154.7 37.4 36.9004 155.3 36.9004 300.1C36.9004 445 154.8 562.8 299.6 562.8C444.4 562.8 562.3 445 562.3 300.1C562.3 155.2 444.4 37.4 299.6 37.4Z" fill="#2C2C2C"/>
							</svg>
						</a>
					</li>
				</div>
				
			</ul>
		</div>

		<div class="flex justify-start lg:hidden my-60">
			<a href="https://exclusiva.escolamobile.com.br/login.php" target="_BLANK" class="bg-dark hover:bg-green-100 duration-300 h-48 text-sm px-16 flex items-center justify-center rounded-full cursor-pointer text-white">
				Acessar área exclusiva
			</a>
		</div>
		<div class="ali-center-df">
			<div>
				<p class="mb-8"><a href="/politica-de-privacidade-e-tratamento-de-dados-global/">Termos de uso</a> | <a href="/portal-de-privacidade/">Política de privacidade</a></p>
				<p>Escola Móbile ® • <?php echo gmdate( 'Y' ); ?> • Todos os direitos reservados</p>
			</div>
			<div class="justify-end mr-100 hidden lg:flex">
				<a href="https://exclusiva.escolamobile.com.br/login.php" target="_BLANK" class="bg-dark hover:bg-green-100 duration-300 h-48 text-sm px-16 flex items-center justify-center rounded-full cursor-pointer text-white">
					Área Exclusiva
				</a>
			</div>
		</div>
		
	</div>
</footer>

