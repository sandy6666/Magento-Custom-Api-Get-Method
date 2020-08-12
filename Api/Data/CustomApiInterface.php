<?php
/**
 *
 * @package     Sandesh
 * @author      Sandesh
 * @license     https://opensource.org/licenses/OSL-3.0 Open Software License v. 3.0 (OSL-3.0)
 * @link        https://www.sandeshs.in/
 */

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
