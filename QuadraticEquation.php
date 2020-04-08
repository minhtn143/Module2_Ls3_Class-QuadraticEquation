<?php


class QuadraticEquation
{
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    /**
     * @return mixed
     */
    public function getA()
    {
        return $this->a;
    }

    /**
     * @return mixed
     */
    public function getB()
    {
        return $this->b;
    }

    /**
     * @return mixed
     */
    public function getC()
    {
        return $this->c;
    }

    public function getDiscriminant()
    {
        return pow($this->getB(), 2) - 4 * $this->getA() * $this->getC();
    }

    public function getRoot1()
    {
        return (-$this->getB() + sqrt($this->getDiscriminant())) / 2 * $this->getA();
    }

    public function getRoot2()
    {
        return (-$this->getB() - sqrt($this->getDiscriminant())) / 2 * $this->getA();
    }
}