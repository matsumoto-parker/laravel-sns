@csrf
<div class="md-form">
    <label for="">タイトル</label>
    <input type="text" name="title" class="form-control" required value="{{ $article->title ?? old('title')}}">
</div>
<div class="form-group">
    <article-tags-input></article-tags-input>
</div>
<div class="form-group">
    <label for=""></label>
<textarea name="body" class="form-control" rows="16" required placeholder="本文">{{ $article->body ?? old('body') }}</textarea>
</div>

