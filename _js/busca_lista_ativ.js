// Requisito 4.
// Apresenta todas as atividades cadastradas buscada pelo RA.

cont_lst_atv = 1;
function lista_ativ(titulo, carga_hr, ano, tipo){

  for(i = 0; i < titulo.length; i++){
    nova_linha(titulo[i],carga_hr[i],ano[i],tipo[i]);
  }
}

function nova_linha(titulo, carga_hr, ano, tipo){

  // novo input #
  var tag_input = document.createElement('input');
  tag_input.setAttribute('type','number');
  tag_input.setAttribute('nome','#'+cont_lst_atv);
  tag_input.setAttribute('placeholder',cont_lst_atv);

  // novo input titulo
  var titulo_input = document.createElement('input');
  titulo_input.setAttribute('type','text');
  titulo_input.setAttribute('nome','titulo'+cont_lst_atv);
  titulo_input.setAttribute('placeholder',titulo);

  // novo input carga_hr
  var carga_hr_input = document.createElement('input');
  carga_hr_input.setAttribute('type','number');
  carga_hr_input.setAttribute('nome','carga_hr'+cont_lst_atv);
  carga_hr_input.setAttribute('placeholder',carga_hr);

  // novo input ano
  var ano_input = document.createElement('number');
  ano_input.setAttribute('type','text');
  ano_input.setAttribute('nome','ano'+cont_lst_atv);
  ano_input.setAttribute('placeholder',ano);

  // novo input tipo
  var tipo_input = document.createElement('input');
  tipo_input.setAttribute('type','text');
  tipo_input.setAttribute('nome','tipo'+cont_lst_atv);
  tipo_input.setAttribute('placeholder',tipo);

  // novas celulas
  var celtag = document.createElement('td');
  var celtitulo = document.createElement('td');
  var celcarga_hr = document.createElement('td');
  var celano = document.createElement('td');
  var celtipo = document.createElement('td');

  // add input's nas celulas
  celtag.appendChild(tag_input);
  celtitulo.appendChild(carga_hr_input);
  celcarga_hr.appendChild(carga_hr_input);
  celano.appendChild(ano_input);
  celtipo.appendChild(tipo_input);

  // nova linha
  var linha = document.createElement('tr');
  linha.setAttribute('id','linha'+cont_lst_atv);

  // adiciona celulas na linha
  linha.appendChild(celtag);
  linha.appendChild(celtitulo);
  linha.appendChild(celcarga_hr);
  linha.appendChild(celano);
  celtipo.appendChild(tipo_input);

  // adiciona linha na tabela
  var tabela = document.getElementById('tabela-atividades');
  tabela.appendChild(linha);

  cont_lst_atv++;
}
