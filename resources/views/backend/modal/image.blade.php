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
        @if(empty($data->id)) action="{{route('admin.gallery.image.add.update.info')}}" @else action="{{route('admin.gallery.image.add.update.info',$data->id)}}"  @endif   enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="card-body">
                    <div class="row">
                        <!-- Left Column -->
                        <div class="col-md-12 col-lg-12">
                          <input type="hidden" name="gallerie_id" value="{{$gallerie_id}}" />
                            <div class="form-group">
                                <div class="field" align="left">
                                    <h3>Upload your images</h3>
                                    <input type="file" id="files" name="images[]" multiple />
                                  </div>
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


