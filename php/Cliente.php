<?php class Cliente
{
    private $nome;
    private $cpf;
    private $dataNasc;
    private $endereco;
    private $email;
    private $telefone;

    // Constructor
    public function __construct()
    {
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }
    public function setDataNasc($dataNasc)
    {
        $this->dataNasc = $dataNasc;
    }
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getCpf()
    {
        return $this->cpf;
    }
    public function getDataNasc()
    {
        return $this->dataNasc;
    }
    public function getEndereco()
    {
        return $this->endereco;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getTelefone()
    {
        return $this->telefone;
    }

    function verificarMaiorIdade()
    {
        // $str = $this->dataNasc;

        // $arr1 = str_split($str, 6);

        if ($this->dataNasc > 2005) {
            echo "O cliente . " . $this->nome . " é menor de Idade";
        } else if ($this->dataNasc < 2005) {
            echo "O cliente . " . $this->nome . " é maior de Idade";
        }
    }

    function imprimir()
    {
        echo "Nome : " . $this->nome;
        echo "<br>CPF : " . $this->cpf;
        echo "<br>Data Nasc : " . $this->dataNasc;
        echo "<br>Endereco : " . $this->endereco;
        echo "<br>Email : " . $this->email;
        echo "<br>Telefone : " . $this->telefone;
    }
}
