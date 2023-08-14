<?php

/**
 * Template Name: Estude na Mobile
 *
 * @author Nucleus
 * @since 1.0.0
 *
 * @package Nucleus
 */

namespace WL;

get_header();

?>

<link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
 />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>




<style>
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
    left: 88px;

    gap: 12px;
    display: flex;
    justify-content: space-between;
  }
}

    </style>



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
		
	$("#close-video-vimeo").click(() => {
        $(".background-video").css({
          display: "none",
        });

        $("body").css({
          overflow: "auto",
        });
      });

      $("#open-video-vimeo").click(() => {
        $(".background-video").css({
          display: "flex",
        });

        $("body").css({
          overflow: "hidden",
        });
      });
    });
</script>



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
            O reconhecido <a href="https://www.escolamobile.com.br/a-escola/" style="color: #144372; font-weight: bold">projeto pedagógico da Escola Móbile</a>
            começa na infância e se estende até a preparação para universidades
            conceituadas, ou seja, por toda a Educação Básica.
          </p>

          <p>
            Na Educação Infantil – historicamente, a maior porta de entrada na
            Móbile – e no Ensino Fundamental, oferecemos dois programas: o Regular e o Bilíngue
            (que acontece em período integral). Qualquer uma dessas opções de percurso
            continua no Ensino Médio, oferecido em período semi-integral e composto por um Núcleo
            Regular e um Núcleo Flexível, que proporcionam a cada estudante a
            oportunidade de compor um currículo mais adequado a seus interesses,
            necessidades e projetos pessoais.
          </p>

          <p>
            Também contamos com um <i>portfólio</i> amplo de Cursos Opcionais e
            Atividades Extracurriculares, e com um programa de imersão parcial em Inglês, disponível para os alunos e alunas dos cursos regulares. 
Priorizando, a todo momento, o bem-estar e o acolhimento de cada criança ou adolescente, educamos estudantes autônomos e conscientes de suas responsabilidades e potencialidades. Trabalhamos, assim, para despertar a paixão pelo conhecimento e por tudo o que, com ele, uma pessoa é capaz de produzir e de transformar.

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
            >Agende agora sua participação em uma de nossas reuniões <i>online</i> e
            acompanhe o processo de ingresso pelo botão a seguir.</span
          >
          <div class="btn-area" style="margin-top: 48px; text-transform: uppercase;">
            <a href="http://ingresso.escolamobile.com.br/login"
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
            <h2 style="font-weight: bold; font-size: 24px">Acesso à universidade</h2>
            <p style="margin-top: 8px">
              <strong>90% de aprovação nas universidades</strong> mais prestigiadas do Brasil e do mundo nos últimos cinco anos.
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
            <h2 style="font-weight: bold; font-size: 24px">Reconhecimento nacional</h2>
            <p style="margin-top: 8px">
              <strong>1º lugar no ranking do Enem</strong> em São Paulo e top 5 no Brasil, considerando escolas de grande porte.
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
            <h2 style="font-weight: bold; font-size: 24px">Proficiência em línguas estrangeiras</h2>
            <p style="margin-top: 8px">
              <strong>100% de aprovação nos diplomas Cambridge de Inglês e DELE de Espanhol</strong>, aplicados em nosso programa Bilíngue (em período integral).

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
            <h2 style="font-weight: bold; font-size: 24px">Excelência acadêmica</h2>
            <p style="margin-top: 8px">
              <strong>20 pontos acima da média OCDE</strong> na prova internacional PISA for schools, em Matemática, Ciências e Leitura. 

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
        <a href="http://ingresso.escolamobile.com.br/login">Inscreva-se</a>
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
              ingresso. <a style="color: #2c2c2c; font-weight: bold;" href="http://ingresso.escolamobile.com.br/login">Clique aqui</a> para agendar sua reunião. Participação
              essencial à manifestação de interesse.
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
			  				Ordenamos a lista de interessados de acordo com os seguintes critérios:<br><br>

            <strong style="font-family: Rubik">Educação Infantil</strong>
            <br /><br />1°) Irmãos(ãs) de alunos(as) que estudam
            atualmente na Móbile. <br />2°) Filhos(as) de funcionários(as) e
            assessores(as) da Móbile. <br />
            3°) Irmãos(ãs) de alunos(as) que estudaram e se formaram na Móbile
            ou filhos(as) de ex-alunos(as). <br />
            4°) Ex-alunos(as) que precisaram sair da Móbile por motivo de
            mudança de cidade. <br />
            5°) Candidatos(as) que ficaram em fila de espera na Móbile em anos
            anteriores e que preencheram a Manifestação de Interesse de Vaga
            para o processo de ingresso vigente. <br />
            6°) Candidatos(as) que preencheram pela primeira vez a Manifestação
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
            3°) Irmãos(ãs) de alunos(as) que estudaram e se formaram na Móbile
            ou filhos(as) de ex-alunos(as). <br />
            4°) Ex-alunos(as) que precisaram sair da Móbile por motivo de
            mudança de cidade. <br />
            5°) Candidatos(as) que ficaram em fila de espera na Móbile em anos
            anteriores e que preencheram a Manifestação de Interesse de Vaga
            para o processo de ingresso vigente. <br />
            6°) Candidatos(as) que preencheram pela primeira vez a Manifestação
            de Interesse de Vaga para 2024, por ordem de chegada. <br />
            7º) Candidatos(as) que, após confirmação da disponibilidade de
            vagas, participam de uma vivência.
          </p>
          <br />
          <p>
            <strong style="font-family: Rubik"
              >2º Ano do Fundamental ao 3º Ano do Ensino Médio</strong
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
            para a manhã e 20 para a tarde, <br /><br />
       		Para as demais séries do Ensino Fundamental, do 3º ao 9º ano, e do Ensino Médio (1º a 3º ano), o número de vagas abertas depende de movimentações das famílias. <strong>Até o início de setembro, divulgaremos uma expectativa de vagas por série.</strong>
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
            Para os(as) ingressantes no
            1º e 2º ano Fundamental, as vivências não incluem
            momentos formais de avaliação. Chamaremos os candidatos
            a participar
            de uma vivência apenas quando houver vagas disponíveis.
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
            de vivência e avaliação de estudantes do 3º ano do
            Fundamental ao 3º ano do Ensino Médio. O valor será
            cobrado via boleto bancário, enviado por e-mail aos candidatos que
            preencherem a manifestação de interesse por uma vaga para
            confirmação de sua participação nas vivências/seleção previstas para
            os dias 29 e 30 de setembro.
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
            cópia da Certidão de Nascimento (já requerida na etapa de manifestação de interesse).
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
            reuniões <i>online</i>, na qual se explicam as diferenças entre os ciclos.
            <strong
              >Inscreva-se para participar de uma reunião online <a href="http://ingresso.escolamobile.com.br/login">AQUI</a>.</strong
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
            1º ano do Fundamental: a partir de junho de 2023, depois de o(a)
            estudante participar de uma vivência.
          </li>
          <li>
            do 3º ano do Fundamental ao
           3º ano do Ensino Médio: em outubro, depois dos
            resultados das avaliações e vivências que os(os) estudantes irão
            participar, em 29 e 30 de setembro.
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

       <div class="apresentacao-online__table" style="margin-top: 32px">
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
      </div>

      <div class="apresentacao-online__table" style="margin-top: 32px">
        <div class="apresentacao-online__table-item">
          <div class="table-head"><h4>Reuniões Online - Junho</h4></div>
          <div class="flex_table table-content">
            <p>Quarta</p>
            <p>07/06/2023</p>
            <p>8h30</p>
          </div>
          <div class="flex_table table-content">
            <p>Quarta</p>
            <p>14/06/2023<br />28/06/2023</p>
            <p>8h30</p>
          </div>
        </div>
      </div>

      <div class="apresentacao-online__table" style="margin-top: 32px">
        <div class="apresentacao-online__table-item">
          <div class="table-head"><h4>Reuniões Online - Julho</h4></div>
          <div class="flex_table table-content">
            <p>Quarta</p>
            <p>
              05/07/2023<br />
              26/07/2023
            </p>
            <p>8h30</p>
          </div>
        </div>
      </div>

      <div class="btn-apresentacao-online" style="margin-top: 48px">
        <a href="http://ingresso.escolamobile.com.br/login">Agende sua participação</a>
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


<?php

get_footer();
