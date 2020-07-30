<!DOCTYPE html>
<html>
    <head>
        <title>Upload Image For Getting Imagga Response</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <br />
        <div class="container">
            <h1 align="center">Upload Image For Getting Imagga Response</h1>
            <br />
            <div class="alert" id="message" style="display: none">
            </div>
            <form method="post" id="upload_form" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <table class="table">
                        <tr>
                            <td width="40%" align="right"><label>Select File for Upload</label></td>
                            <td width="30"><input type="file" name="select_file" id="select_file" /></td>
                            <td width="30%" align="left"><input type="submit" name="upload" id="upload" class="btn btn-primary" value="Upload"></td>
                        </tr>
                        <tr>
                            <td width="40%" align="right"></td>
                            <td width="30"><span class="text-muted">jpg, png, gif</span></td>
                            <td width="30%" align="left"></td>
                        </tr>
                    </table>
                </div>
            </form>
            <br />
            <span id="uploaded_image"></span>
        </div>
        <h1 style="display:flex;justify-content:center; margin-top:20px;margin-bottom:20px;">Imagga Api Response</h1>
			<div class="container">
				<div class="row">
					@forelse ($res as $res)
						<div class="col-sm-4" style="margin: 6px 0px;">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title">Tag: <?php echo $res->tag->en?></h5>
									<p class="card-text">Confidence: <?php echo $res->confidence ?></p>
								</div>
							</div>
						</div>
					@empty
					<h1>No Data Found</h1>
					@endforelse
				</div>
			</div>
    </body>
    <script>
        $(document).ready(function(){

            $('#upload_form').on('submit', function(event){
            event.preventDefault();
            $.ajax({
                url:"{{ route('ajaxupload.action') }}",
                method:"POST",
                data:new FormData(this),
                dataType:'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success:function(data)
                    {
                        $('#message').css('display', 'block');
                        $('#message').html(data.message);
                        $('#message').addClass(data.class_name);
                        $('#uploaded_image').html(data.uploaded_image);
                    }
                })
            });
        });
    </script>
</html>
