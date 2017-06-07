<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Post
 *
 * @ORM\Table(name="post")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PostRepository")
 * @ORM\HasLifecycleCallbacks
 * @Vich\Uploadable
 */
class Post
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createAt", type="datetime")
     */
    private $createAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updateAt", type="datetime", nullable=true)
     */
    private $updateAt;

    /**
     * @var string
     *
     * @ORM\Column(name="draft", type="string", nullable=true)
     */
    private $draft;

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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Post
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Post
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set createAt
     *
     * @param \DateTime $createAt
     *
     * @return Post
     */
    public function setCreateAt($createAt)
    {
        $this->createAt = $createAt;

        return $this;
    }

    /**
    * Gets triggered only on insert
    * @ORM\PrePersist
    */
    public function onPrePersist()
    {
      $this->createAt = new \DateTime("now");
    }

    /**
     * Get createAt
     *
     * @return \DateTime
     */
    public function getCreateAt()
    {
        return $this->createAt;
    }

    /**
    * Gets triggered every time on update
    * @ORM\PreUpdate
    */
    public function onPreUpdate()
    {
      $this->updateAt = new \DateTime("now");
    }

    /**
     * Set updateAt
     *
     * @param \DateTime $updateAt
     *
     * @return Post
     */
    public function setUpdateAt($updateAt)
    {
        $this->updateAt = $updateAt;

        return $this;
    }

    /**
     * Get updateAt
     *
     * @return \DateTime
     */
    public function getUpdateAt()
    {
        return $this->updateAt;
    }

    /**
     * Set draft
     *
     * @param string $draft
     *
     * @return Post
     */
    public function setDraft($draft)
    {
        $this->draft = $draft;

        return $this;
    }

    /**
     * Get draft
     *
     * @return string
     */
    public function getDraft()
    {
        return $this->draft;
    }
}
