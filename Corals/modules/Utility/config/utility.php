<?php

return [
    'models' => [
        'rating' => [
        ],
        'wishlist' => [
            'resource_url' => 'utilities/wishlist',
        ],
        'location' => [
            'presenter' => \Corals\Modules\Utility\Transformers\Address\LocationPresenter::class,
            'resource_url' => 'utilities/address/locations',
        ],
        'tag' => [
            'presenter' => \Corals\Modules\Utility\Transformers\Tag\TagPresenter::class,
            'resource_url' => 'utilities/tags',
            'translatable' => ['name']
        ],
        'category' => [
            'presenter' => \Corals\Modules\Utility\Transformers\Category\CategoryPresenter::class,
            'resource_url' => 'utilities/categories',
            'default_image' => 'assets/corals/images/default_product_image.png',
            'translatable' => ['name']
        ],
        'attribute' => [
            'presenter' => \Corals\Modules\Utility\Transformers\Category\AttributePresenter::class,
            'resource_url' => 'utilities/attributes',
        ],
        'model_option' => [
        ]
    ]
];