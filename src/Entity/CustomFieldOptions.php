<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomFieldOptions
 *
 * @ORM\Table(name="custom_field_options", indexes={@ORM\Index(name="index_custom_field_options_on_custom_field_id", columns={"custom_field_id"})})
 * @ORM\Entity
 */
class CustomFieldOptions
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
     * @ORM\Column(name="custom_field_id", type="integer", nullable=true)
     */
    private $customFieldId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sort_priority", type="integer", nullable=true)
     */
    private $sortPriority;

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
