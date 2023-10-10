var DisplayMode = 'LIST';
GetData();
function SetGrid(that) {
	DisplayMode = 'GRID'
	const LIST = $('#LIST');
	const GRID = $('#GRID');
	const BG = 'bg-grey-el';
	if (GRID.hasClass(BG)) {
		GRID.removeClass(BG)
		GRID.addClass('bg-yellow-el');
		GRID.addClass('text-white-el');

		LIST.removeClass('bg-yellow-el')
		LIST.addClass('bg-grey-el')
		GetData()

	}

	const TEXT = 'text-white-el';
	if (LIST.hasClass(TEXT)) {
		LIST.addClass('text-black-el')
		LIST.removeClass(TEXT)
	}

}
function SetList(that) {
	DisplayMode = 'LIST'
	const LIST = $('#LIST');
	const GRID = $('#GRID');
	const BG = 'bg-grey-el';
	if (LIST.hasClass(BG)) {
		LIST.removeClass(BG)
		LIST.addClass('bg-yellow-el');
		LIST.addClass('text-white-el');

		GRID.removeClass('bg-yellow-el')
		GRID.addClass('bg-grey-el')
		GetData()

	}

	const TEXT = 'text-white-el';
	if (GRID.hasClass(TEXT)) {
		GRID.addClass('text-black-el')
		GRID.removeClass(TEXT)
	}

}

function GetData() {
	$('#display-mode').html(loading())

	$.ajax({
		type: "GET",
		url: url + "path/getdata",
		dataType: 'json',
		success: function (response) {
			if (response.status == 200)
				show(response.data, response.count)
		},
		error: function (jqXHR, exception) {
			if (jqXHR.status === 0) {
				msg = 'Not connect.n Verify Network.';
			} else if (jqXHR.status == 404) {
				msg = 'Requested page not found. [404]';
			} else if (jqXHR.status == 500) {
				msg = 'Internal Server Error [500].';
			} else if (exception === 'parsererror') {
				msg = 'Requested JSON parse failed.';
			} else if (exception === 'timeout') {
				msg = 'Time out error.';
			} else if (exception === 'abort') {
				msg = 'Ajax request aborted.';
			} else {
				msg = 'Uncaught Error.n' + jqXHR.responseText;
			}
			pesan_error('Error', msg);
		}
	});
}

function show(data, count) {
	console.log(data)
	let html = '', subs, encode;
	const link = url + 'path/';
	let substring = 200;
	let ImgGrid = {
		width: '200px;',
		height: '205px;'
	};
	if (IsMobile() === true)
		substring = 60;


	for (let x = 0; x < count; x++) {
		encode = link + Encode(data[x]['id_learning_path'], 3);

		if (DisplayMode == 'GRID') {
			subs = data[x]['description'];
			if (data[x]['description'].length >= 50)
				subs = stripHtml(data[x]['description']).replace("<br />", "").substr(0, 50) + '...';
			html += "<div class='col-lg-4 mb-4'>";
			html += "<div class='card h-100 radius-card card-shadow-el'> ";
			html += "<div class='radius-card-img d-none d-md-block d-lg-block d-xl-block'><img class='card-img-top radius-card-img' src='" + UrlPath + data[x]['photo'] + "' style='height:280px;'></div>";
			html += "<div class='card-body'>";
			html += "<div class='card-title montserrat-700 text-size-8'>" + data[x]['name'] + "</div>";
			html += "</div><div class='card-footer no-border'>";
			html += "<a href='" + encode + "'class='float-right btn btn-hover btn-yellow-el text-size-2'>Lihat daftar kelas</a>"
			html += "</div></div></div>";
		} else if (DisplayMode == 'LIST') {
			subs = data[x]['description'];
			if (data[x]['description'].length >= substring)
				subs = stripHtml(data[x]['description']).replace("<br />", "").substr(0, substring) + '...';

			html += "<div class='col-lg-12 mb-4'>";
			html += "<div class='card h-100 flex-row radius-card card-shadow-el py-0'> ";
			html += "<div class='radius-card-img-list d-none d-md-block d-lg-block d-xl-block'><img class='card-img-left radius-card-img-list' src='" + UrlPath + data[x]['photo'] + "' style='width:" + ImgGrid.width + " height:" + ImgGrid.height + "'></div>";
			html += "<div class='card-body px-5'>";
			html += "<div class='card-title montserrat-700 text-size-12'>" + data[x]['name'] + "</div>";
			html += "<div class='card-text montserrat-400 text-muted text-size-6 text-justify'>" + subs + "</div>";
			html += "<span class='text-white-el float-left btn btn-blue-el text-size-4 montserrat-600 mt-4'>Berisi " + data[x]['number_of_course'] + " kelas</span>"
			html += "<a href='" + encode + "' class=' float-right btn btn-hover btn-yellow-el text-size-2 mt-4 '>Lihat daftar kelas</a>"
			html += "</div></div></div>";
		}
	}
	$('#display-mode').html(html)
}