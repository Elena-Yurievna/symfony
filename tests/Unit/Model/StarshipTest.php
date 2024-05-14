<?php
namespace App\Tests\Unit\Model;

use App\Model\Starship;
use App\Model\StarshipStatusEnum;
use PHPUnit\Framework\TestCase;
class StarshipTest extends TestCase
{
    /**
     * @return void
     */
    public function testCanGetAndSetData(): void
    {
        $ship = new Starship(
            2,
            'USS Espresso (NCC-1234-C)',
            'Latte',
            'James T. Quick!',
            StarshipStatusEnum::COMPLETED
        );

        self::assertSame(2, $ship->getId());
        self::assertSame('USS Espresso (NCC-1234-C)', $ship->getName());
        self::assertSame('Latte', $ship->getClass());
        self::assertSame('James T. Quick!', $ship->getCaptain());
        self::assertEquals(StarshipStatusEnum::COMPLETED, $ship->getStatus());
    }
}