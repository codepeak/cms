<?php namespace Codepeak\Dsettings;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 */
class Post extends Model {

    /**
     * Define the database table
     *
     * @var string
     */
    protected $table = 'cms_posts';

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getParentId()
    {
        return $this->parent_id;
    }

    public function setParentId($parentId)
    {
        $this->parent_id = $parentId;
        return $this;
    }

    public function getHeadline()
    {
        return $this->headline;
    }

    public function setHeadline($headline)
    {
        $this->headline = $headline;
        return $this;
    }

    public function getTeaser()
    {
        return $this->teaser;
    }

    public function setTeaser($teaser)
    {
        $this->teaser = $teaser;
        return $this;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    public function getSlug()
    {
        return $this->slug;
    }

    public function setSlug($slug)
    {
        $this->slug = $slug;
        return $this;
    }

    public function getMetaTitle()
    {
        return $this->meta_title;
    }

    public function setMetaTitle($metaTitle)
    {
        $this->meta_title = $metaTitle;
        return $this;
    }

    public function getMetaDescription()
    {
        return $this->meta_description;
    }

    public function setMetaDescription($metaDescription)
    {
        $this->meta_description = $metaDescription;
        return $this;
    }

    public function getMetaKeywords()
    {
        return $this->meta_keywords;
    }

    public function setMetaKeywords($metaKeywords)
    {
        $this->meta_keywords = $metaKeywords;
        return $this;
    }

    public function getRevision()
    {
        return $this->revision;
    }

    public function setRevision($revision)
    {
        $this->revision = $revision;
        return $this;
    }

    public function getPublishedAt()
    {
        return new \DateTime($this->published_at);
    }

    public function setPublishedAt(\DateTime $publishedAt)
    {
        $this->published_at = $publishedAt->format('Y-m-d H:i:s');
        return $this;
    }

}