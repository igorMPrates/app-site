jQuery(document).ready(function ($) {  
  $('#trabalhe-conosco__selectArea')
    .on('change', function () {
      const idArea = $(this).val();
      const cargos = getCargos(idArea);

      setCargos(cargos);
    });

  $('#trabalhe-conosco__cpf')
    .mask('000.000.000-00');

  $('#trabalhe-conosco__botaoEnviar')
    .on('click', function () {
      const informations = getInformationsFromForm();

      try {
        checkInformations(informations);
        sendInformations(informations);       
      } catch (error) {
        alert(error);
      }
    });

  function getCargos(idArea) {
    return todosCargos[idArea];
  };

  function setCargos(cargos) {
    $('#trabalhe-conosco__selectCargo').empty();
    $('#trabalhe-conosco__selectCargo').append(`<option value="">Selecione</option>`);

    $.each(cargos, function(index, { id_cargo, nome }) {
      $('#trabalhe-conosco__selectCargo').append(`<option value="${id_cargo}">${nome}</option>`);
    });
  };

  function getInformationsFromForm() {
    const informations = {
      nome: $('#trabalhe-conosco__nome').val(),
      dataNascimento: formatDate($('#trabalhe-conosco__dataNascimento').val()),
      cpf: formatCpf($('#trabalhe-conosco__cpf').val()),
      email: $('#trabalhe-conosco__email').val(),
      telefone: $('#trabalhe-conosco__telefone').val(),
      estrangeiro: null,
      idCargo: $('#trabalhe-conosco__selectCargo').val() || null,
      idArea: $('#trabalhe-conosco__selectArea').val() || null,
      idVaga: getQueryParam('id') || null,
      arquivo: $('#file')[0].files[0],
    };
    
    return informations;
  }

  function getQueryParam(name) {
    const match = RegExp('[?&]' + name + '=([^&]*)').exec(window.location.search);

    return match && decodeURIComponent(match[1].replace(/\+/g, ' '));
  }

  function formatDate(date) {
    const splittedDate = date.split('/');

    return `${splittedDate[2]}-${splittedDate[1]}-${splittedDate[0]}`;
  }

  function formatCpf(cpf) {
    return cpf.replace(/[^\d]+/g,'');
  }

  function checkInformations(informations) {
		const checks = {
			nome: {
				ehValido: (nome) => {
					return nome.length >= 4;
				},
				mensagemErro: 'O nome deve ter pelo menos 4 caracteres',
			},
			dataNascimento: {
				ehValido: (dataNascimento) => {
					return !!dataNascimento;
				},
				mensagemErro: 'É necessário preencher a data de nascimento',
			},
			cpf: {
				ehValido: (cpf) => {					
					return cpf.length === 11;
				},
				mensagemErro: 'CPF incorreto',
			},
      email: {
        ehValido: (email) => {
          return !!email;
        },
        mensagemErro: 'É necessário preencher o email',
      },
			telefone: {
				ehValido: (telefone) => {
					const telefoneNormalizado = telefone.replace(/[^\d]+/g,'');

          return telefoneNormalizado.length === 11 || telefoneNormalizado.length === 9;
				},
				mensagemErro: 'Telefone incorreto',
			},
      estrangeiro: {
        ehValido: (estrangeiro) => {
          return true;
        },
        mensagemErro: '',
      },
      idCargo: {
        ehValido: (estrangeiro) => {
          return true;
        },
        mensagemErro: '',
      },
      idArea: {
        ehValido: (estrangeiro) => {
          return true;
        },
        mensagemErro: '',
      },
      idCargo: {
        ehValido: (estrangeiro) => {
          return true;
        },
        mensagemErro: '',
      },
      idVaga: {
        ehValido: (estrangeiro) => {
          return true;
        },
        mensagemErro: '',
      },
			arquivo: {
				ehValido: (arquivo) => {
					return !!arquivo;
				},
				mensagemErro: 'É necessário anexar um arquivo',
			},
		};

    for (const key in checks) {
      const check = checks[key];
      const informacao = informations[key];

      if(!check.ehValido(informacao)) {
        throw new Error(check.mensagemErro);
      }
    }
	}

  function sendInformations(informations) {
    const form = new FormData();

    for(const key in informations) {
      form.append(key, informations[key]);
    }

    const settings = {
      "url": "https://api.escolamobile.com.br/candidatos",
      "method": "POST",
      "timeout": 0,
      "processData": false,
      "mimeType": "multipart/form-data",
      "contentType": false,
      "data": form
    };

    $.ajax(settings).done(function (response) {
      returnFeedback();
      resetForm(); 
    });
  };

  function resetForm() {
    $('#trabalhe-conosco__nome').val('');
    $('#trabalhe-conosco__dataNascimento').val('');
    $('#trabalhe-conosco__cpf').val('');
    $('#trabalhe-conosco__email').val('');
    $('#trabalhe-conosco__telefone').val('');
    $('#trabalhe-conosco__selectCargo').val('');
    $('#trabalhe-conosco__selectArea').val('');
    $('#trabalhe-conosco__selectCargo').val('');
    $('#file').val('');
    $('.file-input span').text('Selecione um arquivo');
  }

  function returnFeedback() {
    $('#trabalhe-conosco__feedback').show();

    setTimeout(() => {
      $('#trabalhe-conosco__feedback').hide();
    }, 4000);
  }
});

const todosCargos = {
  "1": [
      {
          "id_cargo": "22",
          "nome": "Assistente"
      },
      {
          "id_cargo": "16",
          "nome": "Assistente de Coordenação"
      },
      {
          "id_cargo": "4",
          "nome": "Berçarista"
      },
      {
          "id_cargo": "1",
          "nome": "Coordenador"
      },
      {
          "id_cargo": "3",
          "nome": "Estagiário"
      },
      {
          "id_cargo": "2",
          "nome": "Professor"
      }
  ],
  "2": [
      {
        "id_cargo": "22",
        "nome": "Assistente"
      },
      {
        "id_cargo": "16",
        "nome": "Assistente de Coordenação"
      },
      {
        "id_cargo": "1",
        "nome": "Coordenador"
      },
      {
        "id_cargo": "3",
        "nome": "Estagiário"
      },
      {
        "id_cargo": "2",
        "nome": "Professor"
      }
    ],
  "3": [
      {
        "id_cargo": "22",
        "nome": "Assistente"
      },
      {
        "id_cargo": "16",
        "nome": "Assistente de Coordenação"
      },
      {
        "id_cargo": "1",
        "nome": "Coordenador"
      },
      {
        "id_cargo": "3",
        "nome": "Estagiário"
      },
      {
        "id_cargo": "2",
        "nome": "Professor"
      }
    ],
  "4": [
      {
        "id_cargo": "22",
        "nome": "Assistente"
      },
      {
        "id_cargo": "16",
        "nome": "Assistente de Coordenação"
      },
      {
        "id_cargo": "1",
        "nome": "Coordenador"
      },
      {
        "id_cargo": "3",
        "nome": "Estagiário"
      },
      {
        "id_cargo": "2",
        "nome": "Professor"
      }
    ],
  "5": [
      {
        "id_cargo": "22",
        "nome": "Assistente"
      },
      {
        "id_cargo": "5",
        "nome": "Bibliotecário"
      },
      {
        "id_cargo": "6",
        "nome": "Corretor de redação"
      },
      {
        "id_cargo": "13",
        "nome": "Financeiro"
      },
      {
        "id_cargo": "12",
        "nome": "Outros"
      },
      {
        "id_cargo": "7",
        "nome": "Revisor"
      },
      {
        "id_cargo": "8",
        "nome": "Secretária"
      }
    ],
  "6": [
      {
        "id_cargo": "10",
        "nome": "Analista de suporte"
      },
      {
        "id_cargo": "14",
        "nome": "Designer Gráfico"
      },
      {
        "id_cargo": "3",
        "nome": "Estagiário"
      },
      {
        "id_cargo": "11",
        "nome": "Programador"
      }
    ],
  "7": [
      {
        "id_cargo": "15",
        "nome": "Analista Pleno"
      },
      {
        "id_cargo": "22",
        "nome": "Assistente"
      }
    ],
  "8": [
      {
        "id_cargo": "22",
        "nome": "Assistente"
      },
      {
        "id_cargo": "1",
        "nome": "Coordenador"
      },
      {
        "id_cargo": "19",
        "nome": "Enfermeira"
      },
      {
        "id_cargo": "3",
        "nome": "Estagiário"
      },
      {
        "id_cargo": "2",
        "nome": "Professor"
      }
    ],
  "9": [
      {
        "id_cargo": "22",
        "nome": "Assistente"
      },
      {
        "id_cargo": "18",
        "nome": "Assistente de Direção"
      },
      {
        "id_cargo": "17",
        "nome": "Auxiliar de coordenação"
      },
      {
        "id_cargo": "1",
        "nome": "Coordenador"
      },
      {
        "id_cargo": "19",
        "nome": "Enfermeira"
      },
      {
        "id_cargo": "3",
        "nome": "Estagiário"
      },
      {
        "id_cargo": "2",
        "nome": "Professor"
      },
      {
        "id_cargo": "20",
        "nome": "Secretária"
      }
    ],
  "10": [
      {
        "id_cargo": "22",
        "nome": "Assistente"
      },
      {
        "id_cargo": "21",
        "nome": "Produção Multimídia"
      }
  ]
}