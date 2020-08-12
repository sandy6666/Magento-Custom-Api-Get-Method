<?php


namespace Sandesh\CustomApi\Api;


interface CustomApiRepositoryInterface
{
    /**
     * @return \Sandesh\CustomApi\Api\Data\CustomApiInterface
     */
    public function getData();
}
