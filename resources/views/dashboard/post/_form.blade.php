@csrf 

<label>Title</label>
<input type="text" name="title" value="{{ old( 'title', $post->title ) }}">

<label>Slug</label>
<input type="text" name="slug" value="{{ old( 'slug', $post->slug) }}">

<label>Content</label>
<textarea name="content"> {{ old( 'content', $post->content)}}</textarea>

<label>Category</label>
<Select name="category_id">
   @foreach ($categories as $title => $id)
       <option {{ old( 'category_id', $post->category_id) == $id ? 'selected' : ''}} value="{{ $id }}">{{$title}}</option>
   @endforeach
</Select>

<label>Description</label>
<textarea name="description">{{ old('description', $post->description)}}</textarea>

<label>Posted</label>
<select name="posted">
    <option {{ old('posted', $post->posted )== 'yes' ? 'selected' : ''}}  value="yes">Yes</option>
    <option {{ old('posted', $post->posted ) == 'not' ? 'selected' : ''}}   value="not">Not</option>
</select>

@if (isset($task) && $task == 'edit')
<label>Image</label>
<input type="file" name="image">
    
@endif


<button type="submit">Send</button>