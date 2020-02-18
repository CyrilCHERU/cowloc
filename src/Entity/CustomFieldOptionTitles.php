<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomFieldOptionTitles
 *
 * @ORM\Table(name="custom_field_option_titles", indexes={@ORM\Index(name="locale_index", columns={"custom_field_option_id", "locale"}), @ORM\Index(name="index_custom_field_option_titles_on_custom_field_option_id", columns={"custom_field_option_id"})})
 * @ORM\Entity
 */
class CustomFieldOptionTitles
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
     * @ORM\Column(name="value", type="string", length=255, nullable=true)
     */
    private $value;

    /**
     * @var string|null
     *
     * @ORM\Column(name="locale", type="string", length=255, nullable=true)
     */
    private $locale;

    /**
     * @var int|null
     *
     * @ORM\Column(name="custom_field_option_id", type="integer", nullable=true)
     */
    private $customFieldOptionId;

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
