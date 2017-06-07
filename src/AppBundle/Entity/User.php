<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
 * NOTE: This is not a mapped field of entity metadata, just a simple property.
 *
 * @Vich\UploadableField(mapping="articles_image", fileNameProperty="imageName", size="imageSize")
 *
 * @var File
 */
private $imageFile;

/**
 * @ORM\Column(type="string", length=255)
 *
 * @var string
 */
private $imageName;

/**
 * @ORM\Column(type="integer", nullable=true)
 *
 * @var integer
 */
private $imageSize;

/**
 * @ORM\Column(type="datetime", nullable=true)
 *
 * @var \DateTime
 */
private $updatedImgAt;

/**
 * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
 * of 'UploadedFile' is injected into this setter to trigger the  update. If this
 * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
 * must be able to accept an instance of 'File' as the bundle will inject one here
 * during Doctrine hydration.
 *
 * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
 *
 * @return Post
 */
public function setImageFile(File $image = null)
{
    $this->imageFile = $image;

    if ($image) {
        // It is required that at least one field changes if you are using doctrine
        // otherwise the event listeners won't be called and the file is lost
        $this->updatedImgAt = new \DateTimeImmutable();
    }

    return $this;
}

/**
 * @return File|null
 */
public function getImageFile()
{
    return $this->imageFile;
}

/**
 * @param string $imageName
 *
 * @return Post
 */
public function setImageName($imageName)
{
    $this->imageName = $imageName;

    return $this;
}

/**
 * @return string|null
 */
public function getImageName()
{
    return $this->imageName;
}

/**
 * @param integer $imageSize
 *
 * @return Post
 */
public function setImageSize($imageSize)
{
    $this->imagesize = $imageSize;

    return $this;
}

/**
 * @return integer|null
 */
public function getImageSize()
{
    return $this->imageSize;
}

/**
 * Set nom
 *
 * @param string $nom
 *
 * @return User
 */
public function setNom($nom)
{
    $this->nom = $nom;

    return $this;
}

/**
 * Set nom
 *
 * @param string $nom
 *
 * @return User
 */
 public function getNom($nom)
{
  return $this->nom;
}
/**
 * Set nom
 *
 * @param string $prenom
 *
 * @return User
 */
public function setPrenom($prenom)
{
    $this->prenom = $prenom;

    return $this;
}

/**
 * Set prenom
 *
 * @param string $prenom
 *
 * @return User
 */
 public function getPrenom($prenom)
{
  return $this->prenom;
}

}
