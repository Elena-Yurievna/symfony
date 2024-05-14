<?php

namespace App\Model;

class Starship
{
    /**
     * @param int $id
     * @param string $name
     * @param string $class
     * @param string $captain
     * @param StarshipStatusEnum $status
     */
    public function __construct(
        private int $id,
        private string $name,
        private string $class,
        private string $captain,
        private StarshipStatusEnum $status,
    )
    {

    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getClass(): string
    {
        return $this->class;
    }

    /**
     * @return string
     */
    public function getCaptain(): string
    {
        return $this->captain;
    }

    /**
     * @return string
     */
    public function getStatusString(): string
    {
        return $this->status->value;
    }

    /**
     * @return StarshipStatusEnum
     */
    public function getStatus(): StarshipStatusEnum
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getStatusImageFilename(): string
    {
        return match ($this->status) {
            StarshipStatusEnum::WAITING => 'images/status-waiting.png',
            StarshipStatusEnum::IN_PROGRESS => 'images/status-in-progress.png',
            StarshipStatusEnum::COMPLETED => 'images/status-complete.png',
        };
    }
}
