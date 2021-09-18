@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach($errors->all() as $message)
<li>{{$message}}
</li>

@endforeach

</ul>
</div>

@endif
    <div>
    <label for="name" >Name</label>
    </div>
    <div>
    <input type="text" id="name" name="name" value="{{$category->name }}" class="form-control" required>
    
    </div>
    <div>
    <label for="slug" >Slug</label>
    </div>
    <div>
    <input type="text" id="slug" name="slug" value="{{$category->slug }}" class="form-control">
    
    </div>
    <div>
    <label for="parent_id" >Parent_id</label>
    </div>
    <div>
   <select id="parent_id" name="parent_id" class="form-control">
   <option value="">NO Parent</option>
    @foreach($parents as $parent)
   
    <option value="{{$parent->id}}" @if($parent->id ==$category->parent_id) selected @endif>{{$parent->name}}</option>
   @endforeach
   </select>
    
    </div>
    <div>
    <label for="status" >Status</label>
    </div>
    <div>
    <select id="status" name="status" class="form-control">
  
   
    <option value="active" @if($category->status=='active') selected @endif >Active</option>
    <option value="inactive" @if($category->status=='inactive') selected @endif>InActive</option>

  
   </select>
    
    </div>

    <div class="table-toolbar mb-4">
   <br>
    <button type="submit" id="submit" class="btn btn-sm btn-primary"> save </button>
    </div>
  
    