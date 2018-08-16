<?php

return [
    'settings' => [
        'company' => [
            'owner' => 'Owner',
            'name' => 'Name',
            'street' => 'Street1',
            'city' => 'City',
            'state' => 'State',
            'zip' => 'Zip',
            'country' => 'Country',
            'phone' => 'Phone',
            'email' => 'Email',
        ],
        'shipping' => [
            'weight_unit' => 'Weight unit',
            'dimensions_unit' => 'Dimensions unit',
            'shippo_live_token' => 'Shippo Live Token',
            'shippo_test_token' => 'Shippo Test Token',
            'shippo_sandbox_mode' => 'Shippo Sandbox Mode',
            'select_method' => 'Please select Shipping method',
            'no_available_shipping' => 'Sorry there is no available shipping methods',
        ],
        'tax' => [
            'calculate_tax' => 'Enable Tax Calculation',

        ],
        'rating' => [
            'enable' => 'Enable Rating',
        ],
        'wishlist' => [
            'enable' => 'Enable Wishlist',
        ],
        'appearance' => [
            'page_limit' => 'Shop page limit',
        ],
        'search' => [
            'title_weight' => 'Title Weight',
            'content_weight' => 'Content Weight',
            'enable_wildcards' => 'Enable Wildcard Search',
        ],
        'additonal_charge' => [
            'title' => 'Charge title to be displayed to the end user on checkout',
            'amount' => 'Charge Amount',
            'type' => 'Charge Type',
            'gateways' => 'Apply for these payment gateways only (comma seperated)',
        ]

    ],
    'cart' => [
        'item_has_been_update' => 'Item quantity has been updated',
        'item_has_been_delete' => 'Item has been deleted from Cart',
        'cart_empty' => 'Your cart is Empty now',
        'product_has_been_add' => 'Product has been added to cart successfully',
        'product' => 'Product',
        'quantity' => 'Quantity',
        'price' => 'Price',
        'sub_total' => 'Subtotal',
        'continue_shop' => 'Continue Shopping',
        'proceed_checkout' => 'Proceed to Checkout',
        'empty_cart' => 'Empty Cart',
        'no_item_in_shopping' => 'You have no items in your shopping cart',
        'have_coupon' => 'Have a Coupon ?',
    ],
    'product' => [
        'image_upload' => 'Image has been uploaded Successfully',
        'option_cannot_global' => 'Options cannot be global and variable at same time',
        'variations' => '<i class="fa fa-fw fa-sliders"></i> Variations',
        'category' => 'Product Categories',
        'file' => 'File',
        'description' => 'Description',
        'add_download' => 'click to add new download.',
        'variation_option' => 'Variation Options',
        'caption' => 'Caption',
        'more' => 'More &rightarrow;'
    ],
    'checkout' => [
        'please_enter_payment' => 'Please enter payment details',
        'title' => 'Billing Address',
        'save_billing' => 'Save billing address to my profile',
        'copy_billing' => 'Copy billing address to shipping address',
        'save_shipping' => 'Save shipping address to my profile',
        'shipping_title' => 'Shipping Address ',
        'title_checkout' => ' Checkout Details',
        'cart_detail' => 'Cart Details',
        'address_checkout' => 'Checkout Address',
        'select_shipping' => 'Select Shipping',
        'select_payment' => 'Select Payment',
        'enter_payment' => 'Enter Payment Details',
        'order_review' => 'Order Review',
        'sub_total' => 'Subtotal',
        'tax' => 'Tax',
        'discount' => 'Discount',
        'total' => 'Your Total',
        'complete_order' => '<i class="fa fa-cart"></i> Complete Order ',
    ],
    'attribute' => [
        'order' => 'Order',
        'value' => 'Value',
        'display' => 'Display',
        'add_new_option' => ' click to add new option.'
    ],
    'mail' => [
        'amount' => 'Amount',
        'qt' => 'QT',
        'description' => 'Description',
        'sku' => 'SKU#',
        'type' => 'Type',
        'total' => 'TOTAL',
        'download' => 'Downloadables',
        'file' => 'File',
        'premium_content' => 'Premium Content Pages',
        'bill_address' => 'Billing Address',
        'address_one' => 'Address 1',
        'address_two' => 'Address 2',
        'city' => 'City',
        'state' => 'State',
        'zip' => 'Zip',
        'country' => 'Country',
        'shipping_details' => 'Shipping Details',
        'tracking_num' => ' Tracking Number',
        'tracking_label' => 'Tracking Label',
        'click_here' => 'Click Here'
    ],
    'order' => [
        'download' => 'Downloads',
        'success' => 'Success',
        'order_has_been_placed' => 'Your Order has been placed successfully',
        'go_to_my_order' => 'Go to my orders',
        'order_detail' => 'Order Details',
        'update_order' => 'Update Order',
        'my_download' => 'My Downloads',
        'my_order' => 'My Orders',
        'private_page' => 'My Private Pages',
        'title' => 'Orders',
        'billing_add' => 'Billing Address',
        'click_here' => 'Click Here',
        'shipping_details' => 'Shipping Details',
        'tracking_num' => ' Tracking Number',
        'tracking_label' => 'Tracking Label',
        'file' => 'File',
        'description' => 'Description',
        'download_able' => 'Downloadables',
        'private_access' => 'Private Pages Access',
        'magic' => '<i class="fa fa-magic"></i> :title',
        'desc' => 'Desc',
        'date' => 'Date',
        'loc' => 'Location',
        'history' => 'History',
        'no_track' => 'is no tracking info available',
    ],
    'shipping' => [
        'pending' => 'Pending',
        'expired' => 'Expired',
        'place_holder' => 'All Countries',
    ],
    'shop' => [
        'title' => 'Orders',
        'my_orders' => 'My Orders',
        'buy' => 'Buy Product',
        'add' => 'Add to Cart',
        'out_stock' => ' Out Of Stock',
        'add_cart' => '<i class="fa fa-fw fa-cart-plus" aria-hidden="true"></i> Add to Cart',
        'no_setting_found' => 'No settings found.',
        'search' => 'Search...',
        'search_results_for' => 'Search results for: :search'

    ],
    'sku' => [
        'index_title' => '[:name] :title'
    ],
    'widget' => [
        'coupon' => 'Coupons',
        'my_download' => 'My Downloads',
        'products_by_brand' => 'Products By Brand',
        'my_order' => 'My Orders',
        'private_page' => 'My Private Pages',
        'my_wishlist' => 'My Wishlist',
        'orders' => 'Orders',
        'product_categories' => 'Product Categories',
        'product' => 'Products'
    ]
];