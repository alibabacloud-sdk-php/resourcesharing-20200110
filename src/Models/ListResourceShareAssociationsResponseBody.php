<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListResourceShareAssociationsResponseBody\resourceShareAssociations;
use AlibabaCloud\Tea\Model;

class ListResourceShareAssociationsResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resourceShareAssociations[]
     */
    public $resourceShareAssociations;
    protected $_name = [
        'nextToken'                 => 'NextToken',
        'requestId'                 => 'RequestId',
        'resourceShareAssociations' => 'ResourceShareAssociations',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
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
     * @return ListResourceShareAssociationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
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
