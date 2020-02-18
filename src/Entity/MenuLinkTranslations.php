<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MenuLinkTranslations
 *
 * @ORM\Table(name="menu_link_translations", indexes={@ORM\Index(name="index_menu_link_translations_on_menu_link_id", columns={"menu_link_id"})})
 * @ORM\Entity
 */
class MenuLinkTranslations
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
     * @ORM\Column(name="menu_link_id", type="integer", nullable=true)
     */
    private $menuLinkId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="locale", type="string", length=255, nullable=true)
     */
    private $locale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

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
