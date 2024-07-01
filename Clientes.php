<?php
class Clientes {
   private $cod_cliente;
   private $nome;
   private $endereco;
   private $cidade;
   private $CEP;
   private $UF;
   private $pais;
   private $telefone;

    //NOME= VERIFY
    function set_nome($nome) {
        $this->nome = $nome;
    }
    function get_nome() {
        return $this->nome;
    }
    //NOME=

    //ENDERECO= VERIFY
    function set_endereco($endereco) {
        $this->endereco = $endereco;
    }
    function get_endereco($endereco) {
        $this->endereco = $endereco;
    }
    //ENDERECO=

    //CIDADE= VERIFY
    function set_cidade($cidade) {
        $this->cidade = $cidade;
    }
    function get_cidade($cidade) {
        $this->cidade = $cidade;
    }
    //CIDADE= 

    //CEP=
    function set_CEP($CEP) {
        $this->CEP = $CEP;
    }
    //CEP=

    //UF=
    function set_UF($UF) {
        $this->UF = $UF;
    }
    //UF=

    //PAIS=
    function set_pais($pais) {
        $this->pais = $pais;
    }
    //PAIS=

    //TELEFONE=
    function set_telefone($telefone) {
        $this->telefone = $telefone;
    }
    //TELEFONE=
}
?>

