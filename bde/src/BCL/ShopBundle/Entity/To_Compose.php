<?php

namespace BCL\ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * To_Compose
 *
 * @ORM\Table(name="to__compose")
 * @ORM\Entity(repositoryClass="BCL\ShopBundle\Repository\To_ComposeRepository")
 */
class To_Compose
{

    /**
     * @ORM\ManyToOne(targetEntity="BCL\ShopBundle\Entity\ClientOrder")
     * @ORM\JoinColumn(nullable=false)
     */
    private $clientOrder;

    /**
     * @ORM\ManyToOne(targetEntity="BCL\ShopBundle\Entity\Article")
     * @ORM\JoinColumn(nullable=false)
     */
    private $article;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="Quantity", type="integer")
     */
    private $quantity;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return To_Compose
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set clientOrder
     *
     * @param \BCL\ShopBundle\Entity\ClientOrder $clientOrder
     *
     * @return To_Compose
     */
    public function setClientOrder(\BCL\ShopBundle\Entity\ClientOrder $clientOrder)
    {
        $this->clientOrder = $clientOrder;

        return $this;
    }

    /**
     * Get clientOrder
     *
     * @return \BCL\ShopBundle\Entity\ClientOrder
     */
    public function getClientOrder()
    {
        return $this->clientOrder;
    }

    /**
     * Set article
     *
     * @param \BCL\ShopBundle\Entity\Article $article
     *
     * @return To_Compose
     */
    public function setArticle(\BCL\ShopBundle\Entity\Article $article)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \BCL\ShopBundle\Entity\Article
     */
    public function getArticle()
    {
        return $this->article;
    }
}
