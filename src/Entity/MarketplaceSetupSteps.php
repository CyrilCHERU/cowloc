<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MarketplaceSetupSteps
 *
 * @ORM\Table(name="marketplace_setup_steps", uniqueConstraints={@ORM\UniqueConstraint(name="index_marketplace_setup_steps_on_community_id", columns={"community_id"})})
 * @ORM\Entity
 */
class MarketplaceSetupSteps
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
     * @var bool
     *
     * @ORM\Column(name="slogan_and_description", type="boolean", nullable=false)
     */
    private $sloganAndDescription = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="cover_photo", type="boolean", nullable=false)
     */
    private $coverPhoto = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="filter", type="boolean", nullable=false)
     */
    private $filter = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="paypal", type="boolean", nullable=false)
     */
    private $paypal = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="listing", type="boolean", nullable=false)
     */
    private $listing = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="invitation", type="boolean", nullable=false)
     */
    private $invitation = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="stripe", type="boolean", nullable=true)
     */
    private $stripe = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="payment", type="boolean", nullable=true)
     */
    private $payment = '0';


}
