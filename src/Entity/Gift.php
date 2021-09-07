<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Child;
use App\Entity\User;
/**
 * Gift
 *
 * @ORM\Table(name="gift", indexes={@ORM\Index(name="IDX_A47C990DDD62C21B", columns={"child_id"}), @ORM\Index(name="IDX_A47C990DA76ED395", columns={"user_id"}), @ORM\Index(name="IDX_A47C990DD823A625", columns={"user_reserved_id"})})
 * @ORM\Entity
 */
class Gift
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gift_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", nullable=true)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float", precision=10, scale=0, nullable=false)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="place", type="string", nullable=false)
     */
    private $place;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", nullable=false)
     */
    private $website;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="create_at", type="datetimetz", nullable=true)
     */
    private $createAt;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", nullable=false)
     */
    private $image;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="reservation_date", type="datetimetz", nullable=false)
     */
    private $reservationDate;

    /**
     * @var int
     *
     * @ORM\Column(name="event", type="integer", nullable=false)
     */
    private $event;

    /**
     * @var \Child
     *
     * @ORM\ManyToOne(targetEntity="Child")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="child_id", referencedColumnName="id")
     * })
     */
    private $child;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_reserved_id", referencedColumnName="id")
     * })
     */
    private $userReserved;


}
