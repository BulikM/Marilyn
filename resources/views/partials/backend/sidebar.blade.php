
<main class="container-fluid bg-tertiary">
    {{--    sidebar--}}
    <div class="">
        <div class="row">
            <div class="col-sm-auto sidebar">
                <div class="d-flex flex-sm-column flex-row flex-nowrap bg-none align-items-center">
                    <ul class="nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center align-items-center">
                        <li>
                            <a href="{{route('dashboard')}}" class="nav-link py-1 px-2 d-flex flex-column" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Dashboard">
                                <i class="bi-speedometer2 fs-2 text-gradient-purple"></i>
                                <span class="text-gradient-purple text-capitalize">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('customers.index')}}" class="nav-link d-flex flex-column py-1 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Customers">
                                <i class="bi-people fs-2 text-gradient-purple"></i>
                                <span class="text-gradient-purple">customers</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('employees.index')}}" class="nav-link py-3 px-2 d-flex flex-column" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Home">
                                <i class="bi bi-person-badge fs-2 text-gradient-purple"></i>
                                <span class="text-gradient-purple">Employees</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('users.index')}}" class="nav-link py-3 px-2 d-flex flex-column" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Home">
                                <i class="bi bi-person-lines-fill fs-2 text-gradient-purple"></i>
                                <span class="text-gradient-purple">Users</span>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Orders">
                                <i class="bi-table fs-2 text-gradient-purple"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Products">
                                <i class="bi-heart fs-2 text-gradient-purple"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="dropdown">
                        <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi-person-circle h2 text-gradient-purple"></i>
                        </a>
                        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm p-3 content">
