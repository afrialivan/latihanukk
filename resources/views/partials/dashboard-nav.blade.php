<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3">
      <ul class="nav flex-column">
          <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/dashboard/laporan">
                  <i class="bi bi-file-text-fill"></i>
                  Laporan
              </a>
          </li>
      </ul>

      @can('admin')
          <ul class="nav flex-column mb-2">
              <li class="nav-item">
                  <a class="nav-link" href="#">
                      <i class="bi bi-person-fill"></i>
                      User
                  </a>
              </li>
          </ul>
      @endcan
      <ul class="nav flex-column mb-2">
          <li class="nav-item">
                  <a href="/logout" class="nav-link text-dark text-left d-lg-none d-block d-md-none d-sm-block ">Logout</a>
          </li>
      </ul>
  </div>
</nav>