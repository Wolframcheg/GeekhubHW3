<?php
namespace Transport;

class Plane extends AbstractTransport
{
    use ShortInfo;

    protected $name;
    protected $model;
    protected $crew;
    protected $maxSpeed;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @param $crew
     */
    public function setCrew($crew)
    {
        $this->crew = $crew;
    }

    /**
     * @return mixed
     */
    public function getCrew()
    {
        return $this->crew;
    }

    /**
     * @param $maxSpeed
     */
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }

    /**
     * @return mixed
     */
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    public function printAllinfo()
    {
        $str = 'Name: ' . $this->getName() . "<br>\n";
        $str .= 'Model: ' . $this->getModel() . "<br>\n";
        $str .= 'Crew: ' . $this->getCrew() . "<br>\n";
        $str .= 'Max speed: ' . $this->getMaxSpeed() . "km/h <br>\n";
        print_r($str);
    }
}