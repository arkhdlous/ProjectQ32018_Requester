<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}

	.tombol-simpan{
		background: #232323;
		padding: 5px 10px;
		color: #fff;	
	}
 
	</style>
</head>
<body>

<div id="container">
	<h1>Form Request!</h1>

	<div id="body">
	<h1 align="center"> P/C 응용 S/W 개발 계획서(Applicstion S/W Development Plan ) </h1>
	<form method="post" class="form-input" action="<?php echo base_url();?>CRequest/insert_data">
 <div class="form-row align-items-center">
    <div class="col-sm-6 my-1">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">공정 명 (Plant Name) </div>
        </div>
        <input type="text" class="form-control" id="inlineFormInputGroupUsername" name="plant_name"  placeholder="Plant Name" >
      </div>
    </div>
    <div class="col-sm-6 my-1">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"> 테스트 일자 (Date of Test) </div>
        </div>
        <input type="text" class="form-control" id="inlineFormInputGroupUsername" name="date_test" placeholder="Date of Test">
      </div>
    </div>
  </div>
  <div class="form-row align-items-center">
    <div class="col-sm-6 my-1">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"> 요청일자 (Date of Request) </div>
        </div>
        <input type="text" class="form-control" id="inlineFormInputGroupUsername" name="date_request" placeholder="Date of Request">
      </div>
    </div>
    <div class="col-sm-6 my-1">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"> 설치 일자 (Date of Install) </div>
        </div>
        <input type="text" class="form-control" id="inlineFormInputGroupUsername" name="date_install"  placeholder="Date of Install">
      </div>
    </div>
  </div>
  <div class="form-row align-items-center">
    <div class="col-sm-6 my-1">
      <div class="input-group">
        <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="개발 내용 (Development Content)" readonly disabled>
      </div>
    </div>
    <div class="col-md-2 my-1">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">  추가 (Insert) </div>
        </div>
        <input class="" type="radio" name="content" id="inlineRadio1" value="insert">
      </div>
    </div>
    <div class="col-sm-2 my-1">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">  변경 (Update) </div>
        </div>
        <input class="" type="radio" name="content" id="inlineRadio1" value="insert">
      </div>
    </div>
    <div class="col-sm-2 my-1">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">  삭제 (Delete) </div>
        </div>
        <input class="" type="radio" name="content" id="inlineRadio1" value="insert">
      </div>
    </div>
  </div>

  <div class="form-row">
    <div class="col-md-12 my-1 mb-3">
      <label for="validationCustom01">내용(Summary):</label>
       <textarea class="form-control" id="exampleFormControlTextarea1" name="summary" rows="3"></textarea>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
   </div>

   <div class="form-row">
    <div class="col-md-12 my-1 mb-3">
      <label for="validationCustom01">테스트 방법(Test Method):</label>
       <textarea class="form-control" id="exampleFormControlTextarea1" name="test_method" rows="3"></textarea>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
   </div>

   <div class="form-row">
    <div class="col-md-12 my-1 mb-3">
      <label for="validationCustom01">결과 확인 방법(Monitoring Method):</label>
       <textarea class="form-control" id="exampleFormControlTextarea1" name="monitoring_method" rows="3"></textarea>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
   </div>

  <div class="form-row align-items-center">
    <div class="col-auto my-1">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>

	</form>

<form>
 
</form>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

	<script type="text/javascript">
	$(document).ready(function(){
		$(".tombol-simpan").click(function(){
			var data = $('.form-input').serialize();
			$.ajax({
				type: 'POST',
				url: "<?php echo base_url();?> CRequest/insert_data",
				data: data,
				success: function() {
					$('.showdata').load("<?php echo base_url();?>request/vrequest_data.php");
				}
			});
		});
	});
	</script>

</body>
</html>