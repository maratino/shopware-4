<?php
/**
 * Shopware 4.0
 * Copyright © 2012 shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 *
 * @category   Shopware
 * @package    Shopware_Models
 * @subpackage CommentConfirm
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author     M.Schmaeing
 * @author     $Author$
 */

namespace Shopware\Models\CommentConfirm;
use Shopware\Components\Model\ModelEntity,
Doctrine\ORM\Mapping AS ORM;

/**
 * CommentConfirm Model Entity
 *
 * todo@all: Documentation
 *
 * @ORM\Entity(repositoryClass="Repository")
 * @ORM\Table(name="s_core_optin")
 */
class CommentConfirm extends ModelEntity
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $creationDate
     *
     * @ORM\Column(name="datum", type="datetime", nullable=false)
     */
    private $creationDate;

    /**
     * @var string $hash
     *
     * @ORM\Column(name="hash", type="string", length=255, nullable=false)
     */
    private $hash;

    /**
     * @var string $data
     *
     * @ORM\Column(name="data", type="string", nullable=false)
     */
    private $data;


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
     * Set hash
     *
     * @param string $hash
     */
    public function setHash($hash)
    {
        $this->hash = $hash;
    }

    /**
     * Get hash
     *
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Set data
     *
     * @param string $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * Get data
     *
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set CreationDate
     *
     * @param string $creationDate
     */
    public function setCreationDate($creationDate)
    {
        if (!$creationDate instanceof \DateTime && strlen($creationDate) > 0) {
            $creationDate = new \DateTime($creationDate);
        }
        $this->creationDate = $creationDate;
    }

    /**
     * Get CreationDate
     *
     * @return string
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }
}
