<?php

namespace Riverway\Cms\CoreBundle\Dto;

use Riverway\Cms\CoreBundle\Enum\TemplateEnum;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;

class ContactDto
{
    public $name;
    public $email;
    public $subject;
    public $message;
}