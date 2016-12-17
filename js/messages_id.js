/*
 * Translated default messages for the jQuery validation plugin.
 * Locale: FR (French; français)
 */
jQuery.extend(jQuery.validator.messages, {
	required: "Harap bidang ini diisi.",
	remote: "Silakan perbaiki bidang ini.",
	email: "Harap berikan alamat email yang valid.",
	url: "Harap berikan URL yang valid.",
	date: "Harap memberikan tanggal yang valid.",
	dateISO: "Harap memberikan tanggal yang valid (ISO).",
	number: "Harap memberikan angka yang valid.",
	digits: "Harap memberikan angka saja.",
	creditcard: "Harap memberikan nomor kartu kredit yang valid.",
	equalTo: "Harap memberikan nilai yang sama lagi.",
	accept: "Silakan memberikan nilai dengan ekstensi yang valid.",
	maxlength: $.validator.format("Mohon berikan paling {0} karakter"),
	minlength: $.validator.format("Mohon berikan setidaknya {0} karakter."),
	rangelength: $.validator.format("Silakan memberikan nilai yang berisi antara {0} dan {1} karakter"),
	range: $.validator.format("Harap memberikan nilai antara {0} dan {1}."),
	max: $.validator.format("Silakan memberikan nilai kurang dari atau sama dengan {0}."),
	min: $.validator.format("Harap memberikan nilai yang lebih besar dari atau sama dengan {0}."),
	maxWords: $.validator.format("Mohon berikan paling {0} kata."),
	minWords: $.validator.format("Mohon berikan setidaknya {0} kata."),
	rangeWords: $.validator.format("Mohon berikan antara {0} dan {1} kata."),
	letterswithbasicpunc: "Mohon berikan hanya huruf dan tanda baca.",
	alphanumeric: "Harap berikan hanya huruf, angka, spasi dan garis bawah",
	lettersonly: "Harap berikan hanya huruf.",
	nowhitespace: "Jangan masukkan karakter kosong.",
	ziprange: "Harap memberikan kode pos antara 902xx dan 905-xxxx-xx-xxxx.",
	integer: "Harap memberikan nomor non-desimal yang positif atau negatif.",
	vinUS: "Harap memberikan nomor identifikasi kendaraan (VIN).",
	dateITA: "Harap memberikan tanggal yang valid.",
	time: "Harap memberikan waktu yang valid 0:00-23:59.",
	phoneUS: "Harap memberikan nomor telepon yang valid.",
	phoneUK: "Harap memberikan nomor telepon yang valid.",
	mobileUK: "Harap memberikan nomor ponsel yang valid.",
	strippedminlength: jQuery.validator.format("VMohon berikan setidaknya {0} karakter."),
	email2: "Harap berikan alamat email yang valid.",
	url2: "Harap berikan URL yang valid.",
	creditcardtypes: "Harap memberikan nomor kartu kredit yang valid.",
	ipv4: "Harap memberikan alamat IP v4 yang sah.",
	ipv6: "Harap memberikan alamat IP v6 yang sah."
});


$(document).ready(function() {
				$("#form1").validate();
			});