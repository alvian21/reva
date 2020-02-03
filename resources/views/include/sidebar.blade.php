<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="dashboard.html">
            <img src="{{ asset('new/assets/images/Logo.png') }}" class="img-fluid" style="margin-left: -6%;" width="150" alt="">
          </a>

        <ul class="sidebar-menu mt-2">
            <li class="nav-link-active" style="background-color: #ebf1fc;"><a href="/dashboard" style="color: #2d6cdf;"><i class="fas fa-home" style="color: #2d6cdf;"></i>&nbsp;Home</a></li>
            <li class="nav-link-active"><a href="{{ route('lifeplan') }}"><i class="fas fa-compass"></i>&nbsp;Impianku</a></li>
            <li class="nav-link-active"><a href="{{ route('data') }}"><i class="fas fa-exchange-alt"></i>&nbsp;Prioritas</a></li>
        </ul>
      </div>

      <div class="sidebar-brand mt-2 sidebar-brand-sm float-center">
        <a href="dashboard.html"><img src="{{ asset('new/assets/images/favicon.png') }}" width="25" alt=""></a>

        <ul class="sidebar-menu float-center">
          <li class="nav-link" style="background-color: #ebf1fc;"><a href="/dashboard"><i class="fas fa-home" style="color: #2d6cdf;"></i></a></li>
          <li class="nav-link"><a href="{{ route('lifeplan') }}"><i class="fas fa-compass"></i></a></li>
          <li class="nav-link"><a href="{{ route('data') }}"><i class="fas fa-exchange-alt"></i></a></li>
        </ul>
      </div>

  </aside>
</div>
