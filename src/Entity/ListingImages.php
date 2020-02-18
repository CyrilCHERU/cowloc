<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListingImages
 *
 * @ORM\Table(name="listing_images", indexes={@ORM\Index(name="index_listing_images_on_listing_id", columns={"listing_id"})})
 * @ORM\Entity
 */
class ListingImages
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
     * @var int|null
     *
     * @ORM\Column(name="listing_id", type="integer", nullable=true)
     */
    private $listingId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

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
     * @var bool|null
     *
     * @ORM\Column(name="image_downloaded", type="boolean", nullable=true)
     */
    private $imageDownloaded = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="error", type="string", length=255, nullable=true)
     */
    private $error;

    /**
     * @var int|null
     *
     * @ORM\Column(name="width", type="integer", nullable=true)
     */
    private $width;

    /**
     * @var int|null
     *
     * @ORM\Column(name="height", type="integer", nullable=true)
     */
    private $height;

    /**
     * @var string|null
     *
     * @ORM\Column(name="author_id", type="string", length=255, nullable=true)
     */
    private $authorId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="position", type="integer", nullable=true)
     */
    private $position = '0';


}
