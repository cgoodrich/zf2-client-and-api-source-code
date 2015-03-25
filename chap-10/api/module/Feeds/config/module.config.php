<?php

return array(
    'router' => array(
        'routes' => array(
            'feeds' => array(
                'type' => 'Zend\Mvc\Router\Http\Segment',
                'options' => array(
                    'route' => '/api/feeds/:username[/:id]',
                    'constraints' => array(
                        'id' => '\d+'
                    ),
                    'defaults' => array(
                        'controller' => 'Feeds\Controller\Index'
                    ),
                ),
            ),
        ),
    ),
    'console' => array(
        'router' => array(
            'routes' => array(
                'feeds-process' => array(
                    'options' => array(
                        'route' => 'feeds process [--verbose|-v]',
                        'defaults' => array(
                            'controller' => 'Feeds\Controller\Cli',
                            'action'     => 'processFeeds'
                        )
                    )
                )
            )
        )
    ),
    'di' => array(
        'services' => array(
            'Feeds\Model\UserFeedArticlesTable' => 'Feeds\Model\UserFeedArticlesTable',
            'Feeds\Model\UserFeedsTable' => 'Feeds\Model\UserFeedsTable',
        )
    ),
    'controllers' => array(
        'invokables' => array(
            'Feeds\Controller\Index' => 'Feeds\Controller\IndexController',
            'Feeds\Controller\Cli' => 'Feeds\Controller\CliController'
        ),
    ),
);
