<?php

return [
    'plugin' => [
        'name'        => '博客',
        'description' => '一个强大的博客平台.',
    ],
    'blog' => [
        'menu_label'           => '博客',
        'menu_description'     => '管理博客帖子',
        'posts'                => '帖子',
        'create_post'          => '博客帖子',
        'categories'           => '分类',
        'create_category'      => '博客分类',
        'tab'                  => '博客',
        'access_posts'         => '管理博客帖子',
        'access_categories'    => '管理博客分类',
        'access_other_posts'   => '管理其他用户帖子',
        'access_import_export' => '允许导入和导出',
        'access_publish'       => '允许发布帖子',
        'delete_confirm'       => '你确定?',
        'chart_published'      => '已发布',
        'chart_drafts'         => '草稿',
        'chart_total'          => '总数',
    ],
    'posts' => [
        'list_title'       => '管理博客帖子',
        'filter_category'  => '分类',
        'filter_published' => '发布',
        'filter_date'      => '日期',
        'new_post'         => '创建帖子',
        'export_post'      => '导出帖子',
        'import_post'      => '导入帖子',
    ],
    'post' => [
        'title'                  => '标题',
        'title_placeholder'      => '新帖子标题',
        'content'                => '内容',
        'content_html'           => 'HTML 内容',
        'slug'                   => '别名',
        'slug_placeholder'       => 'new-post-slug',
        'categories'             => '分类',
        'author_email'           => '作者邮箱',
        'created'                => '创建时间',
        'created_date'           => '创建日期',
        'updated'                => '更新时间',
        'updated_date'           => '更新日期',
        'published'              => '发布时间',
        'published_date'         => '发布日期',
        'published_validation'   => '请指定发布日期',
        'tab_edit'               => '编辑',
        'tab_categories'         => '分类',
        'categories_comment'     => '选择帖子属于那个分类',
        'categories_placeholder' => '没有分类,你应该先创建一个分类!',
        'tab_manage'             => '管理',
        'published_on'           => '发布于',
        'excerpt'                => '摘录',
        'summary'                => '总结',
        'featured_images'        => '特色图片',
        'delete_confirm'         => '确定删除该帖子?',
        'close_confirm'          => '该帖子未保存.',
        'return_to_posts'        => '返回帖子列表',
    ],
    'categories' => [
        'list_title'    => '管理博客分类',
        'new_category'  => '新分类',
        'uncategorized' => '未分类',
    ],
    'category' => [
        'name'                 => '名称',
        'name_placeholder'     => '新分类名称',
        'description'          => '描述',
        'slug'                 => '别名',
        'slug_placeholder'     => 'new-category-slug',
        'posts'                => '帖子',
        'delete_confirm'       => '确定删除分类?',
        'return_to_categories' => '返回博客分类列表',
        'reorder'              => '重新排序分类',
    ],
    'menuitem' => [
        'blog_category'       => '博客分类',
        'all_blog_categories' => '所有博客分类',
        'blog_post'           => '博客帖子',
        'all_blog_posts'      => '所有博客帖子',
    ],
    'settings' => [
        'category_title'                     => '分类列表',
        'category_description'               => '在页面上显示帖子分类列表.',
        'category_slug'                      => '分类别名',
        'category_slug_description'          => '用分类别名查找博客分类. 该值被默认组件的partial用来激活当前分类.',
        'category_display_empty'             => '显示空的分类',
        'category_display_empty_description' => '显示没有帖子的分类.',
        'category_page'                      => '分类页',
        'category_page_description'          => '用来生成分类链接的分类页面文件名称. 该属性被默认组件partial所使用.',
        'post_title'                         => '帖子',
        'post_description'                   => '在页面上显示博客帖子.',
        'post_slug'                          => '帖子别名',
        'post_slug_description'              => '用帖子别名查找博客帖子.',
        'post_category'                      => '分类页',
        'post_category_description'          => '用来生成分类链接的分类页面文件名称. 该属性被默认组件partial所使用.',
        'posts_title'                        => '帖子列表',
        'posts_description'                  => '在页面上显示最近发布的博客帖子列表.',
        'posts_pagination'                   => '页数',
        'posts_pagination_description'       => '该值用来判定用户所在页面.',
        'posts_filter'                       => '过滤分类',
        'posts_filter_description'           => '输入分类的别名(slug)或者URL参数来过滤帖子. 留空显示所有帖子.',
        'posts_per_page'                     => '每页帖子数',
        'posts_per_page_validation'          => '每一页帖子数量的值的格式错误',
        'posts_no_posts'                     => '没有帖子的消息',
        'posts_no_posts_description'         => '如果博客帖子列表中一个帖子都没有要显示的提示消息. 该属性被默认组件partial所使用.',
        'posts_order'                        => '帖子排序',
        'posts_order_description'            => '帖子排序的属性',
        'posts_category'                     => '分类页',
        'posts_category_description'         => '用来生成"发布到"分类链接的分类页文件名称. 该属性被默认组件partial所使用.',
        'posts_post'                         => '帖子页',
        'posts_post_description'             => ' 查看帖子的"详情"的页面文件. 该属性被默认组件partial所使用.',
        'posts_except_post'                  => '排除的帖子',
        'posts_except_post_description'      => '输入帖子的ID/URL或者变量来排除你不想看见的帖子',
        'rssfeed_blog'                       => '博客页面',
        'rssfeed_blog_description'           => '生成博客帖子首页面文件名称. 该属性被默认组件partial所使用.',
        'rssfeed_title'                      => 'RSS Feed',
        'rssfeed_description'                => '从博客生成一个包含帖子的RSS Feed.',
    ],
];
