<?php

class Livro {

    public $titulo;
    public $autor;
    public $paginas;
    public $ano_publicacao;

    public function __construct($titulo, $autor, $paginas, $ano_publicacao) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->paginas = $paginas;
        $this->ano_publicacao = $ano_publicacao;
    }

    public function exibirInformacoes() {
        echo "Título: $this->titulo , Autor: $this->autor , Páginas: $this->paginas , Ano de Publicação: $this->ano_publicacao ";
        echo "<hr>";
    }
}

$livro1 = new Livro("Dom Casmurro", "Machado de Assis", 256, 1899);

$livro1->exibirInformacoes();

$livro2 = new Livro("Memórias Póstumas de Brás Cubas", "Machado de Assis", 389, 1881);

$livro2->exibirInformacoes();

?>