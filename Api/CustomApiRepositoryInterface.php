<?php
/**
 *
 * @package     Sandesh
 * @author      Sandesh
 * @license     https://opensource.org/licenses/OSL-3.0 Open Software License v. 3.0 (OSL-3.0)
 * @link        https://www.sandeshs.in/
 */

namespace Sandesh\CustomApi\Api;


interface CustomApiRepositoryInterface
{
    /**
     * @return \Sandesh\CustomApi\Api\Data\CustomApiInterface
     */
    public function getData();
}
