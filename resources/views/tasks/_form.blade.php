<div class="mb-2">
    <input type="text" name="list" class="form-control @error('list') is-invalid @enderror" placeholder="The Name Of Task" value="{{ old('list', $task->list) }}" >

    @error('list')

    <div class="invalid-feedback"> {{ $message }}</div>
    
    @enderror
</div>

<button type="submit" class="btn btn-primary">{{ $submit }}</button>