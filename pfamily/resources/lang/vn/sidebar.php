<?php   
return [
    'module' => [
        [
            'title' => 'Dashboard',
            'icon' => 'fa fa-th-large',
            'name' => ['dashboard'],
            'route' => 'dashboard/index',
            'class' => 'special'
        ],
        [
            'title' => 'Báo Cáo Doanh Thu',
            'icon' => 'fa fa-money',
            'name' => ['report'],
            'subModule' => [
                [
                    'title' => 'Theo Thời Gian',
                    'route' => 'report/time'
                ],
                [
                    'title' => 'Theo Sản Phẩm',
                    'route' => 'report/product'
                ],
                [
                    'title' => 'Theo Nguồn Khách',
                    'route' => 'report/customer'
                ],
            ]
        ],
        // [
        //     'title' => 'CRM',
        //     'icon' => 'fa fa-instagram',
        //     'name' => ['construction','agency'],
        //     'subModule' => [
        //         [
        //             'title' => 'Đại lý',
        //             'route' => 'agency/index'
        //         ],
        //         [
        //             'title' => 'Công trình',
        //             'route' => 'construction/index'
        //         ],
        //         [
        //             'title' => 'Kích hoạt bảo hành',
        //             'route' => 'construction/warranty'
        //         ],
        //     ]
        // ],
        [
            'title' => 'Sản Phẩm',
            'icon' => 'fa fa-cube',
            'name' => ['product','attribute'],
            'subModule' => [
                [
                    'title' => 'Nhóm Sản Phẩm',
                    'route' => 'product/catalogue/index'
                ],
                [
                    'title' => 'Sản Phẩm',
                    'route' => 'product/index'
                ],
                [
                    'title' => 'Loại Thuộc Tính',
                    'route' => 'attribute/catalogue/index'
                ],
                [
                    'title' => 'Thuộc Tính',
                    'route' => 'attribute/index'
                ],

            ]
        ],
        [
            'title' => 'Đơn Hàng',
            'icon' => 'fa fa-shopping-bag',
            'name' => ['order'],
            'subModule' => [
                [
                    'title' => 'Quản Lý Đơn Hàng',
                    'route' => 'order/index'
                ],
            ]
        ],
        [
            'title' => 'Nhóm Khách Hàng',
            'icon' => 'fa fa-users',
            'name' => ['customer'],
            'subModule' => [
                [
                    'title' => 'Nhóm Khách Hàng',
                    'route' => asset('customer/catalogue/index')
                ],
                [
                    'title' => 'Khách Hàng',
                    'route' => 'customer/index'
                ],
            ]
        ],
        [
            'title' => 'Marketing',
            'icon' => 'fa fa-money',
            'name' => ['promotion', 'source'],
            'subModule' => [
                [
                    'title' => 'Khuyến Mại',
                    'route' => 'promotion/index'
                ],
                [
                    'title' => 'Nguồn Khách',
                    'route' => 'source/index'
                ],
            ]
        ],
        // [
        //     'title' => 'Hệ thống phân phối',
        //     'icon' => 'fa fa-truck',
        //     'name' => ['distribution'],
        //     'route' => 'distribution/index'
        // ],
        [
            'title' => 'Bài Viết',
            'icon' => 'fa fa-file',
            'name' => ['post'],
            'subModule' => [
                [
                    'title' => 'Nhóm Bài Viết',
                    'route' => 'post/catalogue/index'
                ],
                [
                    'title' => 'Quản Lý Bài Viết',
                    'route' => 'post/index'
                ]
            ]
        ],
        [
            'title' => 'Cấu Hình Chung',
            'icon' => 'fa fa-magic',
            'name' => ['system', 'widget', 'menu', 'slide'],
            'subModule' => [
                // [
                //     'title' => 'Ngôn ngữ',
                //     'route' => 'language/index'
                // ],
                // [
                //     'title' => 'Module',
                //     'route' => 'generate/index'
                // ],
                [
                    'title' => 'Cấu Hình Hệ Thống',
                    'route' => 'system/index'
                ],
                [
                    'title' => 'Quản Lý Widget',
                    'route' => 'widget/index'
                ],
                [
                    'title' => 'Cài Đặt Menu',
                    'route' => 'menu/index'
                ],
                [
                    'title' => 'Cài Đặt Slide & Banner',
                    'route' => 'slide/index'
                ],
            ]
        ],
        [
            'title' => 'Nhóm Thành Viên',
            'icon' => 'fa fa-user',
            'name' => ['user','permission'],
            'subModule' => [
                [
                    'title' => 'Nhóm Thành Viên',
                    'route' => 'user/catalogue/index'
                ],
                [
                    'title' => 'Thành Viên',
                    'route' => 'user/index'
                ],
                [
                    'title' => 'Phân Quyền',
                    'route' => 'permission/index'
                ]
            ]
        ],
        [
            'title' => 'Bình Luận',
            'icon' => 'fa fa-comment',
            'name' => ['review'],
            'subModule' => [
                [
                    'title' => 'Quản Lý Bình Luận',
                    'route' => 'review/index'
                ]
            ]
        ],
    ],
];
