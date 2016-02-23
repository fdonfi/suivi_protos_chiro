<?php

namespace PNC\ChiroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PNC\Utils\BaseEntity;

/**
 * ObstaxonFichiers
 */
class ObstaxonFichiers extends BaseEntity
{
    /**
     * @var integer
     */
    private $cotx_id;

    /**
     * @var integer
     */
    private $fichier_id;

    private $commentaire;

    public function __construct($cotx_id=null, $fichier_id=null, $commentaire=null){
        $this->setCotxId($cotx_id);
        $this->setFichierId($fichier_id);
        $this->setCommentaire($commentaire);
    }

    /**
     * Set cotx_id
     *
     * @param integer $cotxId
     * @return ObstaxonFichiers
     */
    public function setCotxId($cotxId)
    {
        $this->cotx_id = $cotxId;

        return $this;
    }

    /**
     * Get cotx_id
     *
     * @return integer 
     */
    public function getCotxId()
    {
        return $this->cotx_id;
    }

    /**
     * Set fichier_id
     *
     * @param integer $fichierId
     * @return ObstaxonFichiers
     */
    public function setFichierId($fichierId)
    {
        $this->fichier_id = $fichierId;

        return $this;
    }

    /**
     * Get fichier_id
     *
     * @return integer 
     */
    public function getFichierId()
    {
        return $this->fichier_id;
    }

    public function setCommentaire($commentaire){
        $this->commentaire = $commentaire;
        return $this;
    }

    public function getCommentaire(){
        return $this->commentaire;
    }
}
