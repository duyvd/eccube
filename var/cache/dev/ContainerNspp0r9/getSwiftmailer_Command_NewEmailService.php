<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'swiftmailer.command.new_email' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\swiftmailer-bundle\\Command\\AbstractSwiftMailerCommand.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\swiftmailer-bundle\\Command\\NewEmailCommand.php';

$this->services['swiftmailer.command.new_email'] = $instance = new \Symfony\Bundle\SwiftmailerBundle\Command\NewEmailCommand();

$instance->setName('swiftmailer:email:send');

return $instance;
