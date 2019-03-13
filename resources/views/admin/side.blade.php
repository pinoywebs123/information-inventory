<aside>
      <div id="sidebar" class="nav-collapse ">
      
        <ul class="sidebar-menu">
          <li class="{{Request::segment(2) == 'home' ? 'active' : ''}}">
            <a class="" href="{{route('admin_home')}}">
                  <i class="icon_house_alt"></i>
                  <span>HOME </span>
            </a>
          </li>

           <li class="sub-menu ">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>ORDERS</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="{{route('admin_order_pending')}}">PENDING</a></li>
              <li><a class="" href="{{route('admin_order_approve')}}">APPROVED</a></li>
              <li><a class="" href="{{route('admin_order_delivery')}}">ON DELIVERY</a></li>
            </ul>
          </li>

          <li class="{{Request::segment(2) == 'product-general' ? 'active' : ''}}">
            <a class="" href="{{route('admin_product')}}">
                  <i class="icon_id"></i>
                  <span>PRODUCTS </span>
            </a>
          </li>
          
          <li class="{{Request::segment(2) == 'reports' ? 'active' : ''}}">
            <a class="" href="{{route('admin_reports')}}">
                  <i class="icon_id"></i>
                  <span>REPORTS </span>
            </a>
          </li>
          
          
          
        </ul>
        
      </div>
    </aside>