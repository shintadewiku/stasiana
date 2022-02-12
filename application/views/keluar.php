<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>


<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <!-- Boxes de Acoes -->
			<div class="box">							
					<div class="info">
    <a class="btn btn-danger" href="#primary" data-toggle="modal"><h4><i class="fa fa-soundcloud"></i> LOGOUT</h4></a>
    <!-- Modal -->
    <div class="modal fade" id="primary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-header-primary">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h1><i class="fa fa-bar-chart-o"></i> LOGOUT</h1>
                </div>
                <div class="modal-body">
                Apakah Anda Yakin Ingin Keluar?
                </div>
                <div class="modal-footer">
                	<a href="<?php echo base_url('index.php/Welcome/logoutt'); ?>" class="btn btn-danger pull-right">Ya, Saya Yakin</a>
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- Modal -->
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>		    
		<!-- /Boxes de Acoes -->
	</div>
</body>
</html>

<style type="text/css">
	/*@import "//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css";*/
.box > .icon { 
    text-align: 
    center; 
    position: 
    relative; 
    }
.box > .icon > .image { 
    position: relative; 
    z-index: 2; 
    margin: auto; 
    width: 88px; 
    height: 88px; 
    border: 8px solid white; 
    line-height: 88px; 
    border-radius: 50%; 
    background: #428bca; 
    vertical-align: middle; 
    }
.box > .icon > .image > i { 
    font-size: 36px !important; 
    color: #fff !important; 
    }
.box > .icon:hover > .image > i { 
    color: white !important; 
    }
.box > .icon > .info { 
    margin-top: -24px; 
    background: rgba(0, 0, 0, 0.04); 
    border: 1px solid #e0e0e0; 
    padding: 15px 0 10px 0; 
    }
.box > .icon > .info > h3.title { 
    font-family: sans-serif !important; 
    font-size: 16px; 
    color: #222; 
    font-weight: 500; 
    }
.box > .icon > .info > p { 
    font-family: sans-serif !important; 
    font-size: 13px; 
    color: #666; 
    line-height: 1.5em; 
    margin: 20px;
    }
/*.box > .icon:hover > .info > h3.title, .box > .icon:hover > .info > p, .box > .icon:hover > .info > .more > a { 
    color: #222; 
    }*/
.box > .icon > .info > .more a { 
    font-family: sans-serif !important; 
    font-size: 12px; 
    color: #222; 
    line-height: 12px; 
    text-transform: uppercase; 
    text-decoration: none; 
    }
.box > .icon:hover > .info > .more > a { 
    color: #fff; 
    padding: 6px 8px; 
    background-color: #63B76C; 
    }
.box .space { 
    height: 30px; 
    }

.modal-header-primary {
    color:#fff;
    padding:9px 15px;
    border-bottom:1px solid #eee;
    background-color: #428bca;
    -webkit-border-top-left-radius: 5px;
    -webkit-border-top-right-radius: 5px;
    -moz-border-radius-topleft: 5px;
    -moz-border-radius-topright: 5px;
     border-top-left-radius: 5px;
     border-top-right-radius: 5px;
}


</style>