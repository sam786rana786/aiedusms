<x-app-layout>
    <x-slot name="title">Create Role</x-slot>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('rps.store') }}" method="POST">@csrf
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title"><span>Add Roles</span></h5>
                            </div>
                            <div class="col-12 col-sm-12">
                                <div class="form-group local-forms">
                                    <label for="name">Role Name</label>
                                    <input type="text" name="name" id="name"
                                        class="form-control @error('name') is-invalid @enderror">
                                    <div class="text-danger pt-2">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            @foreach ($permissions as $permission)
                                <div class="col-12 col-sm-3">
                                    <label for="permissions">
                                        <input type="checkbox" name="permissions[]" id="permissions"
                                            value="{{ $permission->id }}">
                                        {{ $permission->name }}
                                    </label>
                                </div>
                            @endforeach
                            <div class="col-12">
                                <div class="student-submit">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
