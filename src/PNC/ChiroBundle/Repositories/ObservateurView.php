<?php

namespace PNC\ChiroBundle\Repositories;

use Doctrine\ORM\EntityRepository;

/**
 * ObservateurView
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ObservateurView extends EntityRepository
{
    public function getLike($like, $role){
        $mgr = $this->getEntityManager();
        $like = '%' . strtolower(str_replace(' ', '% ', $like)) . '%';
        $qr = $mgr->createQuery("SELECT DISTINCT o FROM PNCChiroBundle:ObservateurView o WHERE o.nom_complet_lower LIKE ?1 AND o.role=?2");
        $qr->setParameter(1, $like);
        $qr->setParameter(2, $role);
        return $qr->getResult();
    }
}
