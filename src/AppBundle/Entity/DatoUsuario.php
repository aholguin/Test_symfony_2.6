<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DatoUsuario
 *
 * @ORM\Table(name="dato_usuario")
 * @ORM\Entity
 */
class DatoUsuario
{
    /**
     * @var string
     *
     * @ORM\Column(name="p_nombre", type="string", length=60, nullable=true)
     */
    private $pNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="s_nombre", type="string", length=60, nullable=true)
     */
    private $sNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="p_apellido", type="string", length=60, nullable=true)
     */
    private $pApellido;

    /**
     * @var string
     *
     * @ORM\Column(name="s_apellido", type="string", length=60, nullable=true)
     */
    private $sApellido;

    /**
     * @var integer
     *
     * @ORM\Column(name="activo", type="integer", nullable=true)
     */
<<<<<<< OURS
    private $activo;

    /**
     * @var \AppBundle\Entity\Usuario
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     * })
     */
    private $usuario;



    /**
     * Set pNombre
     *
     * @param string $pNombre
     * @return DatoUsuario
     */
    public function setPNombre($pNombre)
    {
        $this->pNombre = $pNombre;

        return $this;
    }

    /**
     * Get pNombre
     *
     * @return string 
     */
    public function getPNombre()
    {
        return $this->pNombre;
    }

    /**
     * Set sNombre
     *
     * @param string $sNombre
     * @return DatoUsuario
     */
    public function setSNombre($sNombre)
    {
        $this->sNombre = $sNombre;

        return $this;
    }

    /**
     * Get sNombre
     *
     * @return string 
     */
    public function getSNombre()
    {
        return $this->sNombre;
    }

    /**
     * Set pApellido
     *
     * @param string $pApellido
     * @return DatoUsuario
     */
    public function setPApellido($pApellido)
    {
        $this->pApellido = $pApellido;

        return $this;
    }

    /**
     * Get pApellido
     *
     * @return string 
     */
    public function getPApellido()
    {
        return $this->pApellido;
    }

    /**
     * Set sApellido
     *
     * @param string $sApellido
     * @return DatoUsuario
     */
    public function setSApellido($sApellido)
    {
        $this->sApellido = $sApellido;

        return $this;
    }

    /**
     * Get sApellido
     *
     * @return string 
     */
    public function getSApellido()
    {
        return $this->sApellido;
    }

    /**
     * Set activo
     *
     * @param integer $activo
     * @return DatoUsuario
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return integer 
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set usuario
     *
     * @param \AppBundle\Entity\Usuario $usuario
     * @return DatoUsuario
     */
    public function setUsuario(\AppBundle\Entity\Usuario $usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \AppBundle\Entity\Usuario 
     */
    public function getId()
=======
    private $activo = '1';

    /**
     * @var \Usuario
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     * })
     */
    private $usuario;



    /**
     * Set pNombre
     *
     * @param string $pNombre
     * @return DatoUsuario
     */
    public function setPNombre($pNombre)
    {
        $this->pNombre = $pNombre;

        return $this;
    }

    /**
     * Get pNombre
     *
     * @return string 
     */
    public function getPNombre()
    {
        return $this->pNombre;
    }

    /**
     * Set sNombre
     *
     * @param string $sNombre
     * @return DatoUsuario
     */
    public function setSNombre($sNombre)
    {
        $this->sNombre = $sNombre;

        return $this;
    }

    /**
     * Get sNombre
     *
     * @return string 
     */
    public function getSNombre()
    {
        return $this->sNombre;
    }

    /**
     * Set pApellido
     *
     * @param string $pApellido
     * @return DatoUsuario
     */
    public function setPApellido($pApellido)
    {
        $this->pApellido = $pApellido;

        return $this;
    }

    /**
     * Get pApellido
     *
     * @return string 
     */
    public function getPApellido()
    {
        return $this->pApellido;
    }

    /**
     * Set sApellido
     *
     * @param string $sApellido
     * @return DatoUsuario
     */
    public function setSApellido($sApellido)
    {
        $this->sApellido = $sApellido;

        return $this;
    }

    /**
     * Get sApellido
     *
     * @return string 
     */
    public function getSApellido()
    {
        return $this->sApellido;
    }

    /**
     * Set activo
     *
     * @param integer $activo
     * @return DatoUsuario
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return integer 
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set usuario
     *
     * @param \AppBundle\Entity\Usuario $usuario
     * @return DatoUsuario
     */
    public function setUsuario(\AppBundle\Entity\Usuario $usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \AppBundle\Entity\Usuario 
     */
    public function getUsuario()
>>>>>>> THEIRS
    {
        return $this->usuario;
    }
}
