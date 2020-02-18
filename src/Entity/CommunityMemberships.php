<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommunityMemberships
 *
 * @ORM\Table(name="community_memberships", uniqueConstraints={@ORM\UniqueConstraint(name="index_community_memberships_on_person_id", columns={"person_id"})}, indexes={@ORM\Index(name="index_community_memberships_on_community_id", columns={"community_id"}), @ORM\Index(name="community_person_status", columns={"community_id", "person_id", "status"})})
 * @ORM\Entity
 */
class CommunityMemberships
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
     * @var string
     *
     * @ORM\Column(name="person_id", type="string", length=255, nullable=false)
     */
    private $personId;

    /**
     * @var int
     *
     * @ORM\Column(name="community_id", type="integer", nullable=false)
     */
    private $communityId;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="admin", type="boolean", nullable=true)
     */
    private $admin = '0';

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
     * @var string|null
     *
     * @ORM\Column(name="consent", type="string", length=255, nullable=true)
     */
    private $consent;

    /**
     * @var int|null
     *
     * @ORM\Column(name="invitation_id", type="integer", nullable=true)
     */
    private $invitationId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_page_load_date", type="datetime", nullable=true)
     */
    private $lastPageLoadDate;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=false, options={"default"="accepted"})
     */
    private $status = 'accepted';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_post_listings", type="boolean", nullable=true)
     */
    private $canPostListings = '0';



    /**
     * Get the value of id
     *
     * @return  int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param  int  $id
     *
     * @return  self
     */
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of createdAt
     *
     * @return  \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set the value of createdAt
     *
     * @param  \DateTime|null  $createdAt
     *
     * @return  self
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get the value of status
     *
     * @return  string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @param  string  $status
     *
     * @return  self
     */
    public function setStatus(string $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of lastPageLoadDate
     *
     * @return  \DateTime|null
     */
    public function getLastPageLoadDate()
    {
        return $this->lastPageLoadDate;
    }

    /**
     * Set the value of lastPageLoadDate
     *
     * @param  \DateTime|null  $lastPageLoadDate
     *
     * @return  self
     */
    public function setLastPageLoadDate($lastPageLoadDate)
    {
        $this->lastPageLoadDate = $lastPageLoadDate;

        return $this;
    }

    /**
     * Get the value of updatedAt
     *
     * @return  \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set the value of updatedAt
     *
     * @param  \DateTime|null  $updatedAt
     *
     * @return  self
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
