@csrf 

<label>Title</label>
<input class="form-control" type="text" name="title" value="{{ old( 'title', $category->title ) }}">

<label>Slug</label>
<input class="form-control" type="text" name="slug" value="{{ old( 'slug', $category->slug) }}">


<button type="submit" class="button-send">Send</button>
