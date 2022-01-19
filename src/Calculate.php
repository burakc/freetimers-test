<?php
namespace TestApp;

use TestApp\Config;
use mysqli;

class Calculate
{
    private $measurementUnit; //(metres, feet, or yards)
    private $depthMeasurementUnit; //(centimetres or inches)
    private $dimensions; //(width, length, and depth)
    private $result; //

    public function setMeasurementUnit($unit)
    {
        $this->measurementUnit = $unit;
        return $this->measurementUnit;
    }

    public function setDepthMeasurementUnit($unit)
    {
        $this->depthMeasurementUnit = $unit;
        return $this->depthMeasurementUnit;
    }

    public function setDimensions($width, $length, $depth=1.4)
    {
        $this->dimensions = [
            'width' => $width,
            'length' => $length,
            'depth' => $depth
        ];

        return $this->dimensions;
    }

    public function calculateBags()
    {
        $x = $this->dimensions['width'] * $this->dimensions['length'] * 0.025;
        $y = $this->dimensions['depth'] * $x;

        $result = ceil($y);
        $this->result = $result;

        return $result;
    }

    public function saveResultsToDB()
    {
        $conn = new mysqli(Config::DBHOST, Config::DBUSER, Config::DBPWD, Config::DBNAME);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO results (width, length, measurement, depth_measurement, result)
        VALUES ('".
            $this->dimensions['width']."', '".
            $this->dimensions['length']."', '".
            $this->measurementUnit."', '".
            $this->depthMeasurementUnit."', '".
            $this->result.
            "')";

        if ($conn->query($sql) === true) {
            $id = $last_id = $conn->insert_id;
            $conn->close();
            return $id;
        } else {
            $conn->close();
            //echo "Error: " . $sql . "<br>" . $conn->error;
            return false;
        }
    }

}
