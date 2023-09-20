<aside class="left-sidebar" data-sidebarbg="skin6">
  <!-- Sidebar scroll-->
  <div class="scroll-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
      <ul id="sidebarnav">
        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ url('/home') }}"
            aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
              class="hide-menu">Dashboard</span></a></li>
        <li class="list-divider"></li>
        <li class="nav-small-cap"><span class="hide-menu">Applications</span></li>

        <li class="sidebar-item"> <a class="sidebar-link" href="{{ route('users.index') }}" aria-expanded="false"><i
              data-feather="users" class="feather-icon"></i><span class="hide-menu">Manage Users
            </span></a>
        </li>
        <li class="sidebar-item"> <a class="sidebar-link" href="{{ route('roles.index') }}" aria-expanded="false"><i
              data-feather="box" class="feather-icon"></i><span class="hide-menu">Manage Role
            </span></a>
        </li>
        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false"><i
              data-feather="box" class="feather-icon"></i><span class="hide-menu">Manage Products
            </span></a>
          <ul aria-expanded="false" class="collapse  first-level base-level-line">
            <li class="sidebar-item"><a href="{{ route('products.index') }}" class="sidebar-link"><span
                  class="hide-menu"> List Products
                </span></a>
            </li>
            <li class="sidebar-item"><a href="{{ route('products.index') }}" class="sidebar-link"><span
                  class="hide-menu"> Create Product
                </span></a>
            </li>
          </ul>
        </li>
        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false"><i
              data-feather="box" class="feather-icon"></i><span class="hide-menu">Business Type
            </span></a>
          <ul aria-expanded="false" class="collapse  first-level base-level-line">
            <li class="sidebar-item"><a href="{{ route('products.index') }}" class="sidebar-link"><span
                  class="hide-menu"> Create Business Type
                </span></a>
            </li>

            <li class="sidebar-item"><a href="{{ route('products.index') }}" class="sidebar-link"><span
                  class="hide-menu"> List Business Type
                </span></a>
            </li>
            <li class="sidebar-item"><a href="{{ route('products.index') }}" class="sidebar-link"><span
                  class="hide-menu"> Import Business Type
                </span></a>
            </li>

          </ul>
        </li>
        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false"><i
              data-feather="user" class="feather-icon"></i><span class="hide-menu">Lead
            </span></a>
          <ul aria-expanded="false" class="collapse  first-level base-level-line">
            <li class="sidebar-item"><a href="{{ route('products.index') }}" class="sidebar-link"><span
                  class="hide-menu"> Create Lead
                </span></a>
            </li>

            <li class="sidebar-item"><a href="{{ route('products.index') }}" class="sidebar-link"><span
                  class="hide-menu"> List Lead
                </span></a>
            </li>           
          </ul>
        </li>
        <li class="sidebar-item"> <a class="sidebar-link" href="{{ route('users.index') }}" aria-expanded="false"><i
              data-feather="list" class="feather-icon"></i><span class="hide-menu">Lead Status
            </span></a>
        </li>       
        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false"><i
              data-feather="list" class="feather-icon"></i><span class="hide-menu">Categories
            </span></a>
          <ul aria-expanded="false" class="collapse  first-level base-level-line">
            <li class="sidebar-item"><a href="{{ route('products.index') }}" class="sidebar-link"><span
                  class="hide-menu"> Create Categories
                </span></a>
            </li>

            <li class="sidebar-item"><a href="{{ route('products.index') }}" class="sidebar-link"><span
                  class="hide-menu"> List Categories
                </span></a>
            </li>           
          </ul>
        </li>
        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false"><i
              data-feather="box" class="feather-icon"></i><span class="hide-menu">Services
            </span></a>
          <ul aria-expanded="false" class="collapse  first-level base-level-line">
            <li class="sidebar-item"><a href="{{ route('products.index') }}" class="sidebar-link"><span
                  class="hide-menu"> Create Services
                </span></a>
            </li>

            <li class="sidebar-item"><a href="{{ route('products.index') }}" class="sidebar-link"><span
                  class="hide-menu"> List Services
                </span></a>
            </li>           
          </ul>
        </li>
        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false"><i
              data-feather="file" class="feather-icon"></i><span class="hide-menu">Invoices
            </span></a>
          <ul aria-expanded="false" class="collapse  first-level base-level-line">
            <li class="sidebar-item"><a href="{{ route('products.index') }}" class="sidebar-link"><span
                  class="hide-menu"> Create Invoice
                </span></a>
            </li>

            <li class="sidebar-item"><a href="{{ route('products.index') }}" class="sidebar-link"><span
                  class="hide-menu"> List Invoices
                </span></a>
            </li>           
          </ul>
        </li>
        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false"><i
              data-feather="flag" class="feather-icon"></i><span class="hide-menu">Reports
            </span></a>
          <ul aria-expanded="false" class="collapse  first-level base-level-line">
            <li class="sidebar-item"><a href="{{ route('products.index') }}" class="sidebar-link"><span
                  class="hide-menu"> Lead Report
                </span></a>
            </li>

            <li class="sidebar-item"><a href="{{ route('products.index') }}" class="sidebar-link"><span
                  class="hide-menu"> Product Report
                </span></a>
            </li>   
            <li class="sidebar-item"><a href="{{ route('products.index') }}" class="sidebar-link"><span
                  class="hide-menu"> Expired Product Report
                </span></a>
            </li>            
          </ul>
        </li>
      </ul>
    </nav>
    <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>