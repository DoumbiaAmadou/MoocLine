<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
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

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

        }

        // moocline_forum_homepage
        if (0 === strpos($pathinfo, '/forum/hello') && preg_match('#^/forum/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'moocline_forum_homepage')), array (  '_controller' => 'moocline\\ForumBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/cours')) {
            // moocline_cours_creation
            if ($pathinfo === '/cours/creation') {
                return array (  '_controller' => 'moocline\\CoursBundle\\Controller\\CoursController::creerAction',  '_route' => 'moocline_cours_creation',);
            }

            // moocline_cours_vue
            if (0 === strpos($pathinfo, '/cours/vuecours') && preg_match('#^/cours/vuecours/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'moocline_cours_vue')), array (  '_controller' => 'moocline\\CoursBundle\\Controller\\CoursController::voirAction',));
            }

            // moocline_cours_inscription
            if (0 === strpos($pathinfo, '/cours/inscription') && preg_match('#^/cours/inscription/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'moocline_cours_inscription')), array (  '_controller' => 'moocline\\CoursBundle\\Controller\\CoursController::inscriptionAction',));
            }

            // moocline_cours_vueEtu
            if (0 === strpos($pathinfo, '/cours/vuecoursEtu') && preg_match('#^/cours/vuecoursEtu/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'moocline_cours_vueEtu')), array (  '_controller' => 'moocline\\CoursBundle\\Controller\\CoursController::voirEtudiantAction',));
            }

            // moocline_cours_chapitre
            if ($pathinfo === '/cours/chapitre/creation') {
                return array (  '_controller' => 'moocline\\CoursBundle\\Controller\\ChapitreController::creerAction',  '_route' => 'moocline_cours_chapitre',);
            }

            // moocline_chapitre_vue
            if (0 === strpos($pathinfo, '/cours/vuechapitre') && preg_match('#^/cours/vuechapitre/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'moocline_chapitre_vue')), array (  '_controller' => 'moocline\\CoursBundle\\Controller\\ChapitreController::voirAction',));
            }

            // moocline_chapitre_edition
            if (0 === strpos($pathinfo, '/cours/chapitre/edition') && preg_match('#^/cours/chapitre/edition/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'moocline_chapitre_edition')), array (  '_controller' => 'moocline\\CoursBundle\\Controller\\ChapitreController::editionAction',));
            }

            // moocline_cours_edition
            if (0 === strpos($pathinfo, '/cours/edition') && preg_match('#^/cours/edition/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'moocline_cours_edition')), array (  '_controller' => 'moocline\\CoursBundle\\Controller\\CoursController::editionAction',));
            }

            // moocline_cours_list
            if (0 === strpos($pathinfo, '/cours/list') && preg_match('#^/cours/list(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'moocline_cours_list')), array (  '_controller' => 'moocline\\CoursBundle\\Controller\\CoursController::listAction',  'page' => 1,));
            }

        }

        // home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'moocline\\CompteBundle\\Controller\\RegisterController::indexAction',  '_route' => 'home',);
        }

        if (0 === strpos($pathinfo, '/inscription-e')) {
            // inscription_Enseignant
            if ($pathinfo === '/inscription-enseignant') {
                return array (  '_controller' => 'moocline\\CompteBundle\\Controller\\RegisterController::inscriptionEnseignantAction',  '_route' => 'inscription_Enseignant',);
            }

            // inscription_Etudiant
            if ($pathinfo === '/inscription-etudiant') {
                return array (  '_controller' => 'moocline\\CompteBundle\\Controller\\RegisterController::inscrEtudiantAction',  '_route' => 'inscription_Etudiant',);
            }

        }

        if (0 === strpos($pathinfo, '/modificationE')) {
            // modification_Etudiant
            if (0 === strpos($pathinfo, '/modificationEtudiant') && preg_match('#^/modificationEtudiant/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modification_Etudiant')), array (  '_controller' => 'moocline\\CompteBundle\\Controller\\ModificationController::modificationEtuAction',));
            }

            // modification_Enseignant
            if (0 === strpos($pathinfo, '/modificationEnseignant') && preg_match('#^/modificationEnseignant/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modification_Enseignant')), array (  '_controller' => 'moocline\\CompteBundle\\Controller\\ModificationController::modificationEnsAction',));
            }

        }

        if (0 === strpos($pathinfo, '/vueE')) {
            // vue_Etudiant
            if (0 === strpos($pathinfo, '/vueEtudiant') && preg_match('#^/vueEtudiant/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_vue_Etudiant;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vue_Etudiant')), array (  '_controller' => 'moocline\\CompteBundle\\Controller\\ModificationController::voirEtuAction',));
            }
            not_vue_Etudiant:

            // vue_Enseignant
            if (0 === strpos($pathinfo, '/vueEnseignant') && preg_match('#^/vueEnseignant/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vue_Enseignant')), array (  '_controller' => 'moocline\\CompteBundle\\Controller\\ModificationController::voirEnsAction',));
            }

        }

        if (0 === strpos($pathinfo, '/dashboardE')) {
            if (0 === strpos($pathinfo, '/dashboardEtudiant')) {
                // dashboard_Etudiant_listCours
                if (0 === strpos($pathinfo, '/dashboardEtudiantListCours') && preg_match('#^/dashboardEtudiantListCours/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dashboard_Etudiant_listCours')), array (  '_controller' => 'mooclineCompteBundle:Dashboard:dashboardEtu_LC',));
                }

                // dashboard_Etudiant_radierCours
                if (0 === strpos($pathinfo, '/dashboardEtudiantRadierCours') && preg_match('#^/dashboardEtudiantRadierCours/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dashboard_Etudiant_radierCours')), array (  '_controller' => 'mooclineCompteBundle:Dashboard:dashboardEtu_RC',));
                }

                // dashboard_Etudiant_platformCours
                if (0 === strpos($pathinfo, '/dashboardEtudiantPlatformCours') && preg_match('#^/dashboardEtudiantPlatformCours/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dashboard_Etudiant_platformCours')), array (  '_controller' => 'mooclineCompteBundle:Dashboard:dashboardEtu_PC',));
                }

            }

            // dashboard_Enseignant
            if (0 === strpos($pathinfo, '/dashboardEnseignant') && preg_match('#^/dashboardEnseignant/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dashboard_Enseignant')), array (  '_controller' => 'mooclineCompteBundle:Dashboard:dashboardEns',));
            }

        }

        if (0 === strpos($pathinfo, '/exo')) {
            // moocline_exo_homepage
            if ($pathinfo === '/exo/hello') {
                return array (  '_controller' => 'mooclineExoBundle:Default:index',  '_route' => 'moocline_exo_homepage',);
            }

            // moocline_exo_import
            if ($pathinfo === '/exo/importxml') {
                return array (  '_controller' => 'mooclineExoBundle:ImpExp:import',  '_route' => 'moocline_exo_import',);
            }

            if (0 === strpos($pathinfo, '/exo/create')) {
                // moocline_FEx_create
                if ($pathinfo === '/exo/createFEx') {
                    return array (  '_controller' => 'moocline\\ExoBundle\\Controller\\CreateExoController::createFeuilleExAction',  '_route' => 'moocline_FEx_create',);
                }

                if (0 === strpos($pathinfo, '/exo/createExo')) {
                    // moocline_exo_create
                    if ($pathinfo === '/exo/createExo') {
                        return array (  '_controller' => 'moocline\\ExoBundle\\Controller\\CreateExoController::createTypeExAction',  '_route' => 'moocline_exo_create',);
                    }

                    // moocline_exo_createExercice
                    if (preg_match('#^/exo/createExo/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'moocline_exo_createExercice')), array (  '_controller' => 'moocline\\ExoBundle\\Controller\\CreateExoController::createExerciceAction',));
                    }

                    // moocline_exo_apercu
                    if (preg_match('#^/exo/createExo/(?P<type>[^/]++)/apercu$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'moocline_exo_apercu')), array (  '_controller' => 'moocline\\ExoBundle\\Controller\\CreateExoController::apercuExerciceAction',));
                    }

                    // moocline_exo_chooseFEx
                    if (preg_match('#^/exo/createExo/(?P<type>[^/]++)/FEx$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'moocline_exo_chooseFEx')), array (  '_controller' => 'moocline\\ExoBundle\\Controller\\CreateExoController::chooseFeuilleExAction',));
                    }

                }

            }

            // moocline_exo_importExercice
            if ($pathinfo === '/exo/importExo') {
                return array (  '_controller' => 'moocline\\ExoBundle\\Controller\\CreateExoController::importExerciceAction',  '_route' => 'moocline_exo_importExercice',);
            }

            // moocline_exo_resolveFEx
            if ($pathinfo === '/exo/resolveFEx') {
                return array (  '_controller' => 'moocline\\ExoBundle\\Controller\\CorrExoController::resolveFExAction',  '_route' => 'moocline_exo_resolveFEx',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'moocline\\CompteBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'moocline\\CompteBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
