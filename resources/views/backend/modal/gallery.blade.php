@if(empty($data->id))

<div class="modal fade" id="addRowModal" tabindex="-1" aria-labelledby="exampleModalLabel"
aria-hidden="true">
@else 
<div class="modal fade" id="editRowModal{{ $data->id }}"  tabindex="-1" aria-labelledby="exampleModalLabel"
aria-hidden="true">
@endif


<div class="modal-dialog modal-md">
    <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">
                @if(empty($data->id))  {{ $addTitle }} @else {{ $editTitle}}  @endif
                
                </h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"></button>
        </div>
        <form id="myForm"  method="POST"
        @if(empty($data->id)) action="{{route('admin.gallery.add.update.info')}}" @else action="{{route('admin.gallery.add.update.info',$data->id)}}"  @endif   enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="card-body">
                    <div class="row">
                        <!-- Left Column -->
                        <div class="col-md-12 col-lg-12">

                            <div class="form-group">
                                <label>Title</label>
                               
                                <input type="text" name="title"   value="{{ old('title', $data->title ?? " ") }}"  class="block w-full px-3 py-2 text-gray-700 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-300 focus:border-blue-500"  onchange="readURL(this);"  />
                                @error('title') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">
                    @if(empty($data->id))  <span>Submit</span> @else <span>Update</span>  @endif
                </button>
            </div>
        </form>
    </div>
</div>
</div>

<script>
    // Show the appropriate modal on validation errors
  
</script>


