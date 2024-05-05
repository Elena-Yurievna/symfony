<?php
namespace App\Repository;

use App\Model\Starship;
use Psr\Log\LoggerInterface;

class StarshipRepository
{
    /**
     * @param LoggerInterface $logger
     */
    public function __construct(private LoggerInterface $logger)
    {
    }

    /**
     * @return Starship[]
     */
    public function findAll(): array
    {
        $this->logger->info('Starship collection retrieved');

        return [
            new Starship(
                1,
                'USS LeafyCruiser (NCC-0001)',
                'Garden',
                'Jean-Luc Pickles',
                'taken over by Q'
            ),
            new Starship(
                2,
                'USS Espresso (NCC-1234-C)',
                'Latte',
                'James T. Quick!',
                'repaired',
            ),
            new Starship(
                3,
                'USS Wanderlust (NCC-2024-W)',
                'Delta Tourist',
                'Kathryn Journeyway',
                'under construction',
            ),
        ];
    }

    /**
     * @param int $id
     * @return Starship|null
     */
    public function find(int $id): ?Starship
    {
        foreach ($this->findAll() as $starship)
        {
            if ($starship->getId() === $id) {
                return $starship;
            }
        }

        return null;
    }
}