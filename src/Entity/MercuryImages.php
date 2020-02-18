<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MercuryImages
 *
 * @ORM\Table(name="mercury_images")
 * @ORM\Entity
 */
class MercuryImages
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

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
