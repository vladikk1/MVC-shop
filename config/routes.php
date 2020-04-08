<?php

return array(
    //class,method



    'cart/addAjax/([0-9]+)'=>'cart/addAjax/$1',
    'cart/delete/([0-9]+)'=>'cart/delete/$1',
    'cart'=>'cart/index',
    'cart/user/order'=>'cart/checkout',

    'user/reviews/user/reviews/([0-9]+)'=>'userReviews/reviewsAdd/$1',



    'user/login'=>'user/login',
    'user/register'=>'user/register',
    'user/logout'=>'user/logout',
    'user/cabinet'=>'user/cabinet',
    'user/communication'=>'user/communication',


    'user/product/item/([0-9]+)'=>'site/product/$1',
    '' => 'site/index',



    'admin/reviews/update/([0-9]+)'=>'adminReviews/update/$1',
    'admin/reviews'=>'adminReviews/index',



    'admin/product/create'=>'adminProduct/create',
    'admin/product/update/([0-9]+)'=>'adminProduct/update/$1',
    'admin/product/delete/([0-9]+)'=>'adminProduct/delete/$1',
    'admin/product'=>'adminProduct/index',


    'admin/category/create'=>'adminCategory/create',
    'admin/category/delete/([0-9]+)'=>'adminCategory/delete/$1',
    'admin/category/update/([0-9]+)'=>'adminCategory/update/$1',
    'admin/category'=>'adminCategory/index',

    'admin/users/update/([0-9]+)'=>'admin/update/$1',
    'admin/users/delete/([0-9]+)'=>'admin/delete/$1',
    'product'=>'product/list',


    'news' => 'news/index',
    'admin' => 'admin/index',


);




