<?php
//  a classe é a representação do objeto

class index
{
    // propriedades da classe
    // modificador de acesso
    // public
    // e private e protected
    public $nome;
    public $idade;
    public $peso;
    public $altura;
}


// criando um novo objeto chamado index
new index();

// atribuindo a variavel;

$objeto = new index();

// para acessar atributos de uma classe usasse o -> como se fosse
// uma seta mesmo

echo ($conta->nome);
