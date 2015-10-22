<?php
namespace Transport;

interface TransportInterface
{
    public function getName();
    public function setName($name);
    public function getModel();
    public function setModel($model);
    public function getMaxSpeed();
    public function setMaxSpeed($maxSpeed);
    public function printAllInfo();
}