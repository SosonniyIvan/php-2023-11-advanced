<?php

require_once __DIR__ . '/vendor/autoload.php';

class Rgb
{
    private int $red;

    private int $green;

    private int $blue;

    public function __construct($red, $green, $blue)
    {
        $this->setRed($red);
        $this->setGreen($green);
        $this->setBlue($blue);
    }



    /**
     * @return int
     */
    public function getRed(): int
    {
        return $this->red;
    }

    /**
     * @return int
     */
    public function getBlue(): int
    {
        return $this->blue;
    }

    /**
     * @return int
     */
    public function getGreen(): int
    {
        return $this->green;
    }

    /**
     * @param int $red
     * @throws Exception
     */
    public function setRed(int $red): void
    {
        if($red < 0 || $red > 255) {
            throw new ErrorException('Not right feature');
        }
        $this->red = $red;
    }

    /**
     * @param int $blue
     * @throws Exception
     */
    public function setBlue(int $blue): void
    {
        if($blue < 0 || $blue > 255) {
        throw new ErrorException('Not right feature');
    }
        $this->blue = $blue;
    }

    /**
     * @param int $green
     * @throws Exception
     */
    public function setGreen(int $green): void
    {
        if($green < 0 || $green > 255) {
            throw new ErrorException('Not right feature');
        }
        $this->green = $green;
    }


     public function equals($object1, $object2): bool
    {
       return
           $object1->getRed() === $object2->getRed()
           &&
           $object1->getBlue() === $object2->getBlue()
           &&
           $object1->getGreen() === $object2->getGreen();
    }

    static public function random(): Rgb
    {
        $red = rand(0, 255);

        $green = rand(0, 255);

        $blue = rand(0, 255);

        return new Rgb($red, $green, $blue);
    }

    public function mix(Rgb $color): Rgb
    {
        $mixedRed = ($this->red + $color->red) / 2;

        $mixedGreen = ($this->green + $color->green) / 2;

        $mixedBlue = ($this->blue + $color->blue) / 2;

        return new Rgb($mixedRed, $mixedGreen, $mixedBlue);

    }
}

$color = new Rgb(255,100,100);

$mixedColor = $color->mix(new Rgb(100, 100, 100));

$randomColor = $color->random();

$difference = $color->equals($color, $color);

dd($color, $mixedColor, $randomColor, $difference);
