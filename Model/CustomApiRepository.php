<?php
/**
 *
 * @package     Sandesh
 * @author      Sandesh
 * @license     https://opensource.org/licenses/OSL-3.0 Open Software License v. 3.0 (OSL-3.0)
 * @link        https://www.sandeshs.in/
 */

namespace Sandesh\CustomApi\Model;

use Sandesh\CustomApi\Api\CustomApiRepositoryInterface;
use Sandesh\CustomApi\Api\Data\CustomApiInterface;
use Sandesh\CustomApi\Api\Data\CustomApiInterfaceFactory;

class CustomApiRepository implements CustomApiRepositoryInterface
{
    /**
     * @var CustomApiInterfaceFactory
     */
    private $customApiInterfaceFactory;

    /**
     * CustomApiRepository constructor.
     * @param CustomApiInterfaceFactory $customApiInterfaceFactory
     */
    public function __construct(
        CustomApiInterfaceFactory $customApiInterfaceFactory
    ) {
        $this->customApiInterfaceFactory = $customApiInterfaceFactory;
    }

    /**
     * @inheritDoc
     */
    public function getData()
    {
        /** @var CustomApiInterface $data */
        $data = $this->customApiInterfaceFactory->create();
        $data->setSampleData('Hello World');
        return $data;
    }
}
