<!-- Requisito 4.
Busca todas as atividades cadastradas pelo RA. -->

<?php
  require_once("db.class.php");
  $objDb = new db();
	$link = $objDb->conecta_mysql();

  $RA = 1234234
  $sql = "SELECT titulo, carga_hr, ano,
                (SELECT tipo_atividade.tipo
                  FROM  tipo_atividade
                  WHERE atividade.tipo = tipo_atividade.id) AS Tipo
          FROM atividade
          WHERE atividade.RA = $RA
          ORDER BY atividade.ano";

  $retorno = mysqli_query($link, $sql);
  echo $retorno;

  $titulo = mysqli_fetch_array($retorno);
  $cargca_hr = mysqli_fetch_array($retorno);
  $ano =  mysqli_fetch_array($retorno);
  $tipo = mysqli_fetch_array($retorno);

  var_dump($titulo);
  var_dump($cargca_hr);
  var_dump($ano);
  var_dump($tipo);

  $_SESSION['titulo'] = $titulo['titulo'];
  $_SESSION['carga_hr'] = $cargca_hr['carga_hr'];
  $_SESSION['ano'] = $ano['ano'];
  $_SESSION['tipo'] = $tipo['tipo'];

  echo <script src="_js/busca_lista_ativ.js">lista_ativ($titulo, $cargca_hr, $ano, $tipo)</script>

  $objDb->desconecta_mysql();
 ?>
