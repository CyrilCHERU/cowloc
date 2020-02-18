<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActiveStorageAttachments
 *
 * @ORM\Table(name="active_storage_attachments", uniqueConstraints={@ORM\UniqueConstraint(name="index_active_storage_attachments_uniqueness", columns={"record_type", "record_id", "name", "blob_id"})}, indexes={@ORM\Index(name="index_active_storage_attachments_on_blob_id", columns={"blob_id"})})
 * @ORM\Entity
 */
class ActiveStorageAttachments
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="record_type", type="string", length=255, nullable=false)
     */
    private $recordType;

    /**
     * @var int
     *
     * @ORM\Column(name="record_id", type="bigint", nullable=false)
     */
    private $recordId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \ActiveStorageBlobs
     *
     * @ORM\ManyToOne(targetEntity="ActiveStorageBlobs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="blob_id", referencedColumnName="id")
     * })
     */
    private $blob;


}
