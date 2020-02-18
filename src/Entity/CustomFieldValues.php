<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomFieldValues
 *
 * @ORM\Table(name="custom_field_values", indexes={@ORM\Index(name="index_custom_field_values_on_type", columns={"type"}), @ORM\Index(name="index_custom_field_values_on_listing_id", columns={"listing_id"}), @ORM\Index(name="index_custom_field_values_on_person_id", columns={"person_id"})})
 * @ORM\Entity
 */
class CustomFieldValues
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
     * @ORM\Column(name="listing_id", type="integer", nullable=true)
     */
    private $listingId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text_value", type="text", length=65535, nullable=true)
     */
    private $textValue;

    /**
     * @var float|null
     *
     * @ORM\Column(name="numeric_value", type="float", precision=10, scale=0, nullable=true)
     */
    private $numericValue;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_value", type="datetime", nullable=true)
     */
    private $dateValue;

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

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @var bool
     *
     * @ORM\Column(name="delta", type="boolean", nullable=false, options={"default"="1"})
     */
    private $delta = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="person_id", type="string", length=255, nullable=true)
     */
    private $personId;


}
