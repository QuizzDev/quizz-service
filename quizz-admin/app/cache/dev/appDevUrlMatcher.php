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

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // vimeda_common_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'vimeda_common_homepage')), array (  '_controller' => 'VimedaCommonBundle:Default:index',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            // sonata_admin_retrieve_autocomplete_items
            if ($pathinfo === '/admin/core/get-autocomplete-items') {
                return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
            }

            if (0 === strpos($pathinfo, '/admin/quizz/admin')) {
                if (0 === strpos($pathinfo, '/admin/quizz/admin/question')) {
                    // admin_quizz_admin_question_list
                    if ($pathinfo === '/admin/quizz/admin/question/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'quizz_admin.admin.question',  '_sonata_name' => 'admin_quizz_admin_question_list',  '_route' => 'admin_quizz_admin_question_list',);
                    }

                    // admin_quizz_admin_question_create
                    if ($pathinfo === '/admin/quizz/admin/question/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'quizz_admin.admin.question',  '_sonata_name' => 'admin_quizz_admin_question_create',  '_route' => 'admin_quizz_admin_question_create',);
                    }

                    // admin_quizz_admin_question_batch
                    if ($pathinfo === '/admin/quizz/admin/question/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'quizz_admin.admin.question',  '_sonata_name' => 'admin_quizz_admin_question_batch',  '_route' => 'admin_quizz_admin_question_batch',);
                    }

                    // admin_quizz_admin_question_edit
                    if (preg_match('#^/admin/quizz/admin/question/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_quizz_admin_question_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'quizz_admin.admin.question',  '_sonata_name' => 'admin_quizz_admin_question_edit',));
                    }

                    // admin_quizz_admin_question_delete
                    if (preg_match('#^/admin/quizz/admin/question/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_quizz_admin_question_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'quizz_admin.admin.question',  '_sonata_name' => 'admin_quizz_admin_question_delete',));
                    }

                    // admin_quizz_admin_question_show
                    if (preg_match('#^/admin/quizz/admin/question/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_quizz_admin_question_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'quizz_admin.admin.question',  '_sonata_name' => 'admin_quizz_admin_question_show',));
                    }

                    // admin_quizz_admin_question_export
                    if ($pathinfo === '/admin/quizz/admin/question/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'quizz_admin.admin.question',  '_sonata_name' => 'admin_quizz_admin_question_export',  '_route' => 'admin_quizz_admin_question_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/quizz/admin/topic')) {
                    // admin_quizz_admin_topic_list
                    if ($pathinfo === '/admin/quizz/admin/topic/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'quizz_admin.admin.topic',  '_sonata_name' => 'admin_quizz_admin_topic_list',  '_route' => 'admin_quizz_admin_topic_list',);
                    }

                    // admin_quizz_admin_topic_create
                    if ($pathinfo === '/admin/quizz/admin/topic/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'quizz_admin.admin.topic',  '_sonata_name' => 'admin_quizz_admin_topic_create',  '_route' => 'admin_quizz_admin_topic_create',);
                    }

                    // admin_quizz_admin_topic_batch
                    if ($pathinfo === '/admin/quizz/admin/topic/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'quizz_admin.admin.topic',  '_sonata_name' => 'admin_quizz_admin_topic_batch',  '_route' => 'admin_quizz_admin_topic_batch',);
                    }

                    // admin_quizz_admin_topic_edit
                    if (preg_match('#^/admin/quizz/admin/topic/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_quizz_admin_topic_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'quizz_admin.admin.topic',  '_sonata_name' => 'admin_quizz_admin_topic_edit',));
                    }

                    // admin_quizz_admin_topic_delete
                    if (preg_match('#^/admin/quizz/admin/topic/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_quizz_admin_topic_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'quizz_admin.admin.topic',  '_sonata_name' => 'admin_quizz_admin_topic_delete',));
                    }

                    // admin_quizz_admin_topic_show
                    if (preg_match('#^/admin/quizz/admin/topic/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_quizz_admin_topic_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'quizz_admin.admin.topic',  '_sonata_name' => 'admin_quizz_admin_topic_show',));
                    }

                    // admin_quizz_admin_topic_export
                    if ($pathinfo === '/admin/quizz/admin/topic/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'quizz_admin.admin.topic',  '_sonata_name' => 'admin_quizz_admin_topic_export',  '_route' => 'admin_quizz_admin_topic_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/quizz/admin/answer')) {
                    // admin_quizz_admin_answer_list
                    if ($pathinfo === '/admin/quizz/admin/answer/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'quizz_admin.admin.answer',  '_sonata_name' => 'admin_quizz_admin_answer_list',  '_route' => 'admin_quizz_admin_answer_list',);
                    }

                    // admin_quizz_admin_answer_create
                    if ($pathinfo === '/admin/quizz/admin/answer/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'quizz_admin.admin.answer',  '_sonata_name' => 'admin_quizz_admin_answer_create',  '_route' => 'admin_quizz_admin_answer_create',);
                    }

                    // admin_quizz_admin_answer_batch
                    if ($pathinfo === '/admin/quizz/admin/answer/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'quizz_admin.admin.answer',  '_sonata_name' => 'admin_quizz_admin_answer_batch',  '_route' => 'admin_quizz_admin_answer_batch',);
                    }

                    // admin_quizz_admin_answer_edit
                    if (preg_match('#^/admin/quizz/admin/answer/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_quizz_admin_answer_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'quizz_admin.admin.answer',  '_sonata_name' => 'admin_quizz_admin_answer_edit',));
                    }

                    // admin_quizz_admin_answer_delete
                    if (preg_match('#^/admin/quizz/admin/answer/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_quizz_admin_answer_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'quizz_admin.admin.answer',  '_sonata_name' => 'admin_quizz_admin_answer_delete',));
                    }

                    // admin_quizz_admin_answer_show
                    if (preg_match('#^/admin/quizz/admin/answer/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_quizz_admin_answer_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'quizz_admin.admin.answer',  '_sonata_name' => 'admin_quizz_admin_answer_show',));
                    }

                    // admin_quizz_admin_answer_export
                    if ($pathinfo === '/admin/quizz/admin/answer/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'quizz_admin.admin.answer',  '_sonata_name' => 'admin_quizz_admin_answer_export',  '_route' => 'admin_quizz_admin_answer_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/quizz/admin/drug')) {
                    // admin_quizz_admin_drug_list
                    if ($pathinfo === '/admin/quizz/admin/drug/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'quizz_admin.admin.drug',  '_sonata_name' => 'admin_quizz_admin_drug_list',  '_route' => 'admin_quizz_admin_drug_list',);
                    }

                    // admin_quizz_admin_drug_create
                    if ($pathinfo === '/admin/quizz/admin/drug/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'quizz_admin.admin.drug',  '_sonata_name' => 'admin_quizz_admin_drug_create',  '_route' => 'admin_quizz_admin_drug_create',);
                    }

                    // admin_quizz_admin_drug_batch
                    if ($pathinfo === '/admin/quizz/admin/drug/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'quizz_admin.admin.drug',  '_sonata_name' => 'admin_quizz_admin_drug_batch',  '_route' => 'admin_quizz_admin_drug_batch',);
                    }

                    // admin_quizz_admin_drug_edit
                    if (preg_match('#^/admin/quizz/admin/drug/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_quizz_admin_drug_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'quizz_admin.admin.drug',  '_sonata_name' => 'admin_quizz_admin_drug_edit',));
                    }

                    // admin_quizz_admin_drug_delete
                    if (preg_match('#^/admin/quizz/admin/drug/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_quizz_admin_drug_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'quizz_admin.admin.drug',  '_sonata_name' => 'admin_quizz_admin_drug_delete',));
                    }

                    // admin_quizz_admin_drug_show
                    if (preg_match('#^/admin/quizz/admin/drug/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_quizz_admin_drug_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'quizz_admin.admin.drug',  '_sonata_name' => 'admin_quizz_admin_drug_show',));
                    }

                    // admin_quizz_admin_drug_export
                    if ($pathinfo === '/admin/quizz/admin/drug/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'quizz_admin.admin.drug',  '_sonata_name' => 'admin_quizz_admin_drug_export',  '_route' => 'admin_quizz_admin_drug_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/quizz/admin/target')) {
                    // admin_quizz_admin_target_list
                    if ($pathinfo === '/admin/quizz/admin/target/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'quizz_admin.admin.target',  '_sonata_name' => 'admin_quizz_admin_target_list',  '_route' => 'admin_quizz_admin_target_list',);
                    }

                    // admin_quizz_admin_target_create
                    if ($pathinfo === '/admin/quizz/admin/target/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'quizz_admin.admin.target',  '_sonata_name' => 'admin_quizz_admin_target_create',  '_route' => 'admin_quizz_admin_target_create',);
                    }

                    // admin_quizz_admin_target_batch
                    if ($pathinfo === '/admin/quizz/admin/target/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'quizz_admin.admin.target',  '_sonata_name' => 'admin_quizz_admin_target_batch',  '_route' => 'admin_quizz_admin_target_batch',);
                    }

                    // admin_quizz_admin_target_edit
                    if (preg_match('#^/admin/quizz/admin/target/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_quizz_admin_target_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'quizz_admin.admin.target',  '_sonata_name' => 'admin_quizz_admin_target_edit',));
                    }

                    // admin_quizz_admin_target_delete
                    if (preg_match('#^/admin/quizz/admin/target/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_quizz_admin_target_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'quizz_admin.admin.target',  '_sonata_name' => 'admin_quizz_admin_target_delete',));
                    }

                    // admin_quizz_admin_target_show
                    if (preg_match('#^/admin/quizz/admin/target/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_quizz_admin_target_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'quizz_admin.admin.target',  '_sonata_name' => 'admin_quizz_admin_target_show',));
                    }

                    // admin_quizz_admin_target_export
                    if ($pathinfo === '/admin/quizz/admin/target/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'quizz_admin.admin.target',  '_sonata_name' => 'admin_quizz_admin_target_export',  '_route' => 'admin_quizz_admin_target_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/quizz/admin/indication')) {
                    // admin_quizz_admin_indication_list
                    if ($pathinfo === '/admin/quizz/admin/indication/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'quizz_admin.admin.indication',  '_sonata_name' => 'admin_quizz_admin_indication_list',  '_route' => 'admin_quizz_admin_indication_list',);
                    }

                    // admin_quizz_admin_indication_create
                    if ($pathinfo === '/admin/quizz/admin/indication/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'quizz_admin.admin.indication',  '_sonata_name' => 'admin_quizz_admin_indication_create',  '_route' => 'admin_quizz_admin_indication_create',);
                    }

                    // admin_quizz_admin_indication_batch
                    if ($pathinfo === '/admin/quizz/admin/indication/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'quizz_admin.admin.indication',  '_sonata_name' => 'admin_quizz_admin_indication_batch',  '_route' => 'admin_quizz_admin_indication_batch',);
                    }

                    // admin_quizz_admin_indication_edit
                    if (preg_match('#^/admin/quizz/admin/indication/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_quizz_admin_indication_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'quizz_admin.admin.indication',  '_sonata_name' => 'admin_quizz_admin_indication_edit',));
                    }

                    // admin_quizz_admin_indication_delete
                    if (preg_match('#^/admin/quizz/admin/indication/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_quizz_admin_indication_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'quizz_admin.admin.indication',  '_sonata_name' => 'admin_quizz_admin_indication_delete',));
                    }

                    // admin_quizz_admin_indication_show
                    if (preg_match('#^/admin/quizz/admin/indication/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_quizz_admin_indication_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'quizz_admin.admin.indication',  '_sonata_name' => 'admin_quizz_admin_indication_show',));
                    }

                    // admin_quizz_admin_indication_export
                    if ($pathinfo === '/admin/quizz/admin/indication/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'quizz_admin.admin.indication',  '_sonata_name' => 'admin_quizz_admin_indication_export',  '_route' => 'admin_quizz_admin_indication_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/quizz/admin/contraindication')) {
                    // admin_quizz_admin_contraindication_list
                    if ($pathinfo === '/admin/quizz/admin/contraindication/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'quizz_admin.admin.contra_indication',  '_sonata_name' => 'admin_quizz_admin_contraindication_list',  '_route' => 'admin_quizz_admin_contraindication_list',);
                    }

                    // admin_quizz_admin_contraindication_create
                    if ($pathinfo === '/admin/quizz/admin/contraindication/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'quizz_admin.admin.contra_indication',  '_sonata_name' => 'admin_quizz_admin_contraindication_create',  '_route' => 'admin_quizz_admin_contraindication_create',);
                    }

                    // admin_quizz_admin_contraindication_batch
                    if ($pathinfo === '/admin/quizz/admin/contraindication/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'quizz_admin.admin.contra_indication',  '_sonata_name' => 'admin_quizz_admin_contraindication_batch',  '_route' => 'admin_quizz_admin_contraindication_batch',);
                    }

                    // admin_quizz_admin_contraindication_edit
                    if (preg_match('#^/admin/quizz/admin/contraindication/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_quizz_admin_contraindication_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'quizz_admin.admin.contra_indication',  '_sonata_name' => 'admin_quizz_admin_contraindication_edit',));
                    }

                    // admin_quizz_admin_contraindication_delete
                    if (preg_match('#^/admin/quizz/admin/contraindication/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_quizz_admin_contraindication_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'quizz_admin.admin.contra_indication',  '_sonata_name' => 'admin_quizz_admin_contraindication_delete',));
                    }

                    // admin_quizz_admin_contraindication_show
                    if (preg_match('#^/admin/quizz/admin/contraindication/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_quizz_admin_contraindication_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'quizz_admin.admin.contra_indication',  '_sonata_name' => 'admin_quizz_admin_contraindication_show',));
                    }

                    // admin_quizz_admin_contraindication_export
                    if ($pathinfo === '/admin/quizz/admin/contraindication/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'quizz_admin.admin.contra_indication',  '_sonata_name' => 'admin_quizz_admin_contraindication_export',  '_route' => 'admin_quizz_admin_contraindication_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/quizz/admin/advereeffect')) {
                    // admin_quizz_admin_advereeffect_list
                    if ($pathinfo === '/admin/quizz/admin/advereeffect/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'quizz_admin.admin.advere_effect',  '_sonata_name' => 'admin_quizz_admin_advereeffect_list',  '_route' => 'admin_quizz_admin_advereeffect_list',);
                    }

                    // admin_quizz_admin_advereeffect_create
                    if ($pathinfo === '/admin/quizz/admin/advereeffect/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'quizz_admin.admin.advere_effect',  '_sonata_name' => 'admin_quizz_admin_advereeffect_create',  '_route' => 'admin_quizz_admin_advereeffect_create',);
                    }

                    // admin_quizz_admin_advereeffect_batch
                    if ($pathinfo === '/admin/quizz/admin/advereeffect/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'quizz_admin.admin.advere_effect',  '_sonata_name' => 'admin_quizz_admin_advereeffect_batch',  '_route' => 'admin_quizz_admin_advereeffect_batch',);
                    }

                    // admin_quizz_admin_advereeffect_edit
                    if (preg_match('#^/admin/quizz/admin/advereeffect/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_quizz_admin_advereeffect_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'quizz_admin.admin.advere_effect',  '_sonata_name' => 'admin_quizz_admin_advereeffect_edit',));
                    }

                    // admin_quizz_admin_advereeffect_delete
                    if (preg_match('#^/admin/quizz/admin/advereeffect/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_quizz_admin_advereeffect_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'quizz_admin.admin.advere_effect',  '_sonata_name' => 'admin_quizz_admin_advereeffect_delete',));
                    }

                    // admin_quizz_admin_advereeffect_show
                    if (preg_match('#^/admin/quizz/admin/advereeffect/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_quizz_admin_advereeffect_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'quizz_admin.admin.advere_effect',  '_sonata_name' => 'admin_quizz_admin_advereeffect_show',));
                    }

                    // admin_quizz_admin_advereeffect_export
                    if ($pathinfo === '/admin/quizz/admin/advereeffect/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'quizz_admin.admin.advere_effect',  '_sonata_name' => 'admin_quizz_admin_advereeffect_export',  '_route' => 'admin_quizz_admin_advereeffect_export',);
                    }

                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
