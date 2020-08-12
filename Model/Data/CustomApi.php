<?php
/**
 *
 * @package     Sandesh
 * @author      Sandesh
 * @license     https://opensource.org/licenses/OSL-3.0 Open Software License v. 3.0 (OSL-3.0)
 * @link        https://www.sandeshs.in/
 */

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
