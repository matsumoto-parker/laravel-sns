@csrf
<div class="md-form">
    <label for="">タイトル</label>
    <input type="text" name="title" class="form-control" required value="{{ old('title')}}">
</div>
<div class="form-group">
    <label for=""></label>
<textarea name="body" class="form-control" rows="16" required placeholder="本文">{{ old('body') }}</textarea>
</div>
