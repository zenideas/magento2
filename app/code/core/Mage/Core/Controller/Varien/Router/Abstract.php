<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Mage
 * @package     Mage_Core
 * @copyright   Copyright (c) 2012 X.commerce, Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Abstract router class
 */
abstract class Mage_Core_Controller_Varien_Router_Abstract
{
    /**
     * @var Mage_Core_Controller_Varien_Front
     */
    protected $_front;

    /**
     * @var Mage_Core_Controller_Varien_Action_Factory
     */
    protected $_controllerFactory;

    /**
     * @param Mage_Core_Controller_Varien_Action_Factory $controllerFactory
     */
    public function __construct(Mage_Core_Controller_Varien_Action_Factory $controllerFactory)
    {
        $this->_controllerFactory = $controllerFactory;
    }

    /**
     * Assign front controller instance
     *
     * @param $front Mage_Core_Controller_Varien_Front
     * @return Mage_Core_Controller_Varien_Router_Abstract
     */
    public function setFront(Mage_Core_Controller_Varien_Front $front)
    {
        $this->_front = $front;
        return $this;
    }

    /**
     * Retrieve front controller instance
     *
     * @return Mage_Core_Controller_Varien_Front
     */
    public function getFront()
    {
        return $this->_front;
    }

    public function getFrontNameByRoute($routeName)
    {
        return $routeName;
    }

    public function getRouteByFrontName($frontName)
    {
        return $frontName;
    }

    abstract public function match(Mage_Core_Controller_Request_Http $request);
}
