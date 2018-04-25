<?php
///**
// * Created by PhpStorm.
// * User: dev05
// * Date: 25/04/2018
// * Time: 09:50
// */
//#cabeçalho da página
//
// if(isset($_POST['nome'])) {
//
//     $nome = $_POST['nome'];
//
//     $estado = $_POST['estado'] ;
//
//     $valor = $_POST['valor'];
//
//     $email = $_POST['email'];
// }
//
//
//
//#versao do encoding xml
//
//$dom = new DOMDocument("1.0", "ISO-8859-1");
//
//
//$propriedade = $dom->createAttribute('Nomenclatura');
//
//#retirar os espacos em branco
//
//$dom->preserveWhiteSpace = false;
//
//#gerar o codigo
//
//$dom->formatOutput = true;
//
//#criando o nó principal (root)
//
//$root = $dom->createElement("agenda");
//
//
//#nó filho (contato)
//
//$contato = $dom->createElement("contato");
//$contato->setAttribute('Id', 'Identificação');
//
//
//#setanto nomes e atributos dos elementos xml (nós)
//
//
//    $nome = $dom->createElement("nome", "$nome");
//    $estado = $dom->createElement("estado", "$estado");
//    $valor = $dom->createElement("valor", "$valor");
//    $email = $dom->createElement("email", "$email");
//    $novo = $dom->createElement("novo", "$novo");
//
//#adiciona os nós (informacaoes do contato) em contato
//
//$contato->appendChild($nome);
//$contato->appendChild($estado);
//$contato->appendChild($valor);
//$contato->appendChild($email);
//$contato->appendChild($novo);
//
//
//#adiciona o nó contato em (root) agenda
//
//$root->appendChild($contato);
//
//$dom->appendChild($root);
//
//# imprime o xml na tela
//
//
//echo $result = $dom->saveXML();
//
//
//
//# Para salvar o arquivo, descomente a linha
//
//$dom->save("contatos.xml");
//
//
//
//
//
//$dom->load("contatos.xml");
//
//$x = $dom->documentElement;
//foreach ($x->childNodes AS $item) {
//
//
//
//}
//$dom->save("contatos.xml");
//
//
//
//
//
//
//header("Content-Type: text/xml");
//
//
//
//
//






if(!file_exists("id_xml.txt")) {
// Abre ou cria o arquivo id_xml.txt
// "a" representa que o arquivo é aberto para ser escrito
    $file = "id_xml.txt";

    $fp = fopen($file, "a");

// Escreve "exemplo de escrita" no bloco1.txt
    $write = fwrite($fp, "Id = 1");

// Fecha o arquivo
    fclose($fp);
} else {

    $read = fread($file);






    //to do
}











