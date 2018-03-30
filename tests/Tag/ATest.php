<?php

namespace Solid\Html\Tag;

use Solid\Html\Tag\A;
use Solid\Html\Attributes;

class ATest extends \PHPUnit\Framework\TestCase
{
    public function testCriarTagAComHrefEAncora()
    {
        $a = new A(new Attributes,'http://www.example.com.br', 'meu site');

        $this->assertEquals('<a href="http://www.example.com.br">meu site</a>', $a);
    }

    public function testCriarTagAComHrefEAncoraEAtributosOpcionais()
    {
        $optional_attrs = [
            "class" => "btn btn-default",
            "data-modal" => "#login",
            "id" => "login"
        ];

        $a = new A(new Attributes,'http://www.example.com.br', 'login');
        $a->attributes($optional_attrs);

        $this->assertEquals('<a href="http://www.example.com.br" class="btn btn-default" data-modal="#login" id="login">login</a>', $a);
    }
}