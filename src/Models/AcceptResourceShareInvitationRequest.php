<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\Tea\Model;

class AcceptResourceShareInvitationRequest extends Model
{
    /**
     * @description The ID of the invitation.
     *
     * @example i-pMnItMX19fBJ****
     *
     * @var string
     */
    public $resourceShareInvitationId;
    protected $_name = [
        'resourceShareInvitationId' => 'ResourceShareInvitationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceShareInvitationId) {
            $res['ResourceShareInvitationId'] = $this->resourceShareInvitationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AcceptResourceShareInvitationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceShareInvitationId'])) {
            $model->resourceShareInvitationId = $map['ResourceShareInvitationId'];
        }

        return $model;
    }
}
