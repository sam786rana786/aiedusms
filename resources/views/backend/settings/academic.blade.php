<x-app-layout>
    <x-slot name="title">Academic Session</x-slot>
    <x-settings-page />
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Academic Session Details</h5>
                </div>
                <div class="card-body">
                    {{ $slot }}
                    {{-- @if (Request::routeIs('academic_sessions.index'))
                        @include('backend.settings.academic.create')
                    @elseif (Request::routeIs('academic_sessions.edit'))
                        @include('backend.settings.academic.edit')
                    @endif --}}
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Academic Session List</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="datatable table table-stripped">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Session Name</th>
                                    <th>Starting Date</th>
                                    <th>Ending Date</th>
                                    <th>Status</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($academics as $key => $i)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $i->year }}</td>
                                        <td>{{ $i->starting_date }}</td>
                                        <td>{{ $i->ending_date }}</td>
                                        <td>{{ $i->status == 0 ? 'Inactive' : 'Active' }}</td>
                                        <td class="text-end">
                                            <div class="actions">
                                                @can('edit-settings')
                                                    <a href="{{ route('academic_sessions.edit', $i) }}"
                                                        class="btn btn-sm bg-success-light me-2">
                                                        <i class="feather-edit"></i>
                                                    </a>
                                                @endcan
                                                @can('delete-settings')
                                                    <button type="button"
                                                        class="btn btn-sm bg-danger-light deletesomething"
                                                        data-bs-toggle="modal" data-bs-target="#danger-alert-modal"
                                                        value="{{ route('academic_sessions.destroy', $i) }}">
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
