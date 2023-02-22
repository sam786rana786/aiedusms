<x-academic-layout>
    <form action="{{ route('academic_sessions.store') }}" method="POST">@csrf
        <div class="settings-form">
            <div class="form-group">
                <label for="year">Session From & To</label>
                <input type="text" name="year" id="year"
                    class="form-control @error('year') is-invalid @enderror">
                <div class="text-danger pt-2">
                    @error('year')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="starting_date">Starting Date</label>
                <input type="date" name="starting_date" id="date"
                    class="form-control @error('starting_date')
                    is-invalid
                @enderror">
                <div class="text-danger pt-2">
                    @error('starting_date')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="ending_date">Ending Date</label>
                <input type="date" name="ending_date" id="date"
                    class="form-control @error('ending_date')
                    is-invalid
                @enderror">
                <div class="text-danger pt-2">
                    @error('ending_date')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control select">
                    <option value="0">Inactive</option>
                    <option value="1">Active</option>
                </select>
            </div>
            <div class="form-group mb-0">
                <div class="settings-btns">
                    <button type="submit" class="btn btn-orange">Submit</button>
                </div>
            </div>
        </div>
    </form>
</x-academic-layout>
