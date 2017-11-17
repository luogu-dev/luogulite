<?php

namespace LuoguLite\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="luogulite_user")
 */
class User extends BaseUser implements \JsonSerializable
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function jsonSerialize() {
        return [
            "id" => $this->getId(),
            "username" => $this->getUsername()
        ];
    }
}
