<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArInternalMetadata
 *
 * @ORM\Table(name="ar_internal_metadata")
 * @ORM\Entity
 */
class ArInternalMetadata
{
    /**
     * @var string
     *
     * @ORM\Column(name="key", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $key;

    /**
     * @var string|null
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=true)
     */
    private $value;

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
