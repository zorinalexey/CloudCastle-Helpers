<?php

declare(strict_types = 1);

namespace Unit\CloudCastle\Tests\Helpers;

use PHPUnit\Framework\TestCase;
use CloudCastle\Helpers\Format;

/**
 * Класс FormatTest
 * @version 0.0.1
 * @package Unit\CloudCastle\Tests\Helpers\FormatTest
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
class FormatTest extends TestCase
{

    public function testCheckDate()
    {
        $date = Format::date();
        $this->assertEquals(date('d.m.Y'), $date);
    }

    public function testCheckPhone()
    {
        $phone = Format::phone('8 (999) 111-22-22');
        $this->assertEquals('+7 (999) 111-22-22', $phone);
    }

}
