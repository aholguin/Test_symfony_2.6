<?php

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModuloHasRoleRepository
 *
 * @author Anderson
 */
class ModuloHasRoleRepository extends EntityRepository {

    public function getMenu($roles) {//obtine los datos del los menú autorizados
        $query = $this->getEntityManager()->createQuery(
                        "SELECT mhr,m FROM AppBundle:ModuloHasRole mhr "
                        . "JOIN mhr.modulo m JOIN mhr.role r JOIN mhr.institucion i "
                        . "WHERE mhr.activo = :activo AND r.nombre IN (:roles) AND mhr.institucion =:inst "
                        . "ORDER BY m.modulo_padre,mhr.modulo"
                       )->setParameter('activo', '1')->setParameter('roles', $roles)->setParameter('inst', '1');
        try {
            //Ordena datos
            $menuBruto = $query->getArrayResult();
            $menu = array();
            foreach ($menuBruto as $value) { //var_dump($value);die();
                if ($value['modulo']['modulo_padre'] != NULL) {
                    $menu[$value['modulo']['modulo_padre']]['hijos'][] = $value;
                } else {
                    $menu[$value['modulo_id']] = $value;
                }
            }
            return $menu;
        } catch (\Doctrine\ORM\NoResultException $e) {return null;}
    }

}
