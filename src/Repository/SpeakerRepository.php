<?php
/**
 *
 *
 * @author Asier Marqués <asiermarques@gmail.com>
 */
namespace Bilbostack\Repository;

use Symfony\Component\Yaml\Yaml;

class SpeakerRepository{

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

    function getSpeakerDataBySlug($slug)
    {
        if(!is_array($this->data))
            return null;

        foreach ($this->data as $data)
        {
            if($data["slug"]==$slug)
                return $data;
        }

        return null;
    }


}