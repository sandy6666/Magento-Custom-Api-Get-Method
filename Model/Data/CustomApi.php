<?php

namespace Sandesh\CustomApi\Model\Data;

use Magento\Framework\DataObject;
use Sandesh\CustomApi\Api\Data\CustomApiInterface;

class CustomApi extends DataObject implements CustomApiInterface
{

    /**
     * @inheritDoc
     */
    public function getSampleData()
    {
        return $this->getData('sample_data');
    }

    /**
     * @inheritDoc
     */
    public function setSampleData($data)
    {
        return $this->setData('sample_data', $data);
    }
}
