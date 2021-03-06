<?php
/**
 * Annotations fixture for Vendor_ModuleB_Model_Webapi_ModuleBData class
 *
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
 * @copyright   Copyright (c) 2012 X.commerce, Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
return array(
    'stringParam' => array(
        'maxLength' => '255 chars.',
        'callInfo' => array(
            'vendorModuleBUpdate' => array('requiredInput' => 'Yes'),
            'vendorModuleBCreate' => array('requiredInput' => 'Conditionally'),
            'vendorModuleBGet' => array('returned' => 'Always'),
        ),
    ),
    'integerParam' => array(
        'default' => $typeData['parameters']['integerParam']['default'],
        'min' => 10,
        'max' => 100,
        'callInfo' => array(
            'vendorModuleBCreate' => array('requiredInput' => 'No'),
            'vendorModuleBUpdate' => array('requiredInput' => 'No'),
            'allCallsExcept' => array('calls' => 'vendorModuleBUpdate', 'requiredInput' => 'Yes'),
            'vendorModuleBGet' => array('returned' => 'Conditionally'),
        ),
    ),
    'optionalBool' => array(
        'default' => 'false',
        'summary' => 'this is summary',
        'seeLink' => array(
            'url' => 'http://google.com/',
            'title' => 'link title',
            'for' => 'link for',
        ),
        'docInstructions' => array('output' => 'noDoc'),
        'callInfo' => array(
            'vendorModuleBCreate' => array('requiredInput' => 'No'),
            'vendorModuleBUpdate' => array('requiredInput' => 'No'),
            'vendorModuleBGet' => array('returned' => 'Conditionally'),
        ),
    ),
    'complexTypeArray' => array(
        'tagStatus' => 'some status',
        'natureOfType' => 'array',
        'callInfo' => array(
            'vendorModuleBCreate' => array('requiredInput' => 'No'),
            'vendorModuleBUpdate' => array('requiredInput' => 'No'),
            'vendorModuleBGet' => array('returned' => 'Conditionally'),
        ),
    ),
);
