<?php
/**
 * This file is part of the SevenShores/NetSuite library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ryanwinchester/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/ryanwinchester/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/ryanwinchester/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 *
 * generated:  2019-06-12 10:27:00 AM PDT
 */

namespace NetSuite\Classes;

class ItemSupplyPlanSearchRowBasic extends SearchRowBasic {
    public $externalId;
    public $internalId;
    public $item;
    public $lastModifiedDate;
    public $location;
    public $memo;
    public $orderCreated;
    public $orderDate;
    public $orderType;
    public $quantity;
    public $quantityUom;
    public $receiptDate;
    public $subsidiary;
    public $units;
    public $customFieldList;
    static $paramtypesmap = array(
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "item" => "SearchColumnSelectField[]",
        "lastModifiedDate" => "SearchColumnDateField[]",
        "location" => "SearchColumnSelectField[]",
        "memo" => "SearchColumnStringField[]",
        "orderCreated" => "SearchColumnBooleanField[]",
        "orderDate" => "SearchColumnDateField[]",
        "orderType" => "SearchColumnSelectField[]",
        "quantity" => "SearchColumnDoubleField[]",
        "quantityUom" => "SearchColumnDoubleField[]",
        "receiptDate" => "SearchColumnDateField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "units" => "SearchColumnSelectField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
