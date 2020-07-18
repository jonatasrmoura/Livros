<?php 
    class Livro {
        private $novo;
        private $tipo;   
        private $editora;
        private $nome;
        private $autor;

        // Método Construtor
        public function Livro($t, $ed, $n, $a) {
            $this->tipo = $t;
            $this->editora = $ed;
            $this->nome = $n;
            $this->autor = $a;
            $this->livroNovo(); 
        }

        public function livroNovo() {
            $this->novo = true;
        }

        public function getTipo() {        
            return $this->tipo;
        }

        public function setTipo($t) {
            $this->tipo = $t;
        }

        public function getEditora() {
            return $this->editora;
        }

        public function setEditora($ed) {
            $this->editora = $ed;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome($n) {
            $this->nome = $n;
        }

        public function getAutor() {
            return $this->autor;
        }

        public function setAutor($a) {
            $this->autor = $a;
        }
    }
?>