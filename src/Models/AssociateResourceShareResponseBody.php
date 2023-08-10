<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\AssociateResourceShareResponseBody\resourceShareAssociations;
use AlibabaCloud\Tea\Model;

class AssociateResourceShareResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 111FB84A-60A9-403E-9067-E55D7EE95BD1
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information of the entities that are associated with the resource share.
     *
     * @var resourceShareAssociations[]
     */
    public $resourceShareAssociations;
    protected $_name = [
        'requestId'                 => 'RequestId',
        'resourceShareAssociations' => 'ResourceShareAssociations',
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
        if (null !== $this->resourceShareAssociations) {
            $res['ResourceShareAssociations'] = [];
            if (null !== $this->resourceShareAssociations && \is_array($this->resourceShareAssociations)) {
                $n = 0;
                foreach ($this->resourceShareAssociations as $item) {
                    $res['ResourceShareAssociations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssociateResourceShareResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceShareAssociations'])) {
            if (!empty($map['ResourceShareAssociations'])) {
                $model->resourceShareAssociations = [];
                $n                                = 0;
                foreach ($map['ResourceShareAssociations'] as $item) {
                    $model->resourceShareAssociations[$n++] = null !== $item ? resourceShareAssociations::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
