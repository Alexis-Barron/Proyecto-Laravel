@csrf 

<label>Title</label>
<input class="form-control" type="text" name="title" value="{{ old( 'title', $post->title ) }}">

<label>Slug</label>
<input class="form-control" type="text" name="slug" value="{{ old( 'slug', $post->slug) }}">

<label>Content</label>
<textarea class="form-control" name="content"> {{ old( 'content', $post->content)}}</textarea>

<label>Category</label>
<Select class="form-control" name="category_id">
@foreach ($categories as $title => $id)
    <option {{ old( 'category_id', $post->category_id) == $id ? 'selected' : ''}} value="{{ $id }}">{{$title}}</option>
@endforeach
</Select>

<label>Description</label>
<textarea class="form-control" name="description">{{ old('description', $post->description)}}</textarea>

<label>Posted</label>
<select class="form-control" name="posted">
    <option {{ old('posted', $post->posted )== 'yes' ? 'selected' : ''}}  value="yes">Yes</option>
    <option {{ old('posted', $post->posted ) == 'not' ? 'selected' : ''}}   value="not">Not</option>
</select>

@if (isset($task) && $task == 'edit')
<label>Image</label>
<input class="form-control" type="file" name="image">
    
@endif


<button type="submit" class="button-send">Send</button>