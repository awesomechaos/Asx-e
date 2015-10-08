<?php
namespace App\Http\Controllers\Admin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Admin\BaseContoller;
use App\AdminUser;
use DB;
use App\Model\Admin\Menu;
use App\Model\Admin\Authority_menu;
use App\Model\Admin\User;
use Cookie;
class AdminController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Requests\StoreAdminUserRequest $request)
    {
        //
        $arr = array(
            0 => array(
                'key' => 11,
                'map' => 22,
                'child' => array(
                    0 => array(
                        'key' => 12,
                        'map' => 23,
                        'child' => array()
                    )
                )
            ),
            1 => array(
                'key' => 21,
                'map' => 31,
                'child' => array()
            )

        );
//        $user = AdminUser::findOrFail(1);
//        return view('admin.b');
        return 'opps';
//        $tt = array( '1' , '2', '3');
//        return view('admin.index', compact('arr'));
    }
    public function i()
    {
        //asx:下面这些变成类的数据成员，方法直接读
        $head['title'] = 'test';
        $head['isAdmin'] = true;
        $nav['pageName'] = 'Dashboard';
        $nav['subPage'] = '';
        $nav['description'] = '';
        if (!isset($_COOKIE['style_color'])) {
            $head['style_color'] = 'default';
        } else {
            $head['style_color'] = $_COOKIE['style_color'];
        }
        $me['photo'] = 'assets/admin/image/avatar1.jpg';
        $me['username'] = 'Ian z';
        $menus = $this->menus;
        return view('admin.index', compact('head', 'nav', 'me', 'menus'));
    }

    /**
     * produce the admin config from database
     * asx:移到管理员权限菜单
     */
    public function getConfigFromDatabase()
    {
        $configs = DB::table('configs')
            ->select('name', 'value')
            ->get();
        $notification_types = DB::table('notification_types')
                                ->select('type', 'cssType')
                                ->get();
        $menus = DB::table('menus')
            ->select('id', 'name', 'href', 'icon', 'controller')
            ->where('isMainMenu', '=', 1)
            ->where('isLock', '=', 0)
            ->orderBy('weight', 'desc')
            ->get();
        $subMenus = array();
        foreach ($menus as $menu) {
            $tmp = DB::table('menus')
                ->select('id', 'name', 'href', 'controller')
                ->where('isMainMenu', '=', 0)
                ->where('isLock', '=', 0)
                ->where('mainMenuId', '=', $menu->id)
                ->orderBy('weight', 'desc')
                ->get();
            if (count($tmp) != 0) {
                $subMenus[$menu->id] = $tmp;
            }
        }
        ob_start();
        echo "<?php".PHP_EOL;
        echo "/*".PHP_EOL;
        echo " * 后台管理的配置文件在此".PHP_EOL;
        echo " * created at ".date('Y-m-d H:m:s')." by script".PHP_EOL;
        echo " */".PHP_EOL;
        echo "return [".PHP_EOL;
        //menu start
        echo "    'menu' => array(".PHP_EOL;
        foreach ($menus as $menu) {
            echo "        '$menu->name'".' => array('.PHP_EOL;
            echo "                  'href' => '$menu->href',".PHP_EOL;
            echo "                  'icon' => '$menu->icon',".PHP_EOL;
            echo "                  'controller' => '$menu->controller',".PHP_EOL;
            echo "                  'id' => '$menu->id',".PHP_EOL;
            if (isset($subMenus[$menu->id])) {
                echo "                  'subMenu' => array(".PHP_EOL;
                foreach ($subMenus[$menu->id] as $subMenu) {
                    echo "                              array(".PHP_EOL;
                    echo "                                  'href' => '$subMenu->href',".PHP_EOL;
                    echo "                                  'name' => '$subMenu->name',".PHP_EOL;
                    echo "                                  'controller' => '$subMenu->controller',".PHP_EOL;
                    echo "                                  'id' => '$subMenu->id',".PHP_EOL;
                    echo "                              ),".PHP_EOL;
                }
                echo "                   ),".PHP_EOL;
            } else {
                echo "                  'subMenu' => array(),".PHP_EOL;
            }
            echo '        ),'.PHP_EOL;
        }
        echo "    ),".PHP_EOL;
        //menu end
        //notification_types start
        echo "    'notification_type' => array(".PHP_EOL;
        foreach ($notification_types as $type) {
            echo "        '$type->type' => '$type->cssType',".PHP_EOL;
        }
        echo "    ),".PHP_EOL;
        //notification_types end
        //configs start
        echo "    'notification_type' => array(".PHP_EOL;
        foreach ($configs as $config) {
            echo "        '$config->name' => '$config->value',".PHP_EOL;
        }
        echo "    ),".PHP_EOL;
        //configs end
        echo "];";
        $menuArray = ob_get_clean();
        file_put_contents(config_path().'/config/admin.php', $menuArray);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}