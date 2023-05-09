<?php class Disciplina
{
    private $codigo;
    private $nome;
    private $professorResponsavel;
    private $cargaHorariaTotal;
    private $turmas;
    private $ementa;


    // Constructor
    public function __construct()
    {
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }
    public function setProfessorResponsavel($professorResponsavel)
    {
        $this->professorResponsavel = $professorResponsavel;
    }
    public function setCargaHorariaTotal($cargaHorariaTotal)
    {
        $this->cargaHorariaTotal = $cargaHorariaTotal;
    }
    public function setTurmas($turmas)
    {
        $this->turmas = $turmas;
    }
    public function setEmenta($ementa)
    {
        $this->ementa = $ementa;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getCodigo()
    {
        return $this->codigo;
    }
    public function getProfessorResponsavel()
    {
        return $this->professorResponsavel;
    }
    public function getCargaHorariaTotal()
    {
        return $this->cargaHorariaTotal;
    }
    public function getTurmas()
    {
        return $this->turmas;
    }
    public function getEmenta()
    {
        return $this->ementa;
    }


    function imprimir()
    {
        echo "Nome : " . $this->nome;
        echo "<br>Professor Responsavel : " . $this->professorResponsavel;
        echo "<br>Carga horaria total : " . $this->cargaHorariaTotal;
        echo "<br>Turmas : " . $this->turmas;
        echo "<br>Ementa : " . $this->ementa;
    }
}
