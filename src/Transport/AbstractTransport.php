<?php
namespace Transport;

abstract class AbstractTransport
{
    public abstract function getName();
    public abstract function setName($name);
    public abstract function getModel();
    public abstract function setModel($model);
    public abstract function getMaxSpeed();
    public abstract function setMaxSpeed($maxSpeed);
    public abstract function printAllInfo();
}