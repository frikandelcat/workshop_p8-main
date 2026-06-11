<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Calculator;
use InvalidArgumentException;

class CalculatorTest extends TestCase
{
    private Calculator $calculator;

    protected function setUp(): void
    {
        // Deze methode wordt vóór elke test uitgevoerd.
        // Hier maken we één keer een nieuwe Calculator aan
        // zodat elke test met een "schone" situatie begint.
        $this->calculator = new Calculator();
    }

    /* =========================
     * BASIC OPERATIONS
     * ========================= */

    public function testAdd()
    {
        // Arrange
        $a = 5;
        $b = 3;

        // Act
        $result = $this->calculator->add($a, $b);

        // Assert
        $this->assertEquals(8, $result);
    }

    /*
     * OPDRACHT:
     * Maak hieronder een test voor:
     * - optellen met negatieve getallen
     *
     * Denk aan:
     * - Arrange
     * - Act
     * - Assert
     */

    public function testAddNegative()
    {
        // Arrange
        $a = -5;
        $b = -3;

        // Act
        $result = $this->calculator->add($a, $b);

        // Assert
        $this->assertEquals(-8, $result);
    }

    /*
     * OPDRACHT:
     * Maak een test voor subtract().
     * Test een normale situatie (bijvoorbeeld 10 - 4).
     */

    /*
     * OPDRACHT:
     * Maak een test voor multiply().
     * Test:
     * - een normale vermenigvuldiging
     * - vermenigvuldigen met 0
     */

    /*
     * OPDRACHT:
     * Maak een test voor divide().
     * Test:
     * - een normale deling
     * - delen door 0 moet een InvalidArgumentException geven
     *
     * Tip voor exception test:
     * $this->expectException(InvalidArgumentException::class);
     */

    /* =========================
     * POWER
     * ========================= */

    /*
     * OPDRACHT:
     * Maak een test voor power().
     * Test:
     * - 2 tot de macht 3
     * - exponent 0 (uitkomst moet 1 zijn)
     */

    /* =========================
     * PERCENTAGE
     * ========================= */

    /*
     * OPDRACHT:
     * Maak tests voor percentage().
     * Test:
     * - 10% van 200
     * - 0%
     * - een percentage boven de 100%
     */

    /* =========================
     * AVERAGE
     * ========================= */

    /*
     * OPDRACHT:
     * Maak tests voor average().
     * Test:
     * - gemiddelde van 2 getallen
     * - gemiddelde van meerdere getallen
     * - lege array moet een exception geven
     */

    /* =========================
     * HIGHEST
     * ========================= */

    /*
     * OPDRACHT:
     * Maak tests voor highest().
     * Test:
     * - normale getallen
     * - negatieve getallen
     */

    /* =========================
     * LOWEST
     * ========================= */

    /*
     * OPDRACHT:
     * Maak tests voor lowest().
     * Test:
     * - normale getallen
     * - decimalen
     */
}
