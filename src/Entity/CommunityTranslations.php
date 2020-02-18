<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommunityTranslations
 *
 * @ORM\Table(name="community_translations", indexes={@ORM\Index(name="index_community_translations_on_community_id", columns={"community_id"})})
 * @ORM\Entity
 */
class CommunityTranslations
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
     * @var int
     *
     * @ORM\Column(name="community_id", type="integer", nullable=false)
     */
    private $communityId;

    /**
     * @var string
     *
     * @ORM\Column(name="locale", type="string", length=16, nullable=false)
     */
    private $locale;

    /**
     * @var string
     *
     * @ORM\Column(name="translation_key", type="string", length=255, nullable=false)
     */
    private $translationKey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="translation", type="text", length=65535, nullable=true)
     */
    private $translation;

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
