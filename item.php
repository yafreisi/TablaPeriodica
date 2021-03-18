<?php
class Item
{
    private $index;
    private $name;
    private $isCheck;
    private $short;

    function __constructor($index, $short, $name, $isCheck)
    {
        $this->index = $index;
        $this->name = $name;
        $this->isCheck = $isCheck;
        $this->short = $short;
    }

    public function getIndex()
    {
        return $this->index;
    }
    public function setIndex($index)
    {
        $this->index = $index;
        return $this;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    public function getIsCheck()
    {
        return $this->isCheck;
    }
    public function setIsCheck($isCheck)
    {
        $this->isCheck = $isCheck;
        return $this;
    }
    public function getShort()
    {
        return $this->short;
    }
    public function setShort($short)
    {
        $this->short = $short;
        return $this;
    }
}
