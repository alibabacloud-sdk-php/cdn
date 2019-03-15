<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Rpc;

/**
 * @method string getFixTimeGap()
 * @method $this withFixTimeGap($value)
 * @method string getTimeMerge()
 * @method $this withTimeMerge($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDomainType()
 * @method $this withDomainType($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeDomainQpsData extends Rpc
{
    public $product = 'Cdn';

    public $version = '2014-11-11';

    public $method = 'POST';
}
