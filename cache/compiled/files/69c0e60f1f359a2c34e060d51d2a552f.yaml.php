<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/portfolio-grav/user/themes/fangman-v1/blueprints/home.yaml',
    'modified' => 1470629755,
    'data' => [
        'title' => 'Home',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'fields' => [
                                'header.header_background_img' => [
                                    'type' => 'pagemediaselect',
                                    'label' => 'Header Background Image'
                                ],
                                'header.about_title' => [
                                    'type' => 'text',
                                    'label' => 'About Title'
                                ],
                                'header.about_description' => [
                                    'type' => 'editor',
                                    'label' => 'About Description'
                                ],
                                'header.about_social' => [
                                    'name' => 'about_social',
                                    'type' => 'list',
                                    'label' => 'About Social Channels',
                                    'fields' => [
                                        '.url' => [
                                            'type' => 'text',
                                            'label' => 'URL'
                                        ],
                                        '.class' => [
                                            'type' => 'text',
                                            'label' => 'Class'
                                        ]
                                    ]
                                ],
                                'header.about_sidebar' => [
                                    'name' => 'about_sidebar',
                                    'type' => 'list',
                                    'label' => 'About Sidebar',
                                    'fields' => [
                                        '.title' => [
                                            'type' => 'text',
                                            'label' => 'Title'
                                        ],
                                        '.description' => [
                                            'type' => 'text',
                                            'label' => 'Description'
                                        ]
                                    ]
                                ],
                                'header.about_background_img' => [
                                    'type' => 'pagemediaselect',
                                    'label' => 'About Background Image'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
