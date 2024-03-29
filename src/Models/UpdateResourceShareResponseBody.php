<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\UpdateResourceShareResponseBody\resourceShare;
use AlibabaCloud\Tea\Model;

class UpdateResourceShareResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 2860A3A4-D8C1-4EF4-954E-84A3945E26E5
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information of the resource share.
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
     * @return UpdateResourceShareResponseBody
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
