@extends('layouts.backend')

@section('page_title_breadcrumb')
    {{ _lang($subTitle) }}
@endsection
@section('create-button-2')
 

    <button class="btn btn-primary btn-round ms-auto" data-bs-toggle="modal"
    data-bs-target="#addRowModal">
    <i class="fa fa-plus"></i>


   {{ _lang($title) }}
</button>
@endsection

<style>
    /* Default styles */
    div.dt-container div.dt-length label {
        display: inline-block !important;
        float: left !important;
    }

    div.dt-container div.dt-search {
        display: inline-block !important;
        float: right !important;
    }

    /* Media query for screens less than or equal to 668px */
    @media (max-width: 668px) {
        div.dt-container div.dt-length label {
            float: none !important;
        }

        div.dt-container div.dt-search {
            float: none !important;
            margin-top: 10px;
        }
    }
</style>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<style>
.btn_upload {
cursor: pointer;
display: inline-block;
overflow: hidden;
position: relative;
color: #fff;
background-color: #2a72d4;
border: 1px solid #166b8a;
padding: 5px 10px;
}

.btn_upload:hover,
.btn_upload:focus {
background-color: #7ca9e6;
}

.yes {
display: flex;
align-items: flex-start;
margin-top: 10px !important;
}

.btn_upload input {
cursor: pointer;
height: 100%;
position: absolute;
filter: alpha(opacity=1);
-moz-opacity: 0;
opacity: 0;
}

.it {
height: 100px;
margin-left: 10px;
}

.btn-rmv1,
.btn-rmv2,
.btn-rmv3,
.btn-rmv4,
.btn-rmv5 {
display: none;
}

.rmv {
cursor: pointer;
color: #fff;
border-radius: 30px;
border: 1px solid #fff;
display: inline-block;
background: rgba(255, 0, 0, 1);
margin: -5px -10px;
}

.rmv:hover {
background: rgba(255, 0, 0, 0.5);
}
input[type="file"] {
display: block;
}
.imageThumb {
max-height: 75px;
border: 2px solid;
padding: 1px;
cursor: pointer;
}
.pip {
display: inline-block;
margin: 10px 10px 0 0;
}
.remove {
display: block;
background: #444;
border: 1px solid black;
color: white;
text-align: center;
cursor: pointer;
}
.remove:hover {
background: white;
color: black;
}
    </style>

@section('content')
    
               
                    @include('backend.modal.image')
                    

                <div class="row">      
                    @foreach ($dataList as $key => $row)
                   
                        <div class="col-sm-6 col-md-3 col-lg-3" style="margin-bottom: 10px">
                        <div class="yes">
                            
                            <img id="ImgPreview" src="{{ asset($row->image) }}" class="preview1" style="height:100px;width:100px" />
    
                            <form method="post" action="{{ route('admin.gallery.image.delete', $row->id) }}">
                              @method('delete')
                              @csrf
                              <button type="submit" class=" btn-rmv1 rmv "
                              onclick="return confirm('Are you sure you want to delete this Data ?')">
                              <input type="button" id="removeImage1" value="x" class="btn-rmv1 rmv" style="width: 20px"/>
                            </button>
                          </form>
                           
                        </div>
                        </div>
                        @endforeach
                        </div>
            


    <script>
        function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $(document).ready(function () {
     @if ($errors->any())
                
         $('#addNew').modal('show');
                   
      @endif
        });
    
     
    
    $("#imag").change(function() {
      // add your logic to decide which image control you'll use
      var imgControlName = "#ImgPreview";
      readURL(this, imgControlName);
      $('.preview1').addClass('it');
      $('.btn-rmv1').addClass('rmv');
    });
    
    
    
    
    
    $(document).ready(function() {
      if (window.File && window.FileList && window.FileReader) {
        $("#files").on("change", function(e) {
          var files = e.target.files,
            filesLength = files.length;
          for (var i = 0; i < filesLength; i++) {
            var f = files[i]
            var fileReader = new FileReader();
            fileReader.onload = (function(e) {
              var file = e.target;
              $("<span class=\"pip\">" +
                "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
                "<br/><span class=\"remove\">Remove image</span>" +
                "</span>").insertAfter("#files");
              $(".remove").click(function(){
                $(this).parent(".pip").remove();
              });
              
              // Old code here
              /*$("<img></img>", {
                class: "imageThumb",
                src: e.target.result,
                title: file.name + " | Click to remove"
              }).insertAfter("#files").click(function(){$(this).remove();});*/
              
            });
            fileReader.readAsDataURL(f);
          }
          console.log(files);
        });
      } else {
        alert("Your browser doesn't support to File API")
      }
    });
       
    </script>
     <script>
        $(document).ready(function() {
            $('#myForm').validate({
                rules: {
                    title: {
                        required: true,
                    },
                   
                },
                messages: {
                    title: {
                        required: 'Please Enter Title',
                    },
                   
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },
            });
        });

    
    </script>
 
@endsection
