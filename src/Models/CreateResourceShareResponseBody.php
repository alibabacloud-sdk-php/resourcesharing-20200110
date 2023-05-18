<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\CreateResourceShareResponseBody\resourceShare;
use AlibabaCloud\Tea\Model;

class CreateResourceShareResponseBody extends Model
{
    /**
     * @description The time when the resource share was updated.
     *
     * @example 2C3FA051-61DC-4F3E-81E9-E4830524DF4B
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The name of the resource share.
     *
     * @var resourceShare
     */
    public $resourceShare;
    protected $_name = [
        'requestId'     => 'RequestId',
        'resourceShare' => 'ResourceShare',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceShare) {
            $res['ResourceShare'] = null !== $this->resourceShare ? $this->resourceShare->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateResourceShareResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceShare'])) {
            $model->resourceShare = resourceShare::fromMap($map['ResourceShare']);
        }

        return $model;
    }
}
