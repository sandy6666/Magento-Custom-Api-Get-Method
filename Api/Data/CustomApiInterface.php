<?php


namespace Sandesh\CustomApi\Api\Data;


interface CustomApiInterface
{
    /**
     * @return string
     */
    public function getSampleData();

    /**
     * @param string $data
     * @return string
     */
    public function setSampleData($data);
}
