<h1>Posts</h1>

<ul>
@foreach ($posts as $post)
    <h1>Title: {{$post->title}}</h1>
    <p>Description: {{$post->description}}</p>
@endforeach
</ul>

<h1>Create post</h1>
<form action="/posts" method="post">
    <div>
        <input name="title" placeholder="Enter title ...">
    </div>
    <div>
        <textarea name="description" placeholder="Enter description ..."></textarea>
    </div>
    <div>
        <input type="submit" value="Izveidot">
    </div>
</form>