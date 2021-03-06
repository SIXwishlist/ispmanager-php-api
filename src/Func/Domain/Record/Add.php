<?php

namespace IspApi\Func\Domain\Record;

use IspApi\Func\AbstractFunc;

/**
 * Class DomainAddItem
 * @package IspApi\Func
 */
class Add extends AbstractFunc
{
    /**
     * @var string
     */
    protected $func = 'domain.sublist.edit';

    /**
     * @var bool
     */
    protected $isSaveAction = true;
}