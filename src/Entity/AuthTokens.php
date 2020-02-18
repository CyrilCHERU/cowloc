<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AuthTokens
 *
 * @ORM\Table(name="auth_tokens", uniqueConstraints={@ORM\UniqueConstraint(name="index_auth_tokens_on_token", columns={"token"})}, indexes={@ORM\Index(name="index_on_person_id", columns={"person_id"})})
 * @ORM\Entity
 */
class AuthTokens
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
     * @ORM\Column(name="token", type="string", length=255, nullable=true)
     */
    private $token;

    /**
     * @var string|null
     *
     * @ORM\Column(name="token_type", type="string", length=255, nullable=true, options={"default"="unsubscribe"})
     */
    private $tokenType = 'unsubscribe';

    /**
     * @var string|null
     *
     * @ORM\Column(name="person_id", type="string", length=255, nullable=true)
     */
    private $personId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="expires_at", type="datetime", nullable=true)
     */
    private $expiresAt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="usages_left", type="integer", nullable=true)
     */
    private $usagesLeft;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_use_attempt", type="datetime", nullable=true)
     */
    private $lastUseAttempt;

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
