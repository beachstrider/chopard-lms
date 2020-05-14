<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PDF Viewer</title>
<style type="text/css">
body {
	font-family: helvetica, arial, tahoma;
	font-size: 14px;
}
#pdf-viewer {
	width: 100%;
	max-width: 595px;
	margin: auto;
}
#pdf-wrapper {
	display: none;
}
#pdf-meta {
	margin: 15px 0 10px 0;
	overflow: hidden;
}
#pdf-loader {
	color: #fff;
	text-align: center;
	margin-top: 100px;
}
#pdf-buttons {
	float: left;
}
#pdf-info {
	color: #fff;
	float: left;
	padding: 0 10px 0 20px;
	line-height: 30px;
}
#pdf-canvas {
	display: block;
	margin: auto;
}
#pdf-area {
	width: auto;
	max-height: 841px;
	overflow: auto;
	background-color: #fff;
}
.btn {
	width: 30px;
	height: 30px;
	display: inline-block;
	margin-bottom: 0;
	font-weight: normal;
	text-align: center;
	vertical-align: middle;
	-ms-touch-action: manipulation;
	touch-action: manipulation;
	cursor: pointer;
	background-image: none;
	background-color: transparent;
	border: none;
	white-space: nowrap;
	padding: 0;
	font-size: 14px;
	line-height: 1.42857143;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}
.btn-separator {
	display: inline-block;
	width: 2px;
	height: 20px;
	background-color: #fff;
	vertical-align: middle;
	margin: 0;
}
.btn-grupo {
	display: inline-block;
	margin: 0 5px;
}
</style>
</head>
<body>
<div id="pdf-viewer">
    <div id="pdf-loader">Loading reference material...</div>
    <div id="pdf-wrapper">
    	<div id="pdf-meta">
			<div id="pdf-buttons">
				<button id="pdf-prev" class="btn">
					<img src="{{ asset('assets/img/ico-flecha-izq.png') }}" alt="Previous">
				</button>
				<div class="btn-separator"></div>
				<button id="pdf-next" class="btn">
					<img src="{{ asset('assets/img/ico-flecha-der.png') }}" alt="Next">
				</button>
				<div class="btn-grupo">
					<button id="pdf-zoomin" class="btn">
						<img src="{{ asset('assets/img/ico-zoomin.png') }}" alt="Zoom In">
					</button>
					<button id="pdf-zoomout" class="btn">
						<img src="{{ asset('assets/img/ico-zoomout.png') }}" alt="Zoom Out">
					</button>
				</div>
				<button id="pdf-down" class="btn">
					<img src="{{ asset('assets/img/ico-download.png') }}" alt="Previous">
				</button>			
			</div>
			<div id="pdf-info">
				Page <span id="pdf-current-page"></span> of <span id="pdf-total-pages"></span>
			</div>
		</div>
		<div id="pdf-area">
			<canvas id="pdf-canvas"></canvas>
		</div>
	</div>
</div>
<script src="{{ asset('assets/vendor/jquery/jquery.js') }}"></script>
<script src="{{ asset('assets/vendor/pdfjs/pdf.min.js') }}"></script>
<script>
PDFJS.workerSrc = "{{ asset('assets/vendor/pdfjs/pdf.worker.min.js') }}";
var pdf_url = "{{ route('material', ['chapter' => $chapter, 'activity_id' => $activity_id]) }}";
var pdf_doc,
	pdf_total_pages,
	pdf_current_page,
	pdf_current_scale,
	pdf_page_rendering_in_progress = 0
	console.log(pdf_url);
function showPDF() {
    PDFJS.getDocument({ url: pdf_url }).then(function(pdf) {
        pdf_doc = pdf;
        pdf_total_pages = pdf_doc.numPages;
        $("#pdf-total-pages").text(pdf_total_pages);
		$("#pdf-current-page").text(1);		
        showPage(1);
    }).catch(function(error) {
        $("#pdf-loader").text('Error: '+error.message).show();
    });
}
function showPage(page_no, scale) {
	$("#pdf-buttons button").prop('disabled', true);
	$("#pdf-current-page").text(page_no);	
	pdf_page_rendering_in_progress = 1;
	pdf_current_page = page_no;
	var canvas = $('#pdf-canvas').get(0);
	var context = canvas.getContext('2d');
    pdf_doc.getPage(page_no).then(function(page) {
        scale_required = scale ? scale : 1;
        pdf_current_scale = scale_required;
        var viewport = page.getViewport(scale_required);
        canvas.width = viewport.width;
        canvas.height = viewport.height;
        var renderContext = {
            canvasContext: context,
            viewport: viewport
        };
        page.render(renderContext).then(function() {
            pdf_page_rendering_in_progress = 0;
            $("#pdf-buttons button").prop('disabled', false);
            if (pdf_current_page === 1) {
				$("#pdf-loader").fadeOut(400, function() {
					$("#pdf-wrapper").fadeIn();
				});
            }
        }).catch(function(error) {
        	$("#pdf-loader").text('Error: '+error.message).show();
    	});
    });
}
$("#pdf-prev").on('click', function() {
    if(pdf_current_page != 1)
        showPage(--pdf_current_page);
});
$("#pdf-next").on('click', function() {
    if(pdf_current_page != pdf_total_pages)
        showPage(++pdf_current_page);
});
$("#pdf-zoomin").on('click', function() {
	showPage(pdf_current_page, pdf_current_scale+0.1);
});
$("#pdf-zoomout").on('click', function() {
	if (pdf_current_scale > 0.5) {
		showPage(pdf_current_page, pdf_current_scale-0.1);
	}
});
$("#pdf-down").on('click', function() {
	window.open(pdf_url, '_blank');
});
showPDF();
</script>
</body>
</html>