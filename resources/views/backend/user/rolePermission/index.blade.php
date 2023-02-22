<x-app-layout>
    <x-slot name="title">Roles & Permissions</x-slot>
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body">
                    <!-- Page Header -->
                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="page-title">Roles & Permissions</h3>
                            </div>
                            @can('create-roles')
                                <div class="col-auto text-end float-end ms-auto download-grp">
                                    <a href="{{ route('rps.create') }}" class="btn btn-outline-primary me-2"><i
                                            class="fas fa-users"></i>
                                        Add Roles</a>
                                </div>
                            @endcan
                        </div>
                    </div>
                    <!-- /Page Header -->
                    <div class="table-responsive">
                        <table
                            class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                            <thead class="student-thread">
                                <tr>
                                    <th>ID</th>
                                    <th>Roles</th>
                                    <th class="text-center">Permissions</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $key => $role)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $role->name }}</td>
                                        <td>
                                            @if ($role->name != 'Super Admin')
                                                <div class="row">
                                                    @foreach ($role->permissions->pluck('name') as $i)
                                                        <div class="col-sm-2">
                                                            <span class="badge bg-success">{{ $i }}</span>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @else
                                                <span class="badge bg-success">All Permissions</span>
                                            @endif
                                        </td>
                                        <td class="text-end">
                                            <div class="actions">
                                                @can('edit-roles')
                                                    <a href="{{ route('rps.edit', $role) }}"
                                                        class="btn btn-sm bg-success-light me-2">
                                                        <i class="feather-edit"></i>
                                                    </a>
                                                @endcan
                                                @can('delete-roles')
                                                    <button type="button"
                                                        class="btn btn-sm bg-danger-light deletesomething"
                                                        data-bs-toggle="modal" data-bs-target="#danger-alert-modal"
                                                        value="{{ route('rps.destroy', $role->id) }}">
                                                        <i class="feather-trash"></i>
                                                    </button>
                                                @endcan
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
