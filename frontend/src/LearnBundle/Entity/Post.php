<?php

namespace LearnBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of Post
 *
 * @author dwc
 */
class Post
{

    protected $title;
    protected $summary;
    protected $content;
    protected $authorEmail;
    protected $publishedAt;

}
