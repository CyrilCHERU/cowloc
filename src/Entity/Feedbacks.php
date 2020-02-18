<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Feedbacks
 *
 * @ORM\Table(name="feedbacks")
 * @ORM\Entity
 */
class Feedbacks
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
     * @ORM\Column(name="content", type="text", length=65535, nullable=true)
     */
    private $content;

    /**
     * @var string|null
     *
     * @ORM\Column(name="author_id", type="string", length=255, nullable=true)
     */
    private $authorId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url", type="string", length=2048, nullable=true)
     */
    private $url;

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
     * @var int|null
     *
     * @ORM\Column(name="is_handled", type="integer", nullable=true)
     */
    private $isHandled = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var int|null
     *
     * @ORM\Column(name="community_id", type="integer", nullable=true)
     */
    private $communityId;


}
