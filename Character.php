<?php

class Character
{

    const NOVICE = 1;

    const MEDIUM = 2;

    const EXPERT = 3;

    private ?string $name = null;


    private int $hp = 100;

    private int $xp = 0;


    public function __construct($name, $xp)
    {
        $this->name = $name;
        $this->xp = $xp;
    }

    public function sayHello(Character $opponent): string
    {
        return "{$this->name} salue {$opponent->getName()}";
    }

    public function attack(Character $opponent):self
    {
        switch ($this->xp)
        {
            case self::NOVICE:
                $opponent->setHp( $opponent->getHp() - 10 );
                break;

            case self::MEDIUM:
                $opponent->setHp( $opponent->getHp() - 20 );
                break;

            case self::EXPERT:
                $opponent->setHp( $opponent->getHp() - 30 );
                break;
        }

        return $this;
    }

    public function superAttack(Character $opponent):self
    {
        $this->attack($opponent, 2);
        return $this;
    }

    public function secretAttack():self
    {
    }

    public function health():self
    {
        return $this;
    }

    public function levelUp():self
    {
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name):self
    {
        $this->name = $name;
        return $this;
    }

    public function getHp(): int
    {
        return $this->hp;
    }

    public function setHp(int $hp):self
    {
        $this->hp = $hp;
        return $this;
    }

    public function getXp(): int
    {
        return $this->xp;
    }

    public function setXp(int $hp):self
    {
        $this->xp = $xp;
        return $this;
    }



}

