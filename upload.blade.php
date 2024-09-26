<form action="upload" method="POST" enctype="multipart/form-data">
    @csrf
<input type="file" name="file"><br>

<button type="submit">Submit</button>
</form>