<x-backend-layout>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Admin Dashboard</h2>

    <a href="{{ route('logout') }}" class="btn btn-danger">
        Logout
    </a>
</div>

<div class="card">
    <div class="card-body">
        Welcome {{ auth()->user()->name }}
    </div>
</div>

</x-backend-layout>