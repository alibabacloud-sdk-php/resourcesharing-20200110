<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListResourceShareInvitationsResponseBody;

use AlibabaCloud\Tea\Model;

class resourceShareInvitations extends Model
{
    /**
     * @description The Alibaba Cloud account ID of the inviter.
     *
     * @example 2022-08-18T05:36:45.024Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 134254031178****
     *
     * @var string
     */
    public $receiverAccountId;

    /**
     * @description The Alibaba Cloud account ID of the invitee.
     *
     * @example rs-ysGRci9z****
     *
     * @var string
     */
    public $resourceShareId;

    /**
     * @example i-p6eRytrkjVvM****
     *
     * @var string
     */
    public $resourceShareInvitationId;

    /**
     * @description The ID of the invitation.
     *
     * @example example
     *
     * @var string
     */
    public $resourceShareName;

    /**
     * @example 151266687691****
     *
     * @var string
     */
    public $senderAccountId;

    /**
     * @description The name of the resource share.
     *
     * @example Pending
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'createTime'                => 'CreateTime',
        'receiverAccountId'         => 'ReceiverAccountId',
        'resourceShareId'           => 'ResourceShareId',
        'resourceShareInvitationId' => 'ResourceShareInvitationId',
        'resourceShareName'         => 'ResourceShareName',
        'senderAccountId'           => 'SenderAccountId',
        'status'                    => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->receiverAccountId) {
            $res['ReceiverAccountId'] = $this->receiverAccountId;
        }
        if (null !== $this->resourceShareId) {
            $res['ResourceShareId'] = $this->resourceShareId;
        }
        if (null !== $this->resourceShareInvitationId) {
            $res['ResourceShareInvitationId'] = $this->resourceShareInvitationId;
        }
        if (null !== $this->resourceShareName) {
            $res['ResourceShareName'] = $this->resourceShareName;
        }
        if (null !== $this->senderAccountId) {
            $res['SenderAccountId'] = $this->senderAccountId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceShareInvitations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ReceiverAccountId'])) {
            $model->receiverAccountId = $map['ReceiverAccountId'];
        }
        if (isset($map['ResourceShareId'])) {
            $model->resourceShareId = $map['ResourceShareId'];
        }
        if (isset($map['ResourceShareInvitationId'])) {
            $model->resourceShareInvitationId = $map['ResourceShareInvitationId'];
        }
        if (isset($map['ResourceShareName'])) {
            $model->resourceShareName = $map['ResourceShareName'];
        }
        if (isset($map['SenderAccountId'])) {
            $model->senderAccountId = $map['SenderAccountId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
