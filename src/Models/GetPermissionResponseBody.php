<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\GetPermissionResponseBody\permission;
use AlibabaCloud\Tea\Model;

class GetPermissionResponseBody extends Model
{
    /**
     * @description The type of the shared resources.
     *
     * For more information about the types of resources that can be shared, see [Services that work with Resource Sharing](~~450526~~).
     * @var permission
     */
    public $permission;

    /**
     * @description The document of the policy related to the permission.
     *
     * @example 2F23CFB6-A721-4E90-AC1E-0E30FA8B45DA
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'permission' => 'Permission',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->permission) {
            $res['Permission'] = null !== $this->permission ? $this->permission->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPermissionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Permission'])) {
            $model->permission = permission::fromMap($map['Permission']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
