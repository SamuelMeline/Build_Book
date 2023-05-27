<?php

namespace ContainerXp4zw81;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKarserRecaptcha3_ValidatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'karser_recaptcha3.validator' shared service.
     *
     * @return \Karser\Recaptcha3Bundle\Validator\Constraints\Recaptcha3Validator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'karser'.\DIRECTORY_SEPARATOR.'karser-recaptcha3-bundle'.\DIRECTORY_SEPARATOR.'Validator'.\DIRECTORY_SEPARATOR.'Constraints'.\DIRECTORY_SEPARATOR.'Recaptcha3Validator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'google'.\DIRECTORY_SEPARATOR.'recaptcha'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ReCaptcha'.\DIRECTORY_SEPARATOR.'ReCaptcha.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'google'.\DIRECTORY_SEPARATOR.'recaptcha'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ReCaptcha'.\DIRECTORY_SEPARATOR.'RequestMethod.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'google'.\DIRECTORY_SEPARATOR.'recaptcha'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ReCaptcha'.\DIRECTORY_SEPARATOR.'RequestMethod'.\DIRECTORY_SEPARATOR.'CurlPost.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'google'.\DIRECTORY_SEPARATOR.'recaptcha'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ReCaptcha'.\DIRECTORY_SEPARATOR.'RequestMethod'.\DIRECTORY_SEPARATOR.'Curl.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'karser'.\DIRECTORY_SEPARATOR.'karser-recaptcha3-bundle'.\DIRECTORY_SEPARATOR.'Services'.\DIRECTORY_SEPARATOR.'IpResolverInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'karser'.\DIRECTORY_SEPARATOR.'karser-recaptcha3-bundle'.\DIRECTORY_SEPARATOR.'Services'.\DIRECTORY_SEPARATOR.'IpResolver.php';

        $a = new \ReCaptcha\ReCaptcha($container->getEnv('RECAPTCHA3_SECRET'), new \ReCaptcha\RequestMethod\CurlPost(new \ReCaptcha\RequestMethod\Curl(), (new \Karser\Recaptcha3Bundle\Services\HostProvider('www.google.com'))->getVerifyUrl()));
        $a->setScoreThreshold(0.5);

        return $container->privates['karser_recaptcha3.validator'] = new \Karser\Recaptcha3Bundle\Validator\Constraints\Recaptcha3Validator($a, $container->getEnv('bool:RECAPTCHA3_ENABLED'), new \Karser\Recaptcha3Bundle\Services\IpResolver(($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()))));
    }
}
