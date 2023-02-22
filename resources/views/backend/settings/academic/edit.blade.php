<x-academic-layout>
    <form action="{{ route('academic_sessions.update', $academic_session) }}" method="POST">@csrf
        @method('PUT')
        <div class="settings-form">
            <div class="form-group">
                <label for="year">Session From & To</label>
                <input type="text" name="year" id="year" class="form-control @error('year') is-invalid @enderror"
                    value="{{ $academic_session->year }}">
                <div class="text-danger pt-2">
                    @error('year')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="starting_date">Starting Date</label>
                <input type="text" name="starting_date" id="date"
                    class="form-control @error('starting_date')
                    is-invalid
                @enderror"
                    value="{{ formatDate($academic_session->starting_date) }}">
                <div class="text-danger pt-2">
                    @error('starting_date')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="ending_date">Ending Date</label>
                <input type="text" name="ending_date" id="date"
                    class="form-control @error('ending_date')
                    is-invalid
                @enderror"
                    value="{{ formatDate($academic_session->ending_date) }}">
                <div class="text-danger pt-2">
                    @error('ending_date')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control select">
                    <option value="0" {{ $academic_session->status == 0 ? 'selected' : '' }}>Inactive</option>
                    <option value="1" {{ $academic_session->status == 1 ? 'selected' : '' }}>Active</option>
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
