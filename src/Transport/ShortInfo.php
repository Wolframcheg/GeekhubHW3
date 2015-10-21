<?php
namespace Transport;

trait ShortInfo
{
    public function printShortInfo()
    {
        echo $this->getName() . ' ' . $this->getModel() . "<br>\n";
    }
}

