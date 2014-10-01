<?php
/* Inclui a classe */
require 'classes/TutsupRedimensionaImagem.php';

/* Cria a instancia da classe */
$imagem = new TutsupRedimensionaImagem();

/* Configura a imagem que vamos redimensionar */
$imagem->imagem = 'imagens/teste.png';

/* 
Configura a imagem de destino. Se você for apenas exibir uma imagem
temporária, comente esta linha
*/
$imagem->imagem_destino = 'arquivos/nova_imagem.png';

/* 
Se uma largura for definida, você pode deixar a classe calcular o aspect 
ratio da imagem deixando a altura zerada. O mesmo vale para a largura, porém,
uma altura deverá existir (uma das duas deve ser definida).

Você também pode configurar as duas, neste caso você força a imagem a ter o 
tamanho desejado
*/
$imagem->largura = 520;

/* A nova altura será gerada automaticamente. */
$imagem->altura = 0;

/* Qualidade de 0 a 100 */
$imagem->qualidade = 100;

/* Gera a nova imagem */
$nova_imagem = $imagem->executa();

/* Se não for uma imagem temporária, você poderá exibi-la assim */
if ( $imagem->imagem_destino && $nova_imagem ) {
    echo "<img src='{$nova_imagem}'>";
}

/* Se você quiser ver se algum erro ocorreu, utilize o seguinte. */
if ( $imagem->erro ) echo $imagem->erro;
?>