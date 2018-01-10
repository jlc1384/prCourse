<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // first_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'first_homepage');
            }

            return array (  '_controller' => 'FirstBundle\\Controller\\DefaultController::indexAction',  '_route' => 'first_homepage',);
        }

        if (0 === strpos($pathinfo, '/test')) {
            // test_twig_extends
            if ($pathinfo === '/test-twig_extend') {
                return array (  '_controller' => 'FirstBundle\\Controller\\DefaultController::testTwigExtendsAction',  '_route' => 'test_twig_extends',);
            }

            if (0 === strpos($pathinfo, '/test_')) {
                // test_twig_filter
                if ($pathinfo === '/test_twig_filter') {
                    return array (  '_controller' => 'FirstBundle\\Controller\\DefaultController::testTwigFilterAction',  '_route' => 'test_twig_filter',);
                }

                // test_add_action
                if ($pathinfo === '/test_add_action') {
                    return array (  '_controller' => 'FirstBundle\\Controller\\DefaultController::createCursoAction',  '_route' => 'test_add_action',);
                }

            }

        }

        // test_listcourses_action
        if ($pathinfo === '/listcourses') {
            return array (  '_controller' => 'FirstBundle\\Controller\\DefaultController::listCoursesAction',  '_route' => 'test_listcourses_action',);
        }

        // test_updatecourses_action
        if (0 === strpos($pathinfo, '/updatecourse') && preg_match('#^/updatecourse/(?P<id>[^/]++)/(?P<name>[^/]++)/(?P<description>[^/]++)/(?P<price>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_updatecourses_action')), array (  '_controller' => 'FirstBundle\\Controller\\DefaultController::updateCourseAction',));
        }

        // test_deletecourses_action
        if (0 === strpos($pathinfo, '/deletecourse') && preg_match('#^/deletecourse/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_deletecourses_action')), array (  '_controller' => 'FirstBundle\\Controller\\DefaultController::deleteCourseAction',));
        }

        // test_find_action
        if ($pathinfo === '/find') {
            return array (  '_controller' => 'FirstBundle\\Controller\\DefaultController::findCourseAction',  '_route' => 'test_find_action',);
        }

        if (0 === strpos($pathinfo, '/native')) {
            // test_nativesql_action
            if ($pathinfo === '/nativesql') {
                return array (  '_controller' => 'FirstBundle\\Controller\\DefaultController::nativeSQLAction',  '_route' => 'test_nativesql_action',);
            }

            // test_nativedql_action
            if ($pathinfo === '/nativedql') {
                return array (  '_controller' => 'FirstBundle\\Controller\\DefaultController::nativeDQLAction',  '_route' => 'test_nativedql_action',);
            }

        }

        // test_querybuilder_action
        if ($pathinfo === '/qbuilder') {
            return array (  '_controller' => 'FirstBundle\\Controller\\DefaultController::queryBuilderAction',  '_route' => 'test_querybuilder_action',);
        }

        // test_index
        if ($pathinfo === '/test/firsttesttempl13') {
            return array (  '_controller' => 'AppBundle\\Controller\\PruebasController::testAction',  '_route' => 'test_index',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // app_default_hell
        if ($pathinfo === '/hellAction') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::hellAction',  '_route' => 'app_default_hell',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
