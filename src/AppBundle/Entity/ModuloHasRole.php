<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModuloHasRole
 *
 * @ORM\Table(name="modulo_has_role", indexes={@ORM\Index(name="fk_modulo_has_role_role1_idx", columns={"role_id"}), @ORM\Index(name="fk_modulo_has_role_modulo1_idx", columns={"modulo_id"}), @ORM\Index(name="fk_modulo_has_role_institucion1_idx", columns={"institucion_id"})})
 * @ORM\Entity(repositoryClass="AppBundle\Entity\ModuloHasRoleRepository")
 */
class ModuloHasRole {

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Modulo", inversedBy="ModuloHasRole")
     * @ORM\JoinColumn(name="modulo_id", referencedColumnName="id")
     */
    private $modulo;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Role", inversedBy="ModuloHasRole")
     * @ORM\JoinColumn(name="role_id", referencedColumnName="id")
     */
    private $role;
    
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Institucion", inversedBy="ModuloHasRole")
     * @ORM\JoinColumn(name="institucion_id", referencedColumnName="id")
     */
    private $institucion;

    /**
     * @var integer
     *
     * @ORM\Column(name="activo", type="integer", nullable=true)
     */
    private $activo;


}
