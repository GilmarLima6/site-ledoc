
<!DOCTYPE html>
    <html lang="pt-br">
        <head>

            <meta charset="UTF-8">
            <title>Licenciatura em Educação do Campo - IFRN/ Campus Canguaretama</title>
            <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/style.css">
            <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css">
            <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
			
            <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
			<script src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>
            
			<script src="bootstrap-3.3.7-dist/js/script.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			<link href='https://fonts.googleapis.com/css?family=Almendra SC' rel='stylesheet'>
            <style>
                @import url('https://fonts.googleapis.com/css?family=Playfair+Display|Ropa+Sans');
            </style>
        </head>

        <body class="">

                <div class="container text-center bg-info col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <!--=========================================================================================
                                                ADCIONANDO MENU SUPERIOR
                    ============================================================================================-->
                    <?php include "paginas/cabecalho_menu_superior.php"; ?>
                    <!--=========================================================================================
                                                FIM DO MENU SUPERIOR
                    ============================================================================================-->




                    <!--=========================================================================================
                                               ADCIONANDO MENU LATERAL
                    ============================================================================================-->
                    <?php include "paginas/menu_lateral.php"; ?>
                    <!--=========================================================================================
                                              FIM DO MENU LATERAL
                    ============================================================================================-->




                    <!--=========================================================================================
                                                ADICIONANDO JANELA MODAL PARA CADASTRO
                    ============================================================================================-->
                    <?php include "paginas/area_cadastro.php";?>
                    <!--=========================================================================================
                                                FIM DA JANELA MODAL PARA CADASTRO
                    ============================================================================================-->
                    <div class="row col-md-9 col-sm-12 col-xs-12 col-lg-9 center-block thumbnail">

                        <div class="thumbnail">

                            <h1><p class="text-center" >PÁGINA INICIAL</p></h1>
						</div>
						
						
							<!--Div base para surgir na pagina inicial quando o coordenador(a) fizer uma publicação-->
                            <?php
                            include "banco/conexao.php";
                            $sql = mysqli_query($conexao, "select * from upload_coord where post = 1 order by id_postagem desc");

                            while($line = mysqli_fetch_array($sql)) {
                                $matricula = $line['matricula'];
                                $titulo = $line['titulo'];
                                $imagem = $line['imagem'];
                                $conteudo = $line['arquivo'];
                                $id = $line['id'];
                            ?>
                            <div class="radio">
                                <div class="thumbnail col-md-12">

                                    <div class="media">
                                        <div class="media-left col-md-2 col-lg-2 col-sm-2 col-xs-2">
                                            <img src="paginaslateral/arquivos_coordenador/arquivo_postagem/<?php echo $matricula . "/postagem" . $id . "/" . $imagem; ?>"
                                                 class="media-object" style="width:100%">
                                        </div>
                                        <div class="media-body">
                                            <h2 class="media-heading"><a href="iniciopost.php"><?php echo $titulo; ?></a></h2>
                                            <p></p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--Fim-->
                            <?php
                            }
                            ?>


                    </div>

                </div>

                <?php include "paginas/rodape.php"; ?>

        </body>
    </html>
