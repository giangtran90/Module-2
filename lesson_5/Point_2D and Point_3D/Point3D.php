<?php
namespace Point_3D;

use Point_2D\Point2D;

class Point3D extends Point2D
{
    public float $z;

    public function __construct(float $ts_x = 0,float $ts_y = 0,float $ts_z = 0)
    {
        parent::__construct($ts_x, $ts_y);
        $this->z = $ts_z;
    }

    public function getZ(): float
    {
        return $this->z;
    }
    public function setZ(float $ts_z): void
    {
        $this->z = $ts_z;
    }
    public function setXYZ(float $ts_x, float $ts_y, float $ts_z): void
    {
        $this->arrayXYZ[] = [$ts_x, $ts_y, $ts_z];
    }
    public function getXYZ(): array
    {
        return $this->arrayXYZ;
    }
    public function __toString(): string
    {
        $string = "";
        foreach($this->getXYZ() as $value) {
            $string .= "X = " . $value[0] .  ". Y = " . $value[1] . ". Z = " . $value[2] ."<br/>";
        }
        return $string;
    }
}
?>