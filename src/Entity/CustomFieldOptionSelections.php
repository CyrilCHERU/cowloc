<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomFieldOptionSelections
 *
 * @ORM\Table(name="custom_field_option_selections", indexes={@ORM\Index(name="index_selected_options_on_custom_field_value_id", columns={"custom_field_value_id"}), @ORM\Index(name="index_custom_field_option_selections_on_custom_field_option_id", columns={"custom_field_option_id"})})
 * @ORM\Entity
 */
class CustomFieldOptionSelections
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
     * @ORM\Column(name="custom_field_value_id", type="integer", nullable=true)
     */
    private $customFieldValueId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="custom_field_option_id", type="integer", nullable=true)
     */
    private $customFieldOptionId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listing_id", type="integer", nullable=true)
     */
    private $listingId;

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
