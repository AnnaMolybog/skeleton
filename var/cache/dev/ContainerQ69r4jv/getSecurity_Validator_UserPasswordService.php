<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.validator.user_password' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/ConstraintValidatorInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/ConstraintValidator.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Validator/Constraints/UserPasswordValidator.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Encoder/EncoderFactoryInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Encoder/EncoderFactory.php';

return $this->services['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'}, ${($_ = isset($this->services['security.encoder_factory.generic']) ? $this->services['security.encoder_factory.generic'] : $this->services['security.encoder_factory.generic'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array())) && false ?: '_'});