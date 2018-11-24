<?php
/**
 *
 *
 * @author Asier Marqués <asiermarques@gmail.com>
 */
namespace Bilbostack\Repository;

use Symfony\Component\Yaml\Yaml;

class SponsorRepository{

    private $data;

    function __construct($yaml_file)
    {
        if(!file_exists($yaml_file))
            throw new \Exception("Unable to load data file");

        $this->data = Yaml::parse(file_get_contents($yaml_file));
    }

    function getData()
    {
        return $this->data;
    }



}