<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/adminlte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{auth('admin')->user()->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> 在线</a>
            </div>
        </div>
        <!-- search form -->
        <form action="/admin/article/search" method="post" class="sidebar-form">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="text" name="title" class="form-control" placeholder="输入文档标题...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">主管理界面</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa  fa-file-text"></i> <span>核心操作管理</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li @if(Request::getRequestUri()=='/admin/category')class="active"@endif><a href="/admin/category" ><i class="fa fa-circle-o"></i> 网站栏目管理</a></li>
                    <li @if(Request::getRequestUri()=='/admin/article')class="active" @endif><a href="/admin/article"><i class="fa fa-circle-o"></i> 普通文档列表</a></li>
                    <li @if(Request::getRequestUri()=='/admin/article/ownership')class="active" @endif><a href="/admin/article/ownership"><i class="fa fa-circle-o"></i> 我发布的文档</a></li>
                    <li @if(Request::getRequestUri()=='/admin/article/pendingaudit')class="active" @endif><a href="/admin/article/pendingaudit"><i class="fa fa-circle-o"></i> 等待审核文档</a></li>
                    <li @if(Request::getRequestUri()=='/admin/article/pedingpublished')class="active" @endif><a href="/admin/article/pedingpublished"><i class="fa fa-circle-o"></i> 待发布的文档</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-random"></i> <span>友情链接管理</span>
                    <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li @if(Request::getRequestUri()=='/admin/flink')class="active"@endif><a href="/admin/flink"><i class="fa fa-circle-o"></i> 友情链接列表</a></li>
                    <li @if(Request::getRequestUri()=='/admin/flink/create')class="active"@endif><a href="/admin/flink/create"><i class="fa fa-circle-o"></i> 添加友情链接</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>杂项功能管理</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li @if(Request::getRequestUri()=='/admin/makesitemap')class="active"@endif><a href="/admin/makesitemap"><i class="fa fa-circle-o"></i> XML地图生成</a></li>
                    <li @if(Request::getRequestUri()=='/admin/phone')class="active"@endif><a href="/admin/phone"><i class="fa fa-circle-o"></i> 电话提交管理</a></li>
                    <li @if(Request::getRequestUri()=='/admin/makemsitemap')class="active"@endif><a href="/admin/makemsitemap"><i class="fa fa-circle-o"></i> 移动端地图生成</a></li>
                    <li @if(Request::getRequestUri()=='/admin/worklinks')class="active"@endif><a href="/admin/worklinks"><i class="fa fa-circle-o"></i>  工作链接生成</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user-secret"></i>
                    <span>系统用户管理</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li @if(Request::getRequestUri()=='/admin/admin/regsiter')class="active"@endif><a href="/admin/admin/regsiter"><i class="fa fa-circle-o"></i> 系统用户添加</a></li>
                    <li @if(Request::getRequestUri()=='/admin/admin/list')class="active"@endif><a href="/admin/admin/list"><i class="fa fa-circle-o"></i> 系统用户列表</a></li>
                    <li @if(Request::getRequestUri()=='/admin/admin/userauth')class="active"@endif><a href="/admin/admin/userauth"><i class="fa fa-circle-o"></i> 文档发布汇总</a></li>
                    <li @if(Request::getRequestUri()=='/admin/admin/article/infos')class="active"@endif><a href="/admin/admin/article/infos"><i class="fa fa-circle-o"></i> 文档发布筛选</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa  fa-wrench"></i> <span>系统设置中心</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li @if(Request::getRequestUri()=='/admin/sysconfig')class="active"@endif><a href="/admin/sysconfig"><i class="fa fa-circle-o"></i> 站点核心设置</a></li>
                    <li @if(Request::getRequestUri()=='/admin/sysinfo')class="active"@endif><a href="/admin/sysinfo"><i class="fa fa-circle-o"></i> 系统运行信息</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-angellist"></i> <span>SEO工具使用</span>
                    <small class="label pull-right bg-yellow">12</small>
                    <small class="label pull-right bg-green">16</small>
                    <small class="label pull-right bg-red">5</small>
              <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li @if(Request::getRequestUri()=='/admin/searchkey')class="active"@endif><a href="/admin/searchkey"><i class="fa fa-circle-o"></i> 相关关键词采集</a></li>
                    <li @if(Request::getRequestUri()=='/admin/webinfo')class="active"@endif><a href="/admin/webinfo"><i class="fa fa-circle-o"></i> 站点信息查询</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user-plus"></i> <span>前台会员中心</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li @if(Request::getRequestUri()=='/admin/userlist')class="active"@endif><a href="/admin/userlist"><i class="fa fa-circle-o"></i> 前台用户列表</a></li>
                    <li @if(Request::getRequestUri()=='/admin/useradd')class="active"@endif><a href="/admin/useradd"><i class="fa fa-circle-o"></i> 添加前台用户</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-share"></i> <span>功能待开发中</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Level One
                            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                            <li>
                                <a href="#"><i class="fa fa-circle-o"></i> Level Two
                                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                </ul>
            </li>
            <li><a href="https://github.com/HY11053/laravelcms"><i class="fa fa-book"></i> <span>后台使用文档</span></a></li>
            <li class="header">员工考核管理</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>周工作总结</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>待办事项</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>未完成事项</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
