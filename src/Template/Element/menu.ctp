<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">

            <?php

                if ( isset($menu) && is_array($menu) && ! empty($menu) ) {
                    foreach ( $menu as $menuElement ) {
                        $out = sprintf(
                            '<li>
                                <a href="%s"><i class="fa %s fa-fw"></i> %s</a>
                            </li>',
                            \Cake\Routing\Router::url([
                                'controller' => $menuElement['controller'],
                                'action' => $menuElement['action']
                                ]),
                            $menuElement['class'],
                            $menuElement['name']

                            );

                        echo $out;
                    }
                }

            ?>

        </ul>
    </div>
</div>