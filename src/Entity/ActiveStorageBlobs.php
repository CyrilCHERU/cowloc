<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActiveStorageBlobs
 *
 * @ORM\Table(name="active_storage_blobs", uniqueConstraints={@ORM\UniqueConstraint(name="index_active_storage_blobs_on_key", columns={"key"})})
 * @ORM\Entity
 */
class ActiveStorageBlobs
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
     * @ORM\Column(name="key", type="string", length=255, nullable=false)
     */
    private $key;

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=255, nullable=false)
     */
    private $filename;

    /**
     * @var string|null
     *
     * @ORM\Column(name="content_type", type="string", length=255, nullable=true)
     */
    private $contentType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="metadata", type="text", length=65535, nullable=true)
     */
    private $metadata;

    /**
     * @var int
     *
     * @ORM\Column(name="byte_size", type="bigint", nullable=false)
     */
    private $byteSize;

    /**
     * @var string
     *
     * @ORM\Column(name="checksum", type="string", length=255, nullable=false)
     */
    private $checksum;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;


}
