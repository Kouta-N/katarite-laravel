@csrf
<div class="md-form">
    <label>タイトル</label>
    <input type="text" name="title" class="form-control" value="{{ $item->title ?? old('title') }}">
</div>
<div>
    <label>画像</label><br>
    <input type="file" name="img_path" accept="image/gif,image/jpeg,image/png"><br><br>
</div>
    <div class="form-group">
    <label>本文</label>
    <textarea name="body" required class="form-control" rows="16">{{ $item->body ?? old('body') }}</textarea>
</div>
<div class="md-form">
    <label>料金</label>
    <input type="number" name="price" class="form-control" value="{{ $item->price ?? old('price') }}">
    <small>半角数字で3桁以上7桁以下で入力してください。</small>
</div>
