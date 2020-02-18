<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoryCustomFields
 *
 * @ORM\Table(name="category_custom_fields", indexes={@ORM\Index(name="index_category_custom_fields_on_category_id_and_custom_field_id", columns={"category_id", "custom_field_id"}), @ORM\Index(name="index_category_custom_fields_on_custom_field_id", columns={"custom_field_id"})})
 * @ORM\Entity
 */
class CategoryCustomFields
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
     * @ORM\Column(name="category_id", type="integer", nullable=true)
     */
    private $categoryId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="custom_field_id", type="integer", nullable=true)
     */
    private $customFieldId;

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
