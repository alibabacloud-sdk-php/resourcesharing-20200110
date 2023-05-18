<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListPermissionsResponseBody\permissions;
use AlibabaCloud\Tea\Model;

class ListPermissionsResponseBody extends Model
{
    /**
     * @description The version of the permission.
     *
     * @example TGlzdFJlc291cm****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The creation time.
     *
     * @var permissions[]
     */
    public $permissions;

    /**
     * @description Indicates whether the version is the default version. Valid values:
     *
     *   false: The version is not the default version.
     *   true: The version is the default version.
     *
     * @example 04677DCA-7C33-464B-8811-1B1DA3C3D197
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nextToken'   => 'NextToken',
        'permissions' => 'Permissions',
        'requestId'   => 'RequestId',
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
        if (null !== $this->permissions) {
            $res['Permissions'] = [];
            if (null !== $this->permissions && \is_array($this->permissions)) {
                $n = 0;
                foreach ($this->permissions as $item) {
                    $res['Permissions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPermissionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Permissions'])) {
            if (!empty($map['Permissions'])) {
                $model->permissions = [];
                $n                  = 0;
                foreach ($map['Permissions'] as $item) {
                    $model->permissions[$n++] = null !== $item ? permissions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
