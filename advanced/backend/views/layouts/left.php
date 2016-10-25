<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>超级管理员</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => '菜单二', 'options' => ['class' => 'header']],
                    ['label' => 'Gii 生成', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii']],
                    ['label' => 'Debug 调试', 'icon' => 'fa fa-dashboard', 'url' => ['/debug']],
                    ['label' => '登录', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => '测试',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                            ['label' => '子菜单1', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
                            ['label' => '子菜单2', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                            [
                                'label' => '等级一',
                                'icon' => 'fa fa-circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => '等级二', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                    [
                                        'label' => '等级二',
                                        'icon' => 'fa fa-circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => '等级三', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                            ['label' => '等级三', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
