<?php

return [
    'models' => [
        'page' => [
            'presenter' => \Corals\Modules\CMS\Transformers\PagePresenter::class,
            'resource_url' => 'cms/pages',
            'translatable' => ['content']
        ],
        'post' => [
            'presenter' => \Corals\Modules\CMS\Transformers\PostPresenter::class,
            'resource_url' => 'cms/posts',
        ],
        'category' => [
            'presenter' => \Corals\Modules\CMS\Transformers\CategoryPresenter::class,
            'resource_url' => 'cms/categories',
        ],
        'news' => [
            'presenter' => \Corals\Modules\CMS\Transformers\NewsPresenter::class,
            'resource_url' => 'cms/news',
        ],
    ],
    'frontend' => [
        'page_limit' => 10,
    ]
];