<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Rpc;

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getFixTimeGap()
 * @method $this withFixTimeGap($value)
 * @method string getTimeMerge()
 * @method $this withTimeMerge($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeDomainSrcFlowData extends Rpc
{
    public $product = 'Cdn';

    public $version = '2014-11-11';

    public $method = 'POST';
}
