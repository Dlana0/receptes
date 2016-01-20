@extends('layouts.app')

@section('content')


<form style="margin-top: 40px;
    margin-bottom: 70px; width: 700px;" class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Upload new recipe</legend>

<div class="control-group">
  <label class="control-label" for="title">Title</label>
  <div class="controls">
    <input id="title" name="title" type="text" placeholder="Title" class="input-xlarge">
    
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="Description">Description and ingredients</label>
  <div class="controls">                     
    <textarea id="Description" name="Description"></textarea>
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="filebutton">Recipe picture</label>
  <div class="controls">
    <input id="filebutton" name="filebutton" class="input-file" type="file">
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="singlebutton"></label>
  <div class="controls">
    <button id="singlebutton" name="singlebutton" class="btn btn-info">Upload</button>
  </div>
</div>

</fieldset>
</form>

@stop
 