<?php

namespace TimeToStart\ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Project
 *
 * @ORM\Table(name="project", indexes={@ORM\Index(name="iduser", columns={"iduser"})})
 * @ORM\Entity
 */
class Project
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idproject", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idproject;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datecreation", type="date", nullable=false)
     */
    private $datecreation;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="iduser", type="integer", nullable=false)
     * @ORM\ManyToOne(targetEntity="User\UserBundle\Entity\User")
     */
    private $iduser;

    /**
     * @var string
     *
     * @ORM\Column(name="file", type="string", length=255, nullable=true)
     */
    private $file;

    /**
     * @var string
     *
     * @ORM\Column(name="filelink", type="string", length=255, nullable=true)
     */
    private $filelink;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="helptype", type="string", length=255, nullable=true)
     */
    private $helptype;

    /**
     * @var string
     *
     * @ORM\Column(name="tdiscription", type="string", length=255, nullable=true)
     */
    private $tdiscription;

    /**
     * @var float
     *
     * @ORM\Column(name="target", type="float", precision=10, scale=0, nullable=true)
     */
    private $target;

    /**
     * @var string
     *
     * @ORM\Column(name="prize", type="string", length=255, nullable=true)
     */
    private $prize;

    /**
     * @var string
     *
     * @ORM\Column(name="htask", type="text", nullable=true)
     */
    private $htask;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="taskdate", type="date", nullable=true)
     */
    private $taskdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="rating", type="integer", nullable=true)
     */
    private $rating;

    /**
     * @var integer
     *
     * @ORM\Column(name="timerated", type="integer", nullable=true)
     */
    private $timerated;

    /**
     * @var string
     *
     * @ORM\Column(name="imagelink", type="string", length=255, nullable=true)
     */
    private $imagelink;

    function getIdproject() {
        return $this->idproject;
    }

    function getDatecreation() {
        return $this->datecreation;
    }

    function getType() {
        return $this->type;
    }

    function getDescription() {
        return $this->description;
    }

    function getIduser() {
        return $this->iduser;
    }

    function getFile() {
        return $this->file;
    }

    function getFilelink() {
        return $this->filelink;
    }

    function getName() {
        return $this->name;
    }

    function getHelptype() {
        return $this->helptype;
    }

    function getTdiscription() {
        return $this->tdiscription;
    }

    function getTarget() {
        return $this->target;
    }

    function getPrize() {
        return $this->prize;
    }

    function getHtask() {
        return $this->htask;
    }

    function getTaskdate() {
        return $this->taskdate;
    }

    function getRating() {
        return $this->rating;
    }

    function getTimerated() {
        return $this->timerated;
    }

    function getImagelink() {
        return $this->imagelink;
    }

    function setIdproject($idproject) {
        $this->idproject = $idproject;
    }

    function setDatecreation(\DateTime $datecreation) {
        $this->datecreation = $datecreation;
    }

    function setType($type) {
        $this->type = $type;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setIduser($iduser) {
        $this->iduser = $iduser;
    }

    function setFile($file) {
        $this->file = $file;
    }

    function setFilelink($filelink) {
        $this->filelink = $filelink;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setHelptype($helptype) {
        $this->helptype = $helptype;
    }

    function setTdiscription($tdiscription) {
        $this->tdiscription = $tdiscription;
    }

    function setTarget($target) {
        $this->target = $target;
    }

    function setPrize($prize) {
        $this->prize = $prize;
    }

    function setHtask($htask) {
        $this->htask = $htask;
    }

    function setTaskdate(\DateTime $taskdate) {
        $this->taskdate = $taskdate;
    }

    function setRating($rating) {
        $this->rating = $rating;
    }

    function setTimerated($timerated) {
        $this->timerated = $timerated;
    }

    function setImagelink($imagelink) {
        $this->imagelink = $imagelink;
    }

  public function __construct()
    {
        $this->taskdate = new \DateTime();
    }
}
