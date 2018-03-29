<?php

namespace Solid\Html\Tag;

use Solid\Html\Attributes;

class ImgTest extends \PHPUnit\Framework\TestCase
{
    public function testCriarTagImgComSrc()
    {
        $img = new Img('img/photo.png');

        $this->assertEquals('<img src="img/photo.png">', $img);
    }

    public function testCriarTagImgComSrcEAtributoOpcional()
    {
        $optional_attrs = new Attributes([
            "class" => "img-responsive"
        ]);

        $img = new Img('img/photo.png');
        $img->attributes($optional_attrs);

        $this->assertEquals('<img src="img/photo.png" class="img-responsive">', $img);
    }
}