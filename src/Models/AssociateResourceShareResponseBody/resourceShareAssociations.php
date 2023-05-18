<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models\AssociateResourceShareResponseBody;

use AlibabaCloud\Tea\Model;

class resourceShareAssociations extends Model
{
    /**
     * @example Associating
     *
     * @var string
     */
    public $associationStatus;

    /**
     * @description The association status. Valid values:
     *
     *   Associating: The entity is being associated.
     *   Associated: The entity is associated.
     *   Failed: The entity fails to be associated.
     *   Disassociating: The entity is being disassociated.
     *   Disassociated: The entity is disassociated.
     *
     * >  The system deletes the records of entities in the `Failed` or `Disassociated` state within 48 hours to 96 hours.
     * @example The reason for the association failure.
     *
     * @var string
     */
    public $associationStatusMessage;

    /**
     * @example Resource
     *
     * @var string
     */
    public $associationType;

    /**
     * @description The ID of the resource share.
     *
     * @example 2020-12-04T09:40:41.246Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time when the association of the entity was created. The value of this parameter depends on the value of the AssociationType parameter:
     *
     *   If the value of `AssociationType` is `Resource`, the value of this parameter is the time when the shared resource was associated with the resource share.
     *   If the value of `AssociationType` is `Target`, the value of this parameter is the time when the principal was associated with the resource share.
     *
     * @example vsw-bp183p93qs667muql****
     *
     * @var string
     */
    public $entityId;

    /**
     * @description The cause of the association failure.
     *
     * @example VSwitch
     *
     * @var string
     */
    public $entityType;

    /**
     * @description The association type. Valid values:
     *
     *   Resource
     *   Target
     *
     * @example rs-6GRmdD3X****
     *
     * @var string
     */
    public $resourceShareId;

    /**
     * @description The type of the entity. The value of this parameter depends on the value of the AssociationType parameter:
     *
     *   If the value of AssociationType is Resource, the value of this parameter is the type of the shared resource. For more information about the types of resources that can be shared, see [Services that work with Resource Sharing](~~450526~~).
     *   If the value of AssociationType is Target, the value of this parameter is `Account`.
     *
     * @example test
     *
     * @var string
     */
    public $resourceShareName;

    /**
     * @description The name of the resource share.
     *
     * @example 2020-12-04T09:40:41.246Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'associationStatus'        => 'AssociationStatus',
        'associationStatusMessage' => 'AssociationStatusMessage',
        'associationType'          => 'AssociationType',
        'createTime'               => 'CreateTime',
        'entityId'                 => 'EntityId',
        'entityType'               => 'EntityType',
        'resourceShareId'          => 'ResourceShareId',
        'resourceShareName'        => 'ResourceShareName',
        'updateTime'               => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->associationStatus) {
            $res['AssociationStatus'] = $this->associationStatus;
        }
        if (null !== $this->associationStatusMessage) {
            $res['AssociationStatusMessage'] = $this->associationStatusMessage;
        }
        if (null !== $this->associationType) {
            $res['AssociationType'] = $this->associationType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->resourceShareId) {
            $res['ResourceShareId'] = $this->resourceShareId;
        }
        if (null !== $this->resourceShareName) {
            $res['ResourceShareName'] = $this->resourceShareName;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceShareAssociations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssociationStatus'])) {
            $model->associationStatus = $map['AssociationStatus'];
        }
        if (isset($map['AssociationStatusMessage'])) {
            $model->associationStatusMessage = $map['AssociationStatusMessage'];
        }
        if (isset($map['AssociationType'])) {
            $model->associationType = $map['AssociationType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['ResourceShareId'])) {
            $model->resourceShareId = $map['ResourceShareId'];
        }
        if (isset($map['ResourceShareName'])) {
            $model->resourceShareName = $map['ResourceShareName'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
