<div class="bg-dark text-white vh-100 p-3">

    <!-- Application Name -->
    <h4 class="mb-4">
        Ecommerce Admin
    </h4>

    <!-- Navigation Menu -->
    <ul class="nav flex-column">

        <li class="nav-item mb-2">

            <a href="{{ route('admin.dashboard') }}"
               class="nav-link text-white">

                Dashboard

            </a>

        </li>

        <li class="nav-item mb-2">

            <a href="{{ route('categories.index') }}"
               class="nav-link text-white">

                Categories

            </a>

        </li>

        <li class="nav-item mb-2">

            <a href="#"
               class="nav-link text-white">

                Shapes

            </a>

        </li>

        <li class="nav-item mb-2">

            <a href="#"
               class="nav-link text-white">

                Products

            </a>

        </li>

        <li class="nav-item mb-2">

            <a href="#"
               class="nav-link text-white">

                Reviews

            </a>

        </li>

        <!-- Logout -->
        <li class="nav-item mt-4">

            <form action="{{ route('logout') }}"
                  method="POST">

                @csrf

                <button type="submit"
                        class="btn btn-danger w-100">

                    Logout

                </button>

            </form>

        </li>

    </ul>

</div>