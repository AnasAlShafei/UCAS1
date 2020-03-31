<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{('assets/img/sidebar-1.jpg')}}">
    <div class="logo">
        <a href="#" class="simple-text logo-normal">
            تیم خلاق
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            {{-- <li class="nav-item active">
          <a class="nav-link" href="/">
            <i class="material-icons">dashboard</i>
            <p>الصفحة الرئيسية</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/stadium">
            <i class="material-icons">sports_soccer</i>
            <p>الملعب</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pool">
            <i class="material-icons">pool</i>
            <p>المسبح</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Bodybuilding">
            <i class="material-icons">fitness_center</i>
            <p>كمال الأجسام</p>
          </a>
        </li> --}}
            <li class="nav-item">
                <a class="nav-link" href="{{action('users\UserController@index')}}">
                    <i class="material-icons">presone</i>
                    <p>المستخدمين</p>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{action('products\ProductsController@index')}}">
                    <i class="material-icons">fitness_center</i>
                    <p>المنتجات</p>
                </a>
            </li>
        </ul>
    </div>
</div>
