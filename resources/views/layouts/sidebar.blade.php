 <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('public/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
    
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        @if(current_user_role() == 1)
         <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
    @else
         <li><a href="{{route('user.dashboard')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
         @endif
     @if(current_user_role() == 2)
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Fund Transfer</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('bank.transfer')}}"><i class="fa fa-circle-o"></i> Bank Transfer</a></li>
            <li><a href="{{route('topup')}}"><i class="fa fa-circle-o"></i> Top-up</a></li>
          
           
          </ul>
        </li>
        @endif

        @if(current_user_role() == 2)
        <li class="treeview">
          <a href="#">
            <i class="fa fa-money"></i>
            <span>Payments</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('utilities.payment')}}"><i class="fa fa-circle-o"></i> Utilities Payment</a></li>
            <li><a href="{{route('wallet.payment')}}"><i class="fa fa-circle-o"></i> Wallet</a></li>
          
          </ul>
        </li>
         @endif

         @if(current_user_role() == 1)
            <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('user.list')}}"><i class="fa fa-circle-o"></i> All Users</a></li>
            <li><a href="{{route('add.user')}}"><i class="fa fa-circle-o"></i>Add User</a></li>
          </ul>
        </li>
        @endif

         @if(current_user_role() == 2)
            <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Transactions</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('view.transaction')}}"><i class="fa fa-circle-o"></i> All Transactions</a></li>
            <li><a href="{{route('view.statement')}}"><i class="fa fa-circle-o"></i> Statement</a></li>
          </ul>
        </li>
        @endif

         @if(current_user_role() == 1)
        <li class="treeview">
          <a href="#">
            <i class="fa fa-money"></i>
            <span>Make Deposit</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('make.deposit')}}"><i class="fa fa-circle-o"></i> Deposit</a></li>
          </ul>
        </li>
         @endif
         </ul>
    </section>