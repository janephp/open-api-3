<?php

namespace Github\Model;

class ReposOwnerRepoContentsPathDeleteBodyAuthor
{
    /**
     * The name of the author (or committer) of the commit
     *
     * @var string
     */
    protected $name;
    /**
     * The email of the author (or committer) of the commit
     *
     * @var string
     */
    protected $email;
    /**
     * The name of the author (or committer) of the commit
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the author (or committer) of the commit
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * The email of the author (or committer) of the commit
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * The email of the author (or committer) of the commit
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email) : self
    {
        $this->email = $email;
        return $this;
    }
}