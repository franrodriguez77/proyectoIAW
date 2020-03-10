<?php

namespace ecuaciones\modelo;

use PHPUnit\Framework\TestCase;

class EcuacionGrado2Test extends TestCase
{

    public function testCalcular()
    {
        $testeador = new EcuacionGrado2(2,3,5);

        $x0y5 = $testeador->calcular(0);
        $this->assertEquals(5,$x0y5);

        $x1y10 = $testeador->calcular(1);
        $this->assertEquals(10,$x1y10);

        $x2y19 = $testeador->calcular(2);
        $this->assertEquals(19,$x2y19);

        $x3y32 = $testeador->calcular(3);
        $this->assertEquals(32,$x3y32);
    }

}
