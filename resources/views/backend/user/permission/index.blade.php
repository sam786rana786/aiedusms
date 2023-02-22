<x-app-layout>
    <x-slot name="title">Permissions</x-slot>
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body">
                    <!-- Page Header -->
                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="page-title">Permissions</h3>
                            </div>
                            <div class="col-auto text-end float-end ms-auto download-grp">
                                <a href="{{ route('permissions.create') }}" class="btn btn-primary"><i
                                        class="fas fa-plus"></i> Add Permissions</a>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->
                    <div class="table-responsive">
                        <table
                            class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                            <thead class="student-thread">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($permissions as $key => $permission)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $permission->name }}</td>
                                        <td class="text-end">
                                            <div class="actions">
                                                @can('edit-roles')
                                                    <a href="{{ route('permissions.edit', $permission) }}"
                                                        class="btn btn-sm bg-success-light me-2">
                                                        <i class="feather-edit"></i>
                                                    </a>
                                                @endcan
                                                @can('delete-roles')
                                                    <button type="button"
                                                        class="btn btn-sm bg-danger-light deletesomething"
                                                        data-bs-toggle="modal" data-bs-target="#danger-alert-modal"
                                                        value="{{ route('permissions.destroy', $permission) }}">
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
