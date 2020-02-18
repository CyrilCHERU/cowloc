<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommunitySocialLogos
 *
 * @ORM\Table(name="community_social_logos", indexes={@ORM\Index(name="index_community_social_logos_on_community_id", columns={"community_id"})})
 * @ORM\Entity
 */
class CommunitySocialLogos
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
     * @var int|null
     *
     * @ORM\Column(name="community_id", type="bigint", nullable=true)
     */
    private $communityId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image_file_name", type="string", length=255, nullable=true)
     */
    private $imageFileName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image_content_type", type="string", length=255, nullable=true)
     */
    private $imageContentType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="image_file_size", type="integer", nullable=true)
     */
    private $imageFileSize;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="image_updated_at", type="datetime", nullable=true)
     */
    private $imageUpdatedAt;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="image_processing", type="boolean", nullable=true)
     */
    private $imageProcessing;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt;


}
