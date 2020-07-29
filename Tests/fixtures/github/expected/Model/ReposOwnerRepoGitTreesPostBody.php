<?php

namespace Github\Model;

class ReposOwnerRepoGitTreesPostBody
{
    /**
     * Objects (of `path`, `mode`, `type`, and `sha`) specifying a tree structure.
     *
     * @var ReposOwnerRepoGitTreesPostBodyTreeItem[]
     */
    protected $tree;
    /**
     * The SHA1 of the tree you want to update with new data. If you don't set this, the commit will be created on top of everything; however, it will only contain your change, the rest of your files will show up as deleted.
     *
     * @var string
     */
    protected $baseTree;
    /**
     * Objects (of `path`, `mode`, `type`, and `sha`) specifying a tree structure.
     *
     * @return ReposOwnerRepoGitTreesPostBodyTreeItem[]
     */
    public function getTree() : array
    {
        return $this->tree;
    }
    /**
     * Objects (of `path`, `mode`, `type`, and `sha`) specifying a tree structure.
     *
     * @param ReposOwnerRepoGitTreesPostBodyTreeItem[] $tree
     *
     * @return self
     */
    public function setTree(array $tree) : self
    {
        $this->tree = $tree;
        return $this;
    }
    /**
     * The SHA1 of the tree you want to update with new data. If you don't set this, the commit will be created on top of everything; however, it will only contain your change, the rest of your files will show up as deleted.
     *
     * @return string
     */
    public function getBaseTree() : string
    {
        return $this->baseTree;
    }
    /**
     * The SHA1 of the tree you want to update with new data. If you don't set this, the commit will be created on top of everything; however, it will only contain your change, the rest of your files will show up as deleted.
     *
     * @param string $baseTree
     *
     * @return self
     */
    public function setBaseTree(string $baseTree) : self
    {
        $this->baseTree = $baseTree;
        return $this;
    }
}