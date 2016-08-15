<?php
/**
 * User: GROOT (pzyme@outlook.com)
 * Date: 2016/8/15
 * Time: 10:13
 */

$installer = $this;
$installer->startSetup();

$installer->setCustomerAttributes(
    array(
        'inup_socialconnect_qid' => array(
            'type' => 'text',
            'visible' => false,
            'required' => false,
            'user_defined' => false
        ),
        'inup_socialconnect_qtoken' => array(
            'type' => 'text',
            'visible' => false,
            'required' => false,
            'user_defined' => false
        ),
        'inup_socialconnect_wid' => array(
            'type' => 'text',
            'visible' => false,
            'required' => false,
            'user_defined' => false
        ),
        'inup_socialconnect_wtoken' => array(
            'type' => 'text',
            'visible' => false,
            'required' => false,
            'user_defined' => false
        )
    )
);

// Install our custom attributes
$installer->installCustomerAttributes();

// Remove our custom attributes (for testing)
//$installer->removeCustomerAttributes();

$installer->endSetup();