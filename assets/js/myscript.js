const flashdata = $('.flash-data').data('flashdata');

if (flashdata) {
	Swal({
		title: ' Data Anda ',
		text: 'Berhasil ' + flashdata,
		type: 'success'
	})
}